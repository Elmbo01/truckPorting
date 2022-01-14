import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VehiculoNewComponent } from './vehiculo-new/vehiculo-new.component';
import { VehiculoDetailComponent } from './vehiculo-detail/vehiculo-detail.component';
import { VehiculoEditComponent } from './vehiculo-edit/vehiculo-edit.component';

const routes: Routes = [
  { path: 'vehiculos/:id/new', component: VehiculoNewComponent },
  { path: 'vehiculos/:id', component: VehiculoDetailComponent },
  { path: 'vehiculos/:id/edit', component: VehiculoEditComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class VehiculoRoutingModule {}
