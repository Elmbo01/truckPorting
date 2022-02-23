import { Component, Input, OnInit } from '@angular/core';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-vehiculo-item',
  templateUrl: './vehiculo-item.component.html',
  styleUrls: ['./vehiculo-item.component.scss'],
})
export class VehiculoItemComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {}

  @Input() vehiculo: Vehiculo = {
    id: 0,
    matricula: '',
    disponibilidad: true,
    tipo: '',
    capacidad: 0,
    costo: 0,
    personal: 0,
    imagen: '',
  };
}
