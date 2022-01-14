import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { VehiculoItemComponent } from './vehiculo-item/vehiculo-item.component';
import { VehiculoDetailComponent } from './vehiculo-detail/vehiculo-detail.component';
import { VehiculoEditComponent } from './vehiculo-edit/vehiculo-edit.component';
import { VehiculoNewComponent } from './vehiculo-new/vehiculo-new.component';
import { VehiculoRoutingModule } from './vehiculo-routing.module';
import { SharedModule } from '../shared/shared.module';

@NgModule({
  declarations: [
    VehiculoItemComponent,
    VehiculoDetailComponent,
    VehiculoEditComponent,
    VehiculoNewComponent,
  ],
  imports: [CommonModule, VehiculoRoutingModule, SharedModule],
  exports: [VehiculoItemComponent],
})
export class VehiculoModule {}
