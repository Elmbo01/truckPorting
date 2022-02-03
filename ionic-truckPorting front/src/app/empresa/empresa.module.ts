import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { EmpresaNewPage } from './empresa-new/empresa-new.page';
import { EmpresaEditPage } from './empresa-edit/empresa-edit.page';
import { EmpresaDetailPage } from './empresa-detail/empresa-detail.page';
import { EmpresaItemComponent } from './empresa-item/empresa-item.component';
import { SharedModule } from '../shared/shared.module';
import { EmpresaPageRoutingModule } from './empresa-routing.module';
import { EmpresaAllPage } from './empresa-all/empresa-all.page';

@NgModule({
  declarations: [
    EmpresaEditPage,
    EmpresaDetailPage,
    EmpresaNewPage,
    EmpresaItemComponent,
    EmpresaAllPage,
  ],
  imports: [CommonModule, SharedModule, EmpresaPageRoutingModule],
  exports: [EmpresaItemComponent],
})
export class EmpresaModule {}