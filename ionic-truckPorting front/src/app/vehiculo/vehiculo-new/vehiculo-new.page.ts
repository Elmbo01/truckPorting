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
        title: 'Tipo',
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
        title: 'Capacidad',
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
        title: 'Precio',
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
        title: 'Personal',
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
        title: 'Imagen',
        formControlName: 'imagen',
      },
    ];
  }

  createVehiculo(event): void {
    this.vehiculo.matricula = event['matricula'];
    this.vehiculo.disponibilidad = event['disponibilidad'];
    this.vehiculo.tipo = event['tipo'];
    this.vehiculo.capacidad = event['capacidad'];
    this.vehiculo.costo = event['costo'];
    this.vehiculo.personal = event['personal'];
    this.vehiculo.imagen = event['imagen'];

    this.vehiculoService.createVehiculo(this.vehiculo).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMesage = <any>error)
    );
  }

  onSaveComplete(): void {
    this.router.navigate(['']);
  }
}
