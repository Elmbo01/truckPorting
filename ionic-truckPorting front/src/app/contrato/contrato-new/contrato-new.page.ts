import { Component, OnInit } from '@angular/core';
import { Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { FormField } from 'ion-custom-form-builder';
import { ContratoService } from 'src/app/core/contrato.service';
import { Contrato } from 'src/app/shared/contrato';

@Component({
  selector: 'app-contrato-new',
  templateUrl: './contrato-new.page.html',
  styleUrls: ['./contrato-new.page.scss'],
})
export class ContratoNewPage implements OnInit {
  pageTitle = 'New Contrato';
  errorMessage: string = '';
  contratoForm: any;

  contratoId: number = 0;
  contrato: Contrato = {
    id: 0,
    empresa: null,
    evento: null,
    fecha: new Date(),
    vehiculos: null,
    precio: 0,
  };
  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private contratoService: ContratoService
  ) {}

  editForm: FormField[] = [];

  ngOnInit(): void {
    this.contratoId = parseInt(this.activatedroute.snapshot.params['id']);

    this.editForm = [
      {
        type: 'text',
        icon: 'people-circle-outline',
        title: 'Empresa',
        formControlName: 'empresa',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Empresa es necesario',
          },
        ],
      },
      {
        type: 'text',
        icon: 'bulb-outline',
        title: 'Evento',
        formControlName: 'evento',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'El evento es necesario',
          },
        ],
      },
      {
        type: 'date',
        icon: 'calendar-number-outline',
        title: 'Fecha de Firma',
        formControlName: 'fecha',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Fecha de firma es necesario',
          },
        ],
      },
      {
        type: 'text',
        icon: 'car-outline',
        title: 'Vehiculos',
        formControlName: 'vehiculos',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Vehículos es necesario',
          },
        ],
      },
      {
        type: 'number',
        icon: 'cash-outline',
        title: 'Precio Acordado',
        formControlName: 'precio',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Precio Acordado es necesario',
          },
        ],
      },
    ];
  }

  saveContrato(): void {
    if (this.contratoForm.valid) {
      if (this.contratoForm.dirty) {
        this.contrato = this.contratoForm.value;
        this.contrato.id = this.contratoId;

        this.contratoService.createContrato(this.contrato).subscribe(
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
    this.contratoForm;
    this.router.navigate(['']);
  }
}
