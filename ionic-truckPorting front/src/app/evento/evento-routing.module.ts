import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EventoDetailPage } from './evento-detail/evento-detail.page';
import { EventoEditPage } from './evento-edit/evento-edit.page';
import { EventoNewPage } from './evento-new/evento-new.page';

const routes: Routes = [
  {
    path: 'empresa/:id/new',
    component: EventoNewPage,
  },
  { path: 'empresas/:empresaId', component: EventoDetailPage },
  { path: 'empresas/:id/edit', component: EventoEditPage },
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EventoPageRoutingModule {}
