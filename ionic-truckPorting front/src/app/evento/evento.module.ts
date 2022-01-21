import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { EventoPageRoutingModule } from './evento-routing.module';
import { EventoEditPage } from './evento-edit/evento-edit.page';
import { EventoDetailPage } from './evento-detail/evento-detail.page';
import { EventoNewPage } from './evento-new/evento-new.page';
import { EventoItemComponent } from './evento-item/evento-item.component';

@NgModule({
  imports: [CommonModule, FormsModule, IonicModule, EventoPageRoutingModule],
  declarations: [
    EventoEditPage,
    EventoDetailPage,
    EventoNewPage,
    EventoItemComponent,
  ],
  exports: [EventoItemComponent],
})
export class EventoPageModule {}
