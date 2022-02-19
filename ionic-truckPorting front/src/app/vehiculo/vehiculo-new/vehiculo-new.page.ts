import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Vehiculo } from './../../shared/vehiculo';
import { ActivatedRoute, Router } from '@angular/router';
import { VehiculoService } from './../../core/vehiculo.service';
import { EmpresaService } from 'src/app/core/empresa.service';
import { VehiculoModule } from '../vehiculo.module';
import { FormField } from 'ion-custom-form-builder';

@Component({
  selector: 'app-vehiculo-new',
  templateUrl: './vehiculo-new.page.html',
  styleUrls: ['./vehiculo-new.page.scss'],
})
export class VehiculoNewPage implements OnInit {
  pageTitle = 'New Vehiculo';
  errorMesage: string = '';

  vehiculoId: number = 0;
  vehiculo: Vehiculo = {
    id: 0,
    matricula: 'string',
    disponibilidad: true,
    tipo: '',
    capacidad: 0,
    costo: 0,
    personal: 0,
    imagen: '',
  };
  constructor(
    private vehiculoService: VehiculoService,
    private activatedroute: ActivatedRoute,
    private router: Router
  ) {}

  newForm: FormField[] = [];
  ngOnInit(): void {
    this.vehiculoId = parseInt(this.activatedroute.snapshot.params['id']);

    this.newForm = [
      {
        type: 'text',
        icon: 'car-outline',
        title: 'Matricula',
        formControlName: 'matricula',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Matricula es necesario',
          },
        ],
      },
      {
        type: 'checkbox',
        icon: 'checkbox-outline',
        title: 'Disponibilidad',
        formControlName: 'disponibilidad',
      },
      {
        type: 'text',
        icon: 'keypad-outline',
        title: 'Tipo de Vehiculo',
        formControlName: 'tipo',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'El tipo del vehiculo es necesario',
          },
        ],
      },
      {
        type: 'number',
        icon: 'layers-outline',
        title: 'Capacidad del Vehiculo',
        formControlName: 'capacidad',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Capacidad del vehiculo es necesario',
          },
        ],
      },
      {
        type: 'number',
        icon: 'cash-outline',
        title: 'Costo Del Vehiculo',
        formControlName: 'costo',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'El costo del vehiculo es necesario',
          },
        ],
      },
      {
        type: 'number',
        icon: 'people-circle-outline',
        title: 'Cantidad del personal en el vehiculo',
        formControlName: 'personal',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Cantidad del personal en el vehiculo es necesario',
          },
        ],
      },
      {
        type: 'text',
        icon: 'image-outline',
        title: 'ImagenURL',
        formControlName: 'imagen',
      },
    ];
  }

  createVehiculo(): void {
    this.vehiculo.matricula = this.newForm.values()[0];
    this.vehiculo.disponibilidad = this.newForm.values()[1];
    this.vehiculo.tipo = this.newForm.values()[2];
    this.vehiculo.capacidad = this.newForm.values()[3];
    this.vehiculo.costo = this.newForm.values()[4];
    this.vehiculo.personal = this.newForm.values()[5];
    this.vehiculo.imagen = this.newForm.values()[6];

    this.vehiculoService.createVehiculo(this.vehiculo).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMesage = <any>error)
    );
  }

  onSaveComplete(): void {
    this.router.navigate(['']);
  }
}
