import { InMemoryDbService } from 'angular-in-memory-web-api';
import { Empresa } from '../shared/empresa';
import { Evento } from '../shared/evento';
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
export class EventoData implements InMemoryDbService {
  createDb() {
    let evento: Evento[] = [
      {
        id: 0,
        nombre: 'GameSports',
        lugar: 'Madrid',
        fechaInicio: new Date('1-12-2021'),
        fechaFinal: new Date('5-12-2021'),
      },
      {
        id: 1,
        nombre: 'Aerosmith',
        lugar: 'Madrid',
        fechaInicio: new Date('4-6-2022'),
        fechaFinal: new Date('5-6-2022'),
      },
      {
        id: 2,
        nombre: "Guns N'Roses",
        lugar: 'Sevilla',
        fechaInicio: new Date('7-12-2021'),
        fechaFinal: new Date('8-12-2021'),
      },
      {
        id: 3,
        nombre: 'Mago de Oz',
        lugar: 'Barcelona',
        fechaInicio: new Date('30-4-2022'),
        fechaFinal: new Date('1-5-2022'),
      },
    ];
    return { evento: evento };
  }
}
export class EmpresaData implements InMemoryDbService {
  createDb() {
    let empresa: Empresa[] = [
      {
        id: 0,
        nombre: 'Zara',
        tipo: 'Textil',
        contraseña: 'admin',
        telefono: '900814900',
        cif: 'A12345678Z',
      },
      {
        id: 1,
        nombre: 'Telepizza',
        tipo: 'Alimentación',
        contraseña: 'admin',
        telefono: '912760000',
        cif: 'Z87654321A',
      },
      {
        id: 2,
        nombre: "Domino's Pizza",
        tipo: 'Alimentacion',
        contraseña: 'admin',
        telefono: '948990677',
        cif: 'B13579135Y',
      },
    ];
    return { empresa: empresa };
  }
}
