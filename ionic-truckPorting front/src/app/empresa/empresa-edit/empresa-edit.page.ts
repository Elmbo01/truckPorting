import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { FormField } from 'ion-custom-form-builder';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';
import { Evento } from 'src/app/shared/evento';

@Component({
  selector: 'app-empresa-edit',
  templateUrl: './empresa-edit.page.html',
  styleUrls: ['./empresa-edit.page.scss'],
})
export class EmpresaEditPage implements OnInit {
  PageTitle = 'Empresa Edit';
  errorMesage: string = '';
  empresaForm: any;

  constructor(
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
    imagen: '',
    contratos: [],
  };

  editForm: FormField[] = [];
  empresaId: number = 0;
  isLoading: Boolean = true;

  ngOnInit(): void {
    this.isLoading = true;
    this.empresaId = parseInt(this.activatedroute.snapshot.params['id']);
    this.empresaService
      .getEmpresaById(this.empresaId)
      .subscribe((data: Empresa) => {
        this.empresa = data[0];
        this.isLoading = false;
      });

    this.editForm = [
      {
        type: 'text',
        icon: 'person-circle-outline',
        title: 'Nombre',
        formControlName: 'nombre',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Nombre es necesario',
          },
        ],
        value: this.empresa.nombre,
      },
      {
        type: 'text',
        icon: 'people-circle-outline',
        title: 'tipo',
        formControlName: 'tipo',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'El tipo es necesario',
          },
        ],
        value: this.empresa.tipo,
      },
      {
        type: 'password',
        icon: 'eye-off-outline',
        title: 'contraseña',
        formControlName: 'contraseña',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Contraseña es necesario',
          },
        ],
        value: this.empresa.contraseña,
      },
      {
        type: 'number',
        icon: 'call-outline',
        title: 'telefono',
        formControlName: 'telefono',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'telefono es necesario',
          },
        ],
        value: this.empresa.telefono,
      },
      {
        type: 'text',
        icon: 'apps-outline',
        title: 'cif',
        formControlName: 'cif',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'CIF es necesario',
          },
        ],
        value: this.empresa.cif,
      },
      {
        type: 'text',
        icon: 'image-outline',
        title: 'ImagenURL',
        formControlName: 'imagen',
        value: this.empresa.imagen,
      },
    ];
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
