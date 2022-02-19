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
  getEvento(eventoId: number) {
    this.eventoService.getEventoById(eventoId).subscribe(
      (evento: Evento) => this.displayEvento(evento),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  displayEvento(evento: Evento) {
    this.evento = evento;
    this.editForm.values()[0] = this.evento.nombre;
    this.editForm.values()[1] = this.evento.lugar;
    this.editForm.values()[2] = this.evento.fechaInicio;
    this.editForm.values()[3] = this.evento.fechaFinal;
    this.editForm.values()[4] = this.evento.imagen;
  }

  saveEvento() {
    this.evento.id = this.eventoId;
    this.evento.nombre = this.editForm[0].value;
    this.evento.lugar = this.editForm[1].value;
    this.evento.fechaInicio = this.editForm[2].value;
    this.evento.fechaFinal = this.editForm[3].value;
    this.evento.imagen = this.editForm[4].value;

    this.eventoService.updateEvento(this.evento).subscribe(
      () => this.onSaveComplete(),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  onSaveComplete(): void {
    this.router.navigate(['/eventos']);
  }
}
