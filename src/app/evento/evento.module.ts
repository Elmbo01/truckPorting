import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EventoDetailComponent } from './evento-detail/evento-detail.component';
import { EventoItemComponent } from './evento-item/evento-item.component';
import { EventoNewComponent } from './evento-new/evento-new.component';
import { EventoEditComponent } from './evento-edit/evento-edit.component';
import { EventoRoutingModule } from './evento-routing.module';
import { SharedModule } from '../shared/shared.module';

@NgModule({
  declarations: [
    EventoDetailComponent,
    EventoItemComponent,
    EventoNewComponent,
    EventoEditComponent,
  ],
  imports: [CommonModule, EventoRoutingModule, SharedModule],
  exports: [EventoItemComponent],
})
export class EventoModule {}
