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
  pageTitle = 'New Empresa';
  errorMessage: string = '';
  empresaForm: any;

  empresaId: number = 0;
  empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    telefono: '',
    cif: '',
    imagen: '',
    contratos: [],
    email: '',
    roles: [],
    password: undefined,
  };
  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private empresaService: EmpresaService
  ) {}

  newForm: FormField[] = [];

  ngOnInit(): void {
    this.empresaId = parseInt(this.activatedroute.snapshot.params['id']);

    this.newForm = [
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
        formControlName: 'contrasena',
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
      },
    ];
  }

  saveEmpresa(event): void {
    this.empresa.id = this.empresaId;
    this.empresa.nombre = event['nombre'];
    this.empresa.tipo = event['tipo'];
    this.empresa.password = event['contrasena'];
    this.empresa.telefono = event['telefono'];
    this.empresa.imagen = event['imagen'];

    this.empresaService.createEmpresa(this.empresa).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMessage = <any>error)
    );
  }
  onSaveComplete(): void {
    this.empresaForm;
    this.router.navigate(['/empresas']);
  }
}
