import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { EmpresaService } from 'src/app/core/empresa.service';
import { Empresa } from 'src/app/shared/empresa';

@Component({
  selector: 'app-empresa-detail',
  templateUrl: './empresa-detail.page.html',
  styleUrls: ['./empresa-detail.page.scss'],
})
export class EmpresaDetailPage implements OnInit {
  empresa: Empresa = {
    id: 0,
    nombre: '',
    tipo: '',
    telefono: '',
    cif: '',
    imagen: '',
    contratos: [],
    email: '',
    roles: [],
    password: undefined,
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
      .subscribe((data: Empresa) => {
        this.empresa = data[0];
      });
  }
  goEdit(): void {
    this.router.navigate(['/empresas', this.empresaId, 'edit']);
  }
  onBack(): void {
    this.router.navigate(['']);
  }
}
