import { Component, Input, OnInit } from '@angular/core';
import { Empresa } from 'src/app/shared/empresa';
import { Evento } from 'src/app/shared/evento';

@Component({
  selector: 'app-empresa-item',
  templateUrl: './empresa-item.component.html',
  styleUrls: ['./empresa-item.component.scss'],
})
export class EmpresaItemComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {
    console.log(this.empresa);
  }

  @Input() empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    telefono: '',
    cif: '',
    imagen: '',
    contratos: [],
    email: '',
    roles: [],
    password: undefined,
  };
}
