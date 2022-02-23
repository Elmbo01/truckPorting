import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import { EmpresaService } from './empresa.service';
import { EventoService } from './evento.service';
import { VehiculoService } from './vehiculo.service';
import { AuthService } from './auth.service';

@NgModule({
  declarations: [],
  imports: [CommonModule, HttpClientModule],
  providers: [EmpresaService, EventoService, VehiculoService, AuthService],
})
export class CoreModule {}
