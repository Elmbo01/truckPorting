import { Component, OnInit } from '@angular/core';
import { EmpresaService } from '../core/empresa.service';
import { EventoService } from '../core/evento.service';
import { VehiculoService } from '../core/vehiculo.service';
import { Empresa } from '../shared/empresa';
import { Evento } from '../shared/evento';
import { Vehiculo } from '../shared/vehiculo';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent implements OnInit {
  constructor(
    private empresaService: EmpresaService,
    private vehiculoService: VehiculoService,
    private eventoService: EventoService
  ) {}

  eventos: Evento[] = [];

  empresas: Empresa[] = [];

  vehiculos: Vehiculo[] = [];
  ngOnInit(): void {
    this.empresaService
      .getEmpresa()
      .subscribe((data: Empresa[]) => (this.empresas = data));

    this.eventoService
      .getEvento()
      .subscribe((data: Evento[]) => (this.eventos = data));

    this.vehiculoService
      .getVehiculo()
      .subscribe((data: Vehiculo[]) => (this.vehiculos = data));
  }
}
