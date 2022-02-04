import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { IonInfiniteScroll } from '@ionic/angular';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-all',
  templateUrl: './empresa-all.page.html',
  styleUrls: ['./empresa-all.page.scss'],
})
export class EmpresaAllPage implements OnInit {
  @ViewChild(IonInfiniteScroll) infiniteScroll: IonInfiniteScroll;
  constructor(private empresaService: EmpresaService, private route: Router) {}

  empresas: Empresa[] = Array();

  ngOnInit() {
    this.empresaService.getEmpresa().subscribe((data: any) => {
      this.empresas = data[0];
    });
  }

  loadData(event) {
    setTimeout(() => {
      console.log('Done');
      event.target.complete();

      // App logic to determine if all data is loaded
      // and disable the infinite scroll
      if (this.empresas.length == 1000) {
        event.target.disabled = true;
      }
    }, 500);
  }

  toggleInfiniteScroll() {
    this.infiniteScroll.disabled = !this.infiniteScroll.disabled;
  }

  newEmpresa() {
    //this.route.navigateByUrl();
  }
}
