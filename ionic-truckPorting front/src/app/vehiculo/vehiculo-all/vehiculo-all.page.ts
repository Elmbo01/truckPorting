import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { IonInfiniteScroll } from '@ionic/angular';
import { VehiculoService } from 'src/app/core/vehiculo.service';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-vehiculo-all',
  templateUrl: './vehiculo-all.page.html',
  styleUrls: ['./vehiculo-all.page.scss'],
})
export class VehiculoAllPage implements OnInit {
  @ViewChild(IonInfiniteScroll) infiniteScroll: IonInfiniteScroll;
  constructor(
    private vehiculoService: VehiculoService,
    private route: Router
  ) {}

  vehiculos: Vehiculo[] = Array();

  idMaxVehiculo: Number = 0;

  ngOnInit() {
    this.vehiculoService.getVehiculo().subscribe((data: any) => {
      this.vehiculos[0];
    });
    this.vehiculoService.getMaxVehiculoId().subscribe((data: any) => {
      this.idMaxVehiculo = data;
    });
  }

  loadData(event) {
    setTimeout(() => {
      console.log('Done');
      event.target.complete();

      // App logic to determine if all data is loaded
      // and disable the infinite scroll
      if (this.vehiculos.length == 1000) {
        event.target.disabled = true;
      }
    }, 500);
  }

  toggleInfiniteScroll() {
    this.infiniteScroll.disabled = !this.infiniteScroll.disabled;
  }
}
