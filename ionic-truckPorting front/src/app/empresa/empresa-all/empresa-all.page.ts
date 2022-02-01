import { Component, OnInit } from '@angular/core';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-all',
  templateUrl: './empresa-all.page.html',
  styleUrls: ['./empresa-all.page.scss'],
})
export class EmpresaAllPage implements OnInit {
  constructor(private empresaService: EmpresaService) {}

  empresas: Empresa[] = Array();

  ngOnInit() {
    this.empresaService.getEmpresa().subscribe((data: Empresa[]) => {
      this.empresas = data;
    });
  }
}
