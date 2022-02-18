import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ContratoDetailPage } from './contrato-detail/contrato-detail.page';
import { ContratoNewPage } from './contrato-new/contrato-new.page';

const routes: Routes = [
  {
    path: 'contrato/new/:id',
    component: ContratoNewPage,
  },
  {
    path: 'contrato/:id',
    component: ContratoDetailPage,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ContratoRoutingModule {}
