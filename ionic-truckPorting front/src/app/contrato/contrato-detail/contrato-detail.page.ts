import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ContratoService } from 'src/app/core/contrato.service';
import { Contrato } from 'src/app/shared/contrato';
import { Empresa } from 'src/app/shared/empresa';
import { Evento } from 'src/app/shared/evento';
import { Vehiculo } from 'src/app/shared/vehiculo';

@Component({
  selector: 'app-contrato-detail',
  templateUrl: './contrato-detail.page.html',
  styleUrls: ['./contrato-detail.page.scss'],
})
export class ContratoDetailPage implements OnInit {
  contrato: Contrato = {
    id: 0,
    empresa: null,
    evento: null,
    fecha: new Date(),
    vehiculos: null,
    precio: 0,
  };
  contratoId: number = 0;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private contratoService: ContratoService
  ) {}

  ngOnInit() {
    this.contratoId = parseInt(
      this.activatedroute.snapshot.params['contratoId']
    );
    this.contratoService
      .getContratoById(this.contratoId)
      .subscribe((data: Contrato) => {
        this.contrato = data[0];
      });
  }
  goEdit(): void {
    this.router.navigate(['/contratos', this.contratoId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
