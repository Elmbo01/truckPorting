import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';
import {
  InMemoryDbService,
  InMemoryWebApiModule,
} from 'angular-in-memory-web-api';

import { EmpresaData } from './empresa-data';
import { VehiculoData } from './vehiculo-data';

import { EmpresaService } from './empresa.service';
import { EventoService } from './evento.service';
import { VehiculoService } from './vehiculo.service';
import { EventoData } from './tuckporting-data';

@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HttpClientModule,
    //InMemoryWebApiModule.forRoot(EventoData),
    //InMemoryWebApiModule.forRoot(EmpresaData),
    InMemoryWebApiModule.forRoot(VehiculoData),
  ],
  providers: [EmpresaService, EventoService, VehiculoService],
})
export class CoreModule {}
