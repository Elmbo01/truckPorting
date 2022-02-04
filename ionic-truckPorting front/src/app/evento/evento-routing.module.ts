import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EventoAllPage } from './evento-all/evento-all.page';
import { EventoDetailPage } from './evento-detail/evento-detail.page';
import { EventoEditPage } from './evento-edit/evento-edit.page';
import { EventoNewPage } from './evento-new/evento-new.page';

const routes: Routes = [
  {
    path: 'evento/:id/new',
    component: EventoNewPage,
  },
  { path: 'evento/:empresaId', component: EventoDetailPage },
  { path: 'evento/:id/edit', component: EventoEditPage },
  {
    path: 'evento',
    component: EventoAllPage,
  },
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventoPageRoutingModule {}
