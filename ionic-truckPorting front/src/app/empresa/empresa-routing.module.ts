import { Component, NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EmpresaAllPage } from './empresa-all/empresa-all.page';
import { EmpresaDetailPage } from './empresa-detail/empresa-detail.page';
import { EmpresaEditPage } from './empresa-edit/empresa-edit.page';
import { EmpresaNewPage } from './empresa-new/empresa-new.page';

const routes: Routes = [
  {
    path: 'empresa/new/:id',
    component: EmpresaNewPage,
  },
  { path: 'empresa/:empresaId', component: EmpresaDetailPage },
  { path: 'empresa/edit/:id', component: EmpresaEditPage },
  { path: 'empresas', component: EmpresaAllPage },
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EmpresaPageRoutingModule {}
