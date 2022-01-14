import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { SharedModule } from '../shared/shared.module';

import { EmpresaEditComponent } from './empresa-edit/empresa-edit.component';
import { EmpresaItemComponent } from './empresa-item/empresa-item.component';
import { EmpresaNewComponent } from './empresa-new/empresa-new.component';
import { EmpresaDetailComponent } from './empresa-detail/empresa-detail.component';
import { EmpresaRoutingModule } from './empresa-routing.module';

@NgModule({
  declarations: [
    EmpresaEditComponent,
    EmpresaItemComponent,
    EmpresaNewComponent,
    EmpresaDetailComponent,
  ],
  imports: [CommonModule, EmpresaRoutingModule, SharedModule],
  exports: [EmpresaItemComponent],
})
export class EmpresaModule {}
