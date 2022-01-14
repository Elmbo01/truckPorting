import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EmpresaDetailComponent as EmpresaDetailComponent } from './empresa-detail/empresa-detail.component';
import { EmpresaEditComponent } from './empresa-edit/empresa-edit.component';
import { EmpresaNewComponent } from './empresa-new/empresa-new.component';

const routes: Routes = [
  { path: 'empresas/:id/new', component: EmpresaNewComponent },
  { path: 'empresas/:empresaId', component: EmpresaDetailComponent },
  { path: 'empresas/:id/edit', component: EmpresaEditComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class EmpresaRoutingModule {}
