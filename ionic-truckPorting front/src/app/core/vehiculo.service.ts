import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, throwError } from 'rxjs';
import { Vehiculo } from '../shared/vehiculo';
import { tap, catchError, map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class VehiculoService {
  private vehiculoUrl = 'http://127.0.0.1:8000/vehiculo';

  constructor(private http: HttpClient) {}

  getVehiculo(): Observable<Vehiculo[]> {
    return this.http.get<Vehiculo[]>(this.vehiculoUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      catchError(this.handError)
    );
  }

  getMaxVehiculoId(): Observable<number> {
    return this.http.get<Vehiculo[]>(this.vehiculoUrl).pipe(
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

  getVehiculoById(id: number): Observable<Vehiculo> {
    const url = `${this.vehiculoUrl}/${id}`;
    return this.http.get<Vehiculo>(url).pipe(
      tap((data) => console.log('getVehiculo: ' + JSON.stringify(data))),
      catchError(this.handError)
    );
  }

  createVehiculo(vehiculo: Vehiculo): Observable<Vehiculo> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    return this.http
      .post<Vehiculo>(this.vehiculoUrl, vehiculo, { headers: headers })
      .pipe(
        tap((data) => console.log('createVehiculo: ' + JSON.stringify(data))),
        catchError(this.handError)
      );
  }

  deleteVehiculo(id: number): Observable<{}> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.vehiculoUrl}/${id}`;
    return this.http.delete<Vehiculo>(url, { headers: headers }).pipe(
      tap((data) => console.log('deleteVehiculo: ' + id)),
      catchError(this.handError)
    );
  }

  updateVehiculo(vehiculo: Vehiculo): Observable<Vehiculo> {
    const headers = new HttpHeaders({ 'Content-Type': 'application/json' });
    const url = `${this.vehiculoUrl}/${vehiculo.id}`;
    return this.http.put<Vehiculo>(url, vehiculo, { headers: headers }).pipe(
      tap(() => console.log('updateVehiculo: ' + vehiculo.id)),
      map(() => vehiculo),
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
