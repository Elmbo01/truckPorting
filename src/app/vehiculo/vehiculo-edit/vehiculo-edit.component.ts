import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { VehiculoService } from 'src/app/core/vehiculo.service';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-vehiculo-edit',
  templateUrl: './vehiculo-edit.component.html',
  styleUrls: ['./vehiculo-edit.component.scss'],
})
export class VehiculoEditComponent implements OnInit {
  PageTitle = 'Vehiculo Edit';
  errorMesage: string = '';
  vehiculoForm: any;

  constructor(
    private fb: FormBuilder,
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
  };

  vehiculoId: number = 0;

  ngOnInit(): void {
    this.vehiculoForm = this.fb.group({
      matricula: ['', [Validators.required]],
      disponibilidad: ['', [Validators.required]],
      tipo: ['', [Validators.required]],
      capacidad: ['', [Validators.required]],
      costo: ['', [Validators.required]],
      personal: ['', Validators.required],
    });
    this.vehiculoId = parseInt(this.activatedroute.snapshot.params['id']);
    this.getVehiculo(this.vehiculoId);
  }
  getVehiculo(vehiculoId: number) {
    this.vehiculoService.getVehiculoById(vehiculoId).subscribe(
      (vehiculo: Vehiculo) => this.displayVehiculo(vehiculo),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  displayVehiculo(vehiculo: Vehiculo): void {
    if (this.vehiculoForm) {
      this.vehiculoForm.reset();
    }
    this.vehiculo = vehiculo;
    this.PageTitle = `Editar Vehículo: ${this.vehiculo.matricula}`;
    this.vehiculoForm.patchValue({
      matricula: this.vehiculo.matricula,
      disponibilidad: this.vehiculo.disponibilidad,
      tipo: this.vehiculo.tipo,
      capacidad: this.vehiculo.capacidad,
      costo: this.vehiculo.costo,
      personal: this.vehiculo.personal,
    });
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
    if (this.vehiculoForm.valid) {
      if (this.vehiculoForm.dirty) {
        this.vehiculo = this.vehiculoForm.value;
        this.vehiculo.id = this.vehiculoId;

        this.vehiculoService.updateVehiculo(this.vehiculo).subscribe(
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
    this.vehiculoForm.reset();
    this.router.navigate(['']);
  }
}
