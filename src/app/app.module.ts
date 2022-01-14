import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CoreModule } from './core/core.module';
import { EmpresaModule } from './empresa/empresa.module';
import { EventoModule } from './evento/evento.module';
import { HomeModule } from './home/home.module';
import { SharedModule } from './shared/shared.module';
import { VehiculoModule } from './vehiculo/vehiculo.module';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';

@NgModule({
  declarations: [AppComponent],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CoreModule,
    HomeModule,
    SharedModule,
    EmpresaModule,
    EventoModule,
    VehiculoModule,
    NgbModule,
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
