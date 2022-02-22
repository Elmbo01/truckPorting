import { Component, OnInit } from '@angular/core';
import { MenuController } from '@ionic/angular';
import { Router } from '@angular/router';
import { AuthService } from '../../core/auth.service';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss'],
})
export class NavbarComponent implements OnInit {
  username: string;

  constructor(
    private menu: MenuController,
    private authService: AuthService,
    private router: Router
  ) {}

  ngOnInit() {
    if (!this.isLoggedIn()) {
      this.authService.logout();
      this.username = '';
    } else {
      this.username = localStorage.getItem('u');
    }
  }

  openMenu() {
    this.menu.enable(true, 'menu');
    this.menu.open('menu');
  }

  register() {
    this.router.navigate(['/register']);
  }
  login() {
    this.router.navigate(['/login']);
  }
  logout() {
    this.authService.logout();
    this.username = '';
    this.router.navigate(['/']);
  }
  isLoggedIn() {
    return this.authService.isLoggedIn();
  }
  isAdmin() {
    return this.authService.getRole() === 'a';
  }
  isEmpresa() {
    return this.authService.getRole() === 'e';
  }
}
