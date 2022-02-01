import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
import { FormsModule } from '@angular/forms';
import { HomePage } from './home.page';

import { HomePageRoutingModule } from './home-routing.module';
import { EmpresaModule } from '../empresa/empresa.module';
import { EventoPageModule } from '../evento/evento.module';
import { VehiculoModule } from '../vehiculo/vehiculo.module';
import { SharedModule } from '../shared/shared.module';
import { CoreModule } from '../core/core.module';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    EmpresaModule,
    EventoPageModule,
    VehiculoModule,
    IonicModule,
    HomePageRoutingModule,
    SharedModule,
    CoreModule,
  ],
  declarations: [HomePage],
})
export class HomePageModule {}
