import { ThrowStmt } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { FormBuilder, Validators } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { EventoService } from 'src/app/core/evento.service';
import { Evento } from 'src/app/shared/evento';

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
    private fb: FormBuilder,
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
  };

  eventoId: number = 0;

  ngOnInit(): void {
    this.eventoForm = this.fb.group({
      nombre: ['', [Validators.required]],
      lugar: ['', [Validators.required]],
      fechaInicio: ['', [Validators.required]],
      fechaFinal: ['', [Validators.required]],
    });
    this.eventoId = parseInt(this.activatedroute.snapshot.params['id']);
    this.getEvento(this.eventoId);
  }
  getEvento(eventoId: number) {
    this.eventoService.getEventoById(eventoId).subscribe(
      (evento: Evento) => this.displayEvento(evento),
      (error: any) => (this.errorMesage = <any>error)
    );
  }
  displayEvento(evento: Evento): void {
    if (this.eventoForm) {
      this.eventoForm.reset();
    }
    this.evento = evento;
    this.PageTitle = `Editar Evento: ${this.evento.nombre}`;
    this.eventoForm.patchValue({
      nombre: this.evento.nombre,
      lugar: this.evento.lugar,
      fechaInicio: this.evento.fechaInicio,
      fechaFinal: this.evento.fechaFinal,
    });
  }

  deleteEvento(): void {
    if (this.evento.id === 0) {
      this.onSaveComplete();
    } else {
      if (confirm(`¿Quieres borrar este evento?`)) {
        this.eventoService.deleteEvento(this.evento.id).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      }
    }
  }

  saveEvento(): void {
    if (this.eventoForm.valid) {
      if (this.eventoForm.dirty) {
        this.evento = this.eventoForm.value;
        this.evento.id = this.eventoId;

        this.eventoService.updateEvento(this.evento).subscribe(
          () => this.onSaveComplete(),
          (error: any) => (this.errorMesage = <any>error)
        );
      } else {
        this.onSaveComplete();
      }
    } else {
      this.errorMesage = 'Porfavor corrija errores de validación';
    }
  }
  onSaveComplete(): void {
    this.eventoForm.reset();
    this.router.navigate(['']);
  }
}
