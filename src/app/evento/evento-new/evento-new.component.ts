import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { Evento } from './../../shared/evento';
import { ActivatedRoute, Router } from '@angular/router';
import { EventoService } from './../../core/evento.service';
@Component({
  selector: 'app-evento-new',
  templateUrl: './evento-new.component.html',
  styleUrls: ['./evento-new.component.scss'],
})
export class EventoNewComponent implements OnInit {
  pageTitle = 'New Event';
  errorMessage: string = '';
  eventoForm: any;

  eventoId: number = 0;
  evento: Evento = {
    id: 0,
    nombre: '',
    lugar: '',
    fechaInicio: new Date(),
    fechaFinal: new Date(),
  };
  constructor(
    private fb: FormBuilder,
    private activatedroute: ActivatedRoute,
    private router: Router,
    private EventoService: EventoService
  ) {}

  ngOnInit(): void {
    this.eventoForm = this.fb.group({
      nombre: [
        '',
        [
          Validators.required,
          Validators.minLength(3),
          Validators.maxLength(50),
        ],
      ],
      lugar: '',
      fechaInicio: new Date(),
      fechaFinal: new Date(),
    });

    // Read the event Id from the route parameter

    this.eventoId = parseInt(this.activatedroute.snapshot.params['eventoId']);
  }

  saveEvento(): void {
    if (this.eventoForm.valid) {
      if (this.eventoForm.dirty) {
        this.evento = this.eventoForm.value;
        this.evento.id = this.eventoId;

        this.EventoService.createEvento(this.evento).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMessage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMessage = 'Please correct the validation errors.';
    }
  }
  onSaveComplete(): void {
    this.eventoForm.reset();
    this.router.navigate(['']);
  }
}
