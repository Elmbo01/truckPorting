import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Evento } from './../../shared/evento';
import { Empresa } from './../../shared/empresa';
import { ActivatedRoute, Router } from '@angular/router';
import { EventoService } from './../../core/evento.service';
import { FormField } from 'ion-custom-form-builder';
@Component({
  selector: 'app-evento-new',
  templateUrl: './evento-new.page.html',
  styleUrls: ['./evento-new.page.scss'],
})
export class EventoNewPage implements OnInit {
  pageTitle = 'New Event';
  errorMessage: string = '';

  eventoId: number = 0;
  evento: Evento = {
    id: 0,
    nombre: '',
    lugar: '',
    fechaInicio: new Date(),
    fechaFinal: new Date(),
    imagen: '',
    empresas: [],
  };
  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private EventoService: EventoService
  ) {}
  newForm: FormField[] = [];
  ngOnInit(): void {
    this.newForm = [
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
  newEvento(event): void {
    this.evento.id = this.eventoId;
    this.evento.nombre = event['nombre'];
    this.evento.lugar = event['lugar'];
    this.evento.fechaInicio = event['fechaInicio'];
    this.evento.fechaFinal = event['fechaFinal'];
    this.evento.imagen = event['imagen'];

    this.EventoService.createEvento(this.evento).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMessage = <any>error)
    );
  }
  onSaveComplete(): void {
    this.router.navigate(['/evento']);
  }
}
