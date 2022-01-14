import { dashCaseToCamelCase } from '@angular/compiler/src/util';
import { Component, Input, OnInit } from '@angular/core';
import { Evento } from 'src/app/shared/evento';

@Component({
  selector: 'app-evento-item',
  templateUrl: './evento-item.component.html',
  styleUrls: ['./evento-item.component.scss'],
})
export class EventoItemComponent {
  @Input() evento: Evento = {
    fechaFinal: new Date(),
    fechaInicio: new Date(),
    id: 0,
    lugar: '',
    nombre: '',
  };
}
