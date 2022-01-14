import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-edit',
  templateUrl: './empresa-edit.component.html',
  styleUrls: ['./empresa-edit.component.scss'],
})
export class EmpresaEditComponent implements OnInit {
  PageTitle = 'Empresa Edit';
  errorMesage: string = '';
  empresaForm: any;

  constructor(
    private fb: FormBuilder,
    private activatedroute: ActivatedRoute,
    private router: Router,
    private empresaService: EmpresaService
  ) {}

  empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    contraseña: '',
    telefono: '',
    cif: '',
  };

  empresaId: number = 0;

  ngOnInit(): void {
    this.empresaForm = this.fb.group({
      nombre: ['', [Validators.required]],
      tipo: ['', [Validators.required]],
      contraseña: ['', [Validators.required]],
      telefono: ['', [Validators.required]],
      cif: ['', [Validators.required]],
    });
    this.empresaId = parseInt(this.activatedroute.snapshot.params['id']);
    this.getEmpresa(this.empresaId);
  }
  getEmpresa(empresaId: number) {
    this.empresaService.getEmpresaById(empresaId).subscribe(
      (empresa: Empresa) => this.displayEmpresa(empresa),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  displayEmpresa(empresa: Empresa): void {
    if (this.empresaForm) {
      this.empresaForm.reset();
    }
    this.empresa = empresa;
    this.PageTitle = `Editar Empresa: ${this.empresa.nombre}`;
    this.empresaForm.patchValue({
      nombre: this.empresa.nombre,
      tipo: this.empresa.tipo,
      contraseña: this.empresa.contraseña,
      telefono: this.empresa.telefono,
      cif: this.empresa.cif,
    });
  }

  deleteEmpresa(): void {
    if (this.empresa.id === 0) {
      this.onSaveComplete();
    } else {
      if (confirm(`¿Quieres borrar esta empresa?`)) {
        this.empresaService.deleteEmpresa(this.empresa.id).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      }
    }
  }

  saveEmpresa(): void {
    if (this.empresaForm.valid) {
      if (this.empresaForm.dirty) {
        this.empresa = this.empresaForm.value;
        this.empresa.id = this.empresaId;

        this.empresaService.updateEmpresa(this.empresa).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMesage = 'Porfavor corrija errores de validación';
    }
  }
  onSaveComplete(): void {
    this.empresaForm.reset();
    this.router.navigate(['']);
  }
}
