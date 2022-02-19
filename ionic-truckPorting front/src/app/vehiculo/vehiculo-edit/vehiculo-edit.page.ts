import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { FormField } from 'ion-custom-form-builder';
import { VehiculoService } from 'src/app/core/vehiculo.service';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-vehiculo-edit',
  templateUrl: './vehiculo-edit.page.html',
  styleUrls: ['./vehiculo-edit.page.scss'],
})
export class VehiculoEditPage implements OnInit {
  PageTitle = 'Vehiculo Edit';
  errorMesage: string = '';
  editForm: FormField[] = [];

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private vehiculoService: VehiculoService
  ) {}

  vehiculo: Vehiculo = {
    id: 0,
    matricula: '',
    disponibilidad: true,
    tipo: '',
    capacidad: 0,
    costo: 0,
    personal: 0,
    imagen: '',
  };

  vehiculoId: number = 0;

  ngOnInit(): void {
    this.vehiculoId = parseInt(this.activatedroute.snapshot.params['id']);
    this.editForm = [
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
        value: this.vehiculo.matricula,
      },
      {
        type: 'checkbox',
        icon: 'checkbox-outline',
        title: 'Disponibilidad',
        formControlName: 'disponibilidad',

        value: this.vehiculo.disponibilidad,
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
        value: this.vehiculo.tipo,
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
        value: this.vehiculo.capacidad,
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
        value: this.vehiculo.costo,
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
        value: this.vehiculo.costo,
      },
      {
        type: 'text',
        icon: 'image-outline',
        title: 'ImagenURL',
        formControlName: 'imagen',
        value: this.vehiculo.imagen,
      },
    ];
    this.getVehiculo(this.vehiculoId);
  }
  getVehiculo(vehiculoId: number) {
    this.vehiculoService.getVehiculoById(vehiculoId).subscribe(
      (vehiculo: Vehiculo) => this.displayVehiculo(vehiculo),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  displayVehiculo(vehiculo: Vehiculo): void {
    this.vehiculo = vehiculo;
    this.PageTitle = `Editar Vehículo: ${this.vehiculo.matricula}`;
    this.editForm.values()[0] = this.vehiculo.matricula;
    this.editForm.values()[1] = this.vehiculo.disponibilidad;
    this.editForm.values()[2] = this.vehiculo.tipo;
    this.editForm.values()[3] = this.vehiculo.capacidad;
    this.editForm.values()[4] = this.vehiculo.costo;
    this.editForm.values()[5] = this.vehiculo.personal;
  }

  deleteVehiculo(): void {
    if (this.vehiculo.id === 0) {
      this.onSaveComplete();
    } else {
      if (confirm(`¿Quieres borrar este vehículo?`)) {
        this.vehiculoService.deleteVehiculo(this.vehiculo.id).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      }
    }
  }

  saveVehiculo(): void {
    this.vehiculo.matricula = this.editForm.values()[0];
    this.vehiculo.disponibilidad = this.editForm.values()[1];
    this.vehiculo.tipo = this.editForm.values()[2];
    this.vehiculo.capacidad = this.editForm.values()[3];
    this.vehiculo.costo = this.editForm.values()[4];
    this.vehiculo.personal = this.editForm.values()[5];
    this.vehiculo.imagen = this.editForm.values()[6];

    this.vehiculoService.createVehiculo(this.vehiculo).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  onSaveComplete(): void {
    this.router.navigate(['/vehiculos']);
  }
}
