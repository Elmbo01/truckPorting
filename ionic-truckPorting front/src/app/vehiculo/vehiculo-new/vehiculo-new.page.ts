import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Vehiculo } from './../../shared/vehiculo';
import { ActivatedRoute, Router } from '@angular/router';
import { VehiculoService } from './../../core/vehiculo.service';

@Component({
  selector: 'app-vehiculo-new',
  templateUrl: './vehiculo-new.page.html',
  styleUrls: ['./vehiculo-new.page.scss'],
})
export class VehiculoNewPage implements OnInit {
  pageTitle = 'New Vehiculo';
  errorMesage: string = '';
  vehiculoForm: any;

  vehiculoId: number = 0;
  vehiculo: Vehiculo = {
    id: 0,
    matricula: 'string',
    disponibilidad: true,
    tipo: '',
    capacidad: 0,
    costo: 0,
    personal: 0,
  };
  constructor(
    private fb: FormBuilder,
    private activatedroute: ActivatedRoute,
    private router: Router,

    private vehiculoService: VehiculoService
  ) {}

  ngOnInit(): void {
    this.vehiculoForm = this.fb.group({
      matricula: [
        '',
        [
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(50),
        ],
      ],
      lugar: '',
      disponibilidad: true,
      tipo: '',
      capacidad: 0,
      costo: 0,
      personal: 0,
    });

    // Read the event Id from the route parameter

    this.vehiculoId = parseInt(
      this.activatedroute.snapshot.params['vehiculoId']
    );
  }
  saveVehiculo(): void {
    if (this.vehiculoForm.valid) {
      if (this.vehiculoForm.dirty) {
        this.vehiculo = this.vehiculoForm.value;
        this.vehiculo.id = this.vehiculoId;

        this.vehiculoService.createVehiculo(this.vehiculo).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMesage = 'Please correct the validation errors.';
    }
  }
  onSaveComplete(): void {
    this.vehiculoForm.reset();
    this.router.navigate(['']);
  }
}
