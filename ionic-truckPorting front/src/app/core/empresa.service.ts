import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable, throwError } from 'rxjs';
import { Empresa } from '../shared/empresa';
import { tap, catchError, map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root',
})
export class EmpresaService {
  private empresaUrl = 'https://young-mesa-86602.herokuapp.com/empresa';

  constructor(private http: HttpClient) {}

  getEmpresa(): Observable<Empresa[]> {
    let empresa = this.http.get<Empresa[]>(this.empresaUrl).pipe(
      tap((data) => console.log(JSON.stringify(data))),
      catchError(this.handError)
    );
    return empresa;
  }

  getMaxEmpresaId(): Observable<number> {
    return this.http.get<number>(`${this.empresaUrl}/maxId`).pipe(
      tap((date) => {
        console.log('MaxId:' + JSON.stringify(date));
      }),
      catchError(this.handError)
    );
  }

  getEmpresaById(id: number): Observable<Empresa> {
    const url = `${this.empresaUrl}/find/${id}`;
    return this.http.get<Empresa>(url).pipe(
      tap((data) => {
        console.log('getEmpresa: ' + JSON.stringify(data));
      }),
      catchError(this.handError)
    );
  }

  createEmpresa(empresa: Empresa): Observable<Empresa> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    return this.http
      .post<Empresa>(this.empresaUrl, empresa, { headers: headers })
      .pipe(
        tap((data) => console.log('createEmpresa: ' + JSON.stringify(data))),
        catchError(this.handError)
      );
  }

  deleteEmpresa(id: number): Observable<{}> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    const url = `${this.empresaUrl}/${id}`;
    return this.http.delete<Empresa>(url, { headers: headers }).pipe(
      tap((data) => console.log('deleteEmpresa: ' + id)),
      catchError(this.handError)
    );
  }

  updateEmpresa(empresa: Empresa): Observable<Empresa> {
    const headers = new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
    });
    const url = `${this.empresaUrl}/${empresa.id}`;
    return this.http.put<Empresa>(url, empresa, { headers: headers }).pipe(
      tap(() => console.log('updateEmpresa: ' + empresa.id)),
      map(() => empresa),
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
