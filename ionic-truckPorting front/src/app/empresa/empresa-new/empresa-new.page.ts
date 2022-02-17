import { Component, OnInit } from '@angular/core';
import { Validators } from '@angular/forms';
import { Empresa } from './../../shared/empresa';
import { ActivatedRoute, Router } from '@angular/router';
import { EmpresaService } from './../../core/empresa.service';
import { FormField } from 'ion-custom-form-builder';

@Component({
  selector: 'app-empresa-new',
  templateUrl: './empresa-new.page.html',
  styleUrls: ['./empresa-new.page.scss'],
})
export class EmpresaNewPage implements OnInit {
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
    imagen: '',
    contratos: [],
  };
  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private empresaService: EmpresaService
  ) {}

  editForm: FormField[] = [];

  ngOnInit(): void {
    this.empresaId = parseInt(this.activatedroute.snapshot.params['id']);

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
      },
      {
        type: 'text',
        icon: 'people-circle-outline',
        title: 'Tipo de Empresa',
        formControlName: 'tipo',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'El tipo es necesario',
          },
        ],
      },
      {
        type: 'password',
        icon: 'eye-off-outline',
        title: 'Contraseña',
        formControlName: 'contraseña',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Contraseña es necesario',
          },
        ],
      },
      {
        type: 'tel',
        icon: 'call-outline',
        title: 'Teléfono',
        formControlName: 'telefono',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'telefono es necesario',
          },
        ],
      },
      {
        type: 'text',
        icon: 'apps-outline',
        title: 'CIF',
        formControlName: 'cif',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'CIF es necesario',
          },
        ],
      },
      {
        type: 'text',
        icon: 'image-outline',
        title: 'Imagen Corporativa',
        formControlName: 'imagen',
        value: this.empresa.imagen,
      },
    ];
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
