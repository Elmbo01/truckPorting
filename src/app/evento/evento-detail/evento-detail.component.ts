import { Component, OnInit } from '@angular/core';
import { EventoService } from '../../core/evento.service';
import { Evento } from '../../shared/evento';
import { ActivatedRoute, Router } from '@angular/router';

@Component({
  selector: 'app-evento-detail',
  templateUrl: './evento-detail.component.html',
  styleUrls: ['./evento-detail.component.scss'],
})
export class EventoDetailComponent implements OnInit {
  evento: Evento = {
    id: 0,
    nombre: '',
    lugar: '',
    fechaInicio: new Date(),
    fechaFinal: new Date(),
  };
  eventoId: number = 0;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private eventoService: EventoService
  ) {}

  ngOnInit() {
    this.eventoId = parseInt(this.activatedroute.snapshot.params['eventoId']);
    this.eventoService
      .getEventoById(this.eventoId)
      .subscribe((data: Evento) => (this.evento = data));
  }
  goEdit(): void {
    this.router.navigate(['/eventos', this.eventoId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
