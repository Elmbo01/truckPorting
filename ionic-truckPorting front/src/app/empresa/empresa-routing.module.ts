import { Component, NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { EmpresaAllPage } from './empresa-all/empresa-all.page';
import { EmpresaDetailPage } from './empresa-detail/empresa-detail.page';
import { EmpresaEditPage } from './empresa-edit/empresa-edit.page';
import { EmpresaNewPage } from './empresa-new/empresa-new.page';

const routes: Routes = [
  {
    path: 'empresa/:id/new',
    component: EmpresaNewPage,
  },
  { path: 'empresas/:empresaId', component: EmpresaDetailPage },
  { path: 'empresas/:id/edit', component: EmpresaEditPage },
  { path: 'empresas', component: EmpresaAllPage },
];
@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EmpresaPageRoutingModule {}
