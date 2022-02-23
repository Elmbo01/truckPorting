import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { IonInfiniteScroll } from '@ionic/angular';
import { EventoService } from 'src/app/core/evento.service';
import { Evento } from 'src/app/shared/evento';

@Component({
  selector: 'app-evento-all',
  templateUrl: './evento-all.page.html',
  styleUrls: ['./evento-all.page.scss'],
})
export class EventoAllPage implements OnInit {
  @ViewChild(IonInfiniteScroll) infiniteScroll: IonInfiniteScroll;

  constructor(private eventoService: EventoService, private route: Router) {}

  eventos: Evento[] = Array();

  idMaxEvento: Number = 0;

  ngOnInit() {
    this.eventoService.getEvento().subscribe((data: any) => {
      this.eventos = data[0];
    });
    this.eventoService.getMaxEventoId().subscribe((data: any) => {
      this.idMaxEvento = data;
    });
  }

  loadData(event) {
    setTimeout(() => {
      console.log('Done');
      event.target.complete();

      // App logic to determine if all data is loaded
      // and disable the infinite scroll
      if (this.eventos.length == 1000) {
        event.target.disabled = true;
      }
    }, 500);
  }

  toggleInfiniteScroll() {
    this.infiniteScroll.disabled = !this.infiniteScroll.disabled;
  }
}
