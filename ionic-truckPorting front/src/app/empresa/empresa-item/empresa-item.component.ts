import { Component, Input, OnInit } from '@angular/core';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-item',
  templateUrl: './empresa-item.component.html',
  styleUrls: ['./empresa-item.component.scss'],
})
export class EmpresaItemComponent implements OnInit {
  constructor() {}

  ngOnInit(): void {}

  @Input() empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    contraseña: '',
    telefono: '',
    cif: '',
    imagen: '',
  };
}
