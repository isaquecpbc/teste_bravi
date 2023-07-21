import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class PersonService {
  constructor(private _http: HttpClient) {}

  addPerson(data: any): Observable<any> {
    return this._http.post('http://localhost/api/person', data);
  }

  updatePerson(id: number, data: any): Observable<any> {
    return this._http.put(`http://localhost/api/person/${id}`, data);
  }

  getPersonList(): Observable<any> {
    return this._http.get('http://localhost/api/people');
  }

  deletePerson(id: number): Observable<any> {
    return this._http.delete(`http://localhost/api/person/${id}`);
  }
}
