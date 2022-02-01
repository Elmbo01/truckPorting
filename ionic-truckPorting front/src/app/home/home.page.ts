import { Component, OnInit } from '@angular/core';
import { MenuController } from '@ionic/angular';
import { menuController } from '@ionic/core';
import { EmpresaService } from '../core/empresa.service';
import { EventoService } from '../core/evento.service';
import { VehiculoService } from '../core/vehiculo.service';
import { Empresa } from '../shared/empresa';
import { Evento } from '../shared/evento';
import { Vehiculo } from '../shared/vehiculo';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {
  constructor(private menu: MenuController) {}

  ngOnInit(): void {}
}
