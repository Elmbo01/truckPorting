import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ContratoDetailPage } from './contrato-detail/contrato-detail.page';
import { ContratoNewPage } from './contrato-new/contrato-new.page';
import { ContratoItemComponent } from './contrato-item/contrato-item.component';
import { SharedModule } from '../shared/shared.module';
import { ContratoRoutingModule } from './contrato-routing.module';

@NgModule({
  declarations: [ContratoDetailPage, ContratoNewPage, ContratoItemComponent],
  imports: [CommonModule, SharedModule, ContratoRoutingModule],
  exports: [ContratoItemComponent],
})
export class ContratoModule {}
