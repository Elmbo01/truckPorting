import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HomeRoutingModule } from './home-routing.module';
import { EmpresaModule } from '../empresa/empresa.module';
import { EventoModule } from '../evento/evento.module';
import { VehiculoModule } from '../vehiculo/vehiculo.module';
import { HomeComponent } from './home.component';

@NgModule({
  declarations: [HomeComponent],
  imports: [
    CommonModule,
    HomeRoutingModule,
    EmpresaModule,
    EventoModule,
    VehiculoModule,
  ],
})
export class HomeModule {}
