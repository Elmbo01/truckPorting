import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
import { FormsModule } from '@angular/forms';
import { HomePage } from './home.page';

import { HomePageRoutingModule } from './home-routing.module';
import { EmpresaModule } from '../empresa/empresa.module';
import { EventoPageModule } from '../evento/evento.module';
import { VehiculoModule } from '../vehiculo/vehiculo.module';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    EmpresaModule,
    EventoPageModule,
    VehiculoModule,
    IonicModule,
    HomePageRoutingModule,
  ],
  declarations: [HomePage],
})
export class HomePageModule {}
