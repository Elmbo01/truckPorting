import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, throwError } from 'rxjs';
import { Evento } from '../shared/evento';
import { tap, catchError, map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class EventoService {
  private eventoUrl = 'https://young-mesa-86602.herokuapp.com/evento';

  constructor(private http: HttpClient) {}

  getEvento(): Observable<Evento[]> {
    return this.http.get<Evento[]>(this.eventoUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      catchError(this.handError)
    );
  }

  getMaxEventoId(): Observable<number> {
    return this.http.get<Evento[]>(this.eventoUrl).pipe(
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

  getEventoById(id: number): Observable<Evento> {
    const url = `${this.eventoUrl}/${id}`;
    return this.http.get<Evento>(url).pipe(
      tap((data) => {
        console.log('getEvento: ' + JSON.stringify(data));
      }),
      catchError(this.handError)
    );
  }

  createEvento(evento: Evento): Observable<Evento> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    return this.http
      .post<Evento>(this.eventoUrl + '/new', evento, { headers: headers })
      .pipe(
        tap((data) => console.log('createEvento: ' + JSON.stringify(data))),
        catchError(this.handError)
      );
  }

  deleteEvento(id: number): Observable<{}> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    const url = `${this.eventoUrl}/${id}`;
    return this.http.delete<Evento>(url, { headers: headers }).pipe(
      tap((data) => console.log('deleteEvento: ' + id)),
      catchError(this.handError)
    );
  }

  updateEvento(evento: Evento): Observable<Evento> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    const url = `${this.eventoUrl}/${evento.id}`;
    return this.http.put<Evento>(url, evento, { headers: headers }).pipe(
      tap(() => console.log('updateTrip: ' + evento.id)),
      map(() => evento),
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
