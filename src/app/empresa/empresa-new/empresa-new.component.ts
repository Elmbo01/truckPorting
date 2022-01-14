import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Empresa } from './../../shared/empresa';
import { ActivatedRoute, Router } from '@angular/router';
import { EmpresaService } from './../../core/empresa.service';

@Component({
  selector: 'app-empresa-new',
  templateUrl: './empresa-new.component.html',
  styleUrls: ['./empresa-new.component.scss'],
})
export class EmpresaNewComponent implements OnInit {
  pageTitle = 'New Empres';
  errorMessage: string = '';
  empresaForm: any;

  empresaId: number = 0;
  empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    contraseña: '',
    telefono: '',
    cif: '',
  };
  constructor(
    private fb: FormBuilder,
    private activatedroute: ActivatedRoute,
    private router: Router,
    private empresaService: EmpresaService
  ) {}

  ngOnInit(): void {
    this.empresaForm = this.fb.group({
      nombre: [
        '',
        [
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(50),
        ],
      ],
      tipo: '',
      contraseña: '',
      telefono: '',
      cif: '',
    });
    // Read the company Id from the route parameter
    //todo: arreglar linea abajo
    this.empresaId = parseInt(this.activatedroute.snapshot.params['empresaId']);
  }

  saveEmpresa(): void {
    if (this.empresaForm.valid) {
      if (this.empresaForm.dirty) {
        this.empresa = this.empresaForm.value;
        this.empresa.id = this.empresaId;

        this.empresaService.createEmpresa(this.empresa).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMessage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMessage = 'Please correct the validation errors.';
    }
  }
  onSaveComplete(): void {
    this.empresaForm;
    this.router.navigate(['']);
  }
}
