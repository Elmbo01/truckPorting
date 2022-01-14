import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { EmpresaService } from 'src/app/core/empresa.service';
import { EventoService } from 'src/app/core/evento.service';
import { VehiculoService } from 'src/app/core/vehiculo.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss'],
})
export class NavbarComponent implements OnInit {
  idEmpresa: number = 0;
  idVehiculo: number = 0;
  idEvento: number = 0;
  constructor(
    private eventoService: EventoService,
    private empresaService: EmpresaService,
    private vehiculoService: VehiculoService,
    private router: Router
  ) {}

  ngOnInit(): void {}

  newEvento(): void {
    this.eventoService
      .getMaxEventoId()
      .subscribe((id: number) => (this.idEvento = id));
    this.router.navigate([`eventos/${this.idEvento}/new`]);
  }
  newEmpresa(): void {
    this.empresaService
      .getMaxEmpresaId()
      .subscribe((id: number) => (this.idEmpresa = id));
    this.router.navigate([`empresas/${this.idEmpresa}/new`]);
  }

  newVehiculo(): void {
    this.vehiculoService
      .getMaxVehiculoId()
      .subscribe((id: number) => (this.idVehiculo = id));
    this.router.navigate([`vehiculos/${this.idVehiculo}/new`]);
  }
}
