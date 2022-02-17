import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { EventoService } from 'src/app/core/evento.service';
import { Evento } from 'src/app/shared/evento';
import { FormField } from 'ion-custom-form-builder';

@Component({
  selector: 'app-evento-edit',
  templateUrl: './evento-edit.page.html',
  styleUrls: ['./evento-edit.page.scss'],
})
export class EventoEditPage implements OnInit {
  PageTitle = 'Evento Edit';
  errorMesage: string = '';
  eventoForm: any;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private eventoService: EventoService
  ) {}

  evento: Evento = {
    fechaFinal: new Date(),
    fechaInicio: new Date(),
    id: 0,
    lugar: '',
    nombre: '',
    imagen: '',
    empresas: [],
  };

  eventoId: number = 0;

  editForm: FormField[] = [];
  ngOnInit(): void {
    this.editForm = [
      {
        type: 'text',
        title: 'Nombre',
        formControlName: 'nombre',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Nombre es necesario',
          },
        ],
      },
      {
        type: 'text',
        title: 'Lugar',
        formControlName: 'lugar',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Lugar es necesario',
          },
        ],
      },
      {
        type: 'datetime',
        title: 'Fecha Inicio',
        formControlName: 'fechaInicio',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Fecha Inicio es necesario',
          },
        ],
      },
      {
        type: 'datetime',
        title: 'Fecha Final',
        formControlName: 'fechaFinal',
        validators: [Validators.required],
        validationMessages: [
          {
            type: 'required',
            message: 'Fecha Final es necesario',
          },
        ],
      },
      {
        type: 'string',
        title: 'Imagen',
        formControlName: 'imagen',
      },
    ];
  }
}
