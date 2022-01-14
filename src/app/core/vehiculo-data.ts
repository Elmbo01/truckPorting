import { InMemoryDbService } from 'angular-in-memory-web-api';
import { Vehiculo } from '../shared/vehiculo';

export class VehiculoData implements InMemoryDbService {
  createDb() {
    let vehiculo: Vehiculo[] = [
      {
        id: 0,
        matricula: 'NA233567',
        tipo: 'Furgoneta',
        disponibilidad: true,
        capacidad: 5000,
        costo: 200,
        personal: 1,
      },
      {
        id: 1,
        matricula: 'MC233467',
        capacidad: 10000,
        disponibilidad: true,
        tipo: 'Camion',
        costo: 500,
        personal: 3,
      },
      {
        id: 2,
        matricula: '2349585FGK',
        capacidad: 2000,
        costo: 300,
        personal: 3,
        tipo: 'Camioneta',
        disponibilidad: true,
      },
      {
        id: 3,
        matricula: '234988FGK',
        costo: 300,
        capacidad: 2000,
        personal: 1,
        tipo: 'Camioneta',
        disponibilidad: true,
      },
      {
        id: 4,
        matricula: '234988FGK',
        costo: 300,
        capacidad: 2000,
        personal: 1,
        tipo: 'Camioneta',
        disponibilidad: true,
      },
      {
        id: 5,
        matricula: '234988FGK',
        costo: 300,
        personal: 1,
        capacidad: 2000,
        tipo: 'Camioneta',
        disponibilidad: true,
      },
    ];
    return { vehiculo: vehiculo };
  }
}
