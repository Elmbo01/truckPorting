import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { VehiculoService } from 'src/app/core/vehiculo.service';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-vehiculo-detail',
  templateUrl: './vehiculo-detail.page.html',
  styleUrls: ['./vehiculo-detail.page.scss'],
})
export class VehiculoDetailPage implements OnInit {
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

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private vehiculoService: VehiculoService
  ) {}

  ngOnInit() {
    this.vehiculoId = parseInt(this.activatedroute.snapshot.params['id']);
    this.vehiculoService
      .getVehiculoById(this.vehiculoId)
      .subscribe((data: Vehiculo) => (this.vehiculo = data));
  }
  goEdit(): void {
    this.router.navigate(['/vehiculos', this.vehiculoId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
