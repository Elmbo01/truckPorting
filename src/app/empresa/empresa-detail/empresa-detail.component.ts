import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-detail',
  templateUrl: './empresa-detail.component.html',
  styleUrls: ['./empresa-detail.component.scss'],
})
export class EmpresaDetailComponent implements OnInit {
  empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    contraseña: '',
    telefono: '',
    cif: '',
  };
  empresaId: number = 0;

  constructor(
    private activatedroute: ActivatedRoute,
    private router: Router,
    private empresaService: EmpresaService
  ) {}

  ngOnInit() {
    this.empresaId = parseInt(this.activatedroute.snapshot.params['empresaId']);
    this.empresaService
      .getEmpresaById(this.empresaId)
      .subscribe((data: Empresa) => (this.empresa = data));
  }
  goEdit(): void {
    this.router.navigate(['/empresas', this.empresaId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
