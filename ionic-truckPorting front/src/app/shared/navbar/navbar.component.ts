import { Component, OnInit } from '@angular/core';
import { MenuController } from '@ionic/angular';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss'],
})
export class NavbarComponent implements OnInit {
  constructor(private menu: MenuController) {}

  ngOnInit() {}

  openMenu() {
    this.menu.enable(true, 'menu');
    this.menu.open('menu');
  }
}
