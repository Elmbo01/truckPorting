import { InMemoryDbService } from 'angular-in-memory-web-api';

export class EventoData implements InMemoryDbService {
  createDb() {
    let evento = [
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
        fechaInicio: new Date('4-5-2022'),
        fechaFinal: new Date('5-5-2022'),
      },
    ];
    return { evento: evento };
  }
}
