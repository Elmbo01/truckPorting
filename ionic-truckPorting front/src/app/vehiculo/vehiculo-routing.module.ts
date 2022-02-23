import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VehiculoNewPage } from './vehiculo-new/vehiculo-new.page';
import { VehiculoDetailPage } from './vehiculo-detail/vehiculo-detail.page';
import { VehiculoEditPage } from './vehiculo-edit/vehiculo-edit.page';
import { VehiculoAllPage } from './vehiculo-all/vehiculo-all.page';

const routes: Routes = [
  { path: 'vehiculo/:id/new', component: VehiculoNewPage },
  { path: 'vehiculo/:id', component: VehiculoDetailPage },
  { path: 'vehiculo/:id/edit', component: VehiculoEditPage },
  {
    path: 'vehiculos',
    component: VehiculoAllPage,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class VehiculoRoutingModule {}
