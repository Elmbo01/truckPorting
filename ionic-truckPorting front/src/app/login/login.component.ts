import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import * as moment from 'moment';
import { AuthService } from '../core/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
})
export class LoginComponent {
  form: FormGroup;

  constructor(
    private fb: FormBuilder,
    private authService: AuthService,
    private router: Router
  ) {
    this.form = this.fb.group({
      nombre: ['', Validators.required],
      password: ['', Validators.required],
    });
  }

  login() {
    const val: any = this.form.value;

    if (val.email && val.password) {
      this.authService.login(val.email, val.password).subscribe((data) => {
        data = {
          ...data,
          email: val.email,
        };
        // Save session: Generate expiration date
        const expire_moment = moment().add(1, 'days');
        data.expires_at = JSON.stringify(expire_moment.valueOf());
        this.authService.role(val.email, val.password).subscribe((r) => {
          data = {
            ...data,
            r: r[r.length - 1],
          };
          this.authService.setSession(data);
        });
        console.log('User is logged in');
        this.router.navigateByUrl('/');
      });
    }
  }
}
