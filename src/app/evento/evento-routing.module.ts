import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EventoNewComponent } from './evento-new/evento-new.component';
import { EventoEditComponent } from './evento-edit/evento-edit.component';
import { EventoDetailComponent } from './evento-detail/evento-detail.component';

const routes: Routes = [
  { path: 'eventos/:id/new', component: EventoNewComponent },
  { path: 'eventos/:eventoId', component: EventoDetailComponent },
  { path: 'eventos/:id/edit', component: EventoEditComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventoRoutingModule {}
