import {
  HttpClient,
  HttpHeaders,
  JsonpClientBackend,
} from '@angular/common/http';
import { Injectable } from '@angular/core';
import { connectListeners } from '@ionic/core/dist/types/utils/overlays';
import { Observable, throwError } from 'rxjs';
import { catchError, map, retry, tap } from 'rxjs/operators';
import { Contrato } from '../shared/contrato';

@Injectable({
  providedIn: 'root',
})
export class ContratoService {
  private contratoUrl = 'http://127.0.0.1:8000/contrato';

  constructor(private http: HttpClient) {}

  getContrato(): Observable<Contrato[]> {
    return this.http.get<Contrato[]>(this.contratoUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      catchError(this.handError)
    );
  }

  getContratoById(contratoId: number): Observable<Contrato> {
    const url = `${this.contratoUrl}/${contratoId}`;
    return this.http.get<Contrato>(url).pipe(
      tap((date) => {
        console.log('getContrato: ' + JSON.stringify(date));
      }),
      catchError(this.handError)
    );
  }

  createContrato(contrato: Contrato): Observable<{}> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });

    return this.http
      .post<Contrato>(this.contratoUrl, contrato, { headers: headers })
      .pipe(
        tap((date) => console.log('createContrato ' + JSON.stringify(date))),
        catchError(this.handError)
      );
  }

  getMaxEventoId(): Observable<number> {
    return this.http.get<Contrato[]>(this.contratoUrl).pipe(
      map((data) =>
        Math.max.apply(
          Math,
          data.map(function (o) {
            return o.id;
          })
        )
      ),
      catchError(this.handError)
    );
  }

  handError(err: any) {
    let errorMessage: string;
    if (err.error instanceof ErrorEvent) {
      errorMessage = `An error occurred: ${err.error.message}`;
    } else {
      errorMessage = `Backend returned code ${err.status}: ${err.body.error}`;
    }
    console.error(err);
    return throwError(errorMessage);
  }
}
