import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';

import { VehiculoItemComponent } from './vehiculo-item/vehiculo-item.component';
import { VehiculoDetailPage } from './vehiculo-detail/vehiculo-detail.page';
import { VehiculoEditPage } from './vehiculo-edit/vehiculo-edit.page';
import { VehiculoNewPage } from './vehiculo-new/vehiculo-new.page';
import { VehiculoRoutingModule } from './vehiculo-routing.module';
import { SharedModule } from '../shared/shared.module';

@NgModule({
  declarations: [
    VehiculoItemComponent,
    VehiculoDetailPage,
    VehiculoEditPage,
    VehiculoNewPage,
  ],
  imports: [CommonModule, VehiculoRoutingModule, SharedModule],
  exports: [VehiculoItemComponent],
})
export class VehiculoModule {}
