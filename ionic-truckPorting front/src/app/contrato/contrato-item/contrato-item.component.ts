import { Component, Input, OnInit } from '@angular/core';
import { Contrato } from 'src/app/shared/contrato';

@Component({
  selector: 'app-contrato-item',
  templateUrl: './contrato-item.component.html',
  styleUrls: ['./contrato-item.component.scss'],
})
export class ContratoItemComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {
    console.log(this.contrato);
  }

  @Input() contrato: Contrato = {
    id: 0,
    empresa: null,
    evento: null,
    fecha: new Date(),
    vehiculos: null,
    precio: 0,
  };
}
