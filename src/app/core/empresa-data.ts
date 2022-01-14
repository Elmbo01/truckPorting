import { InMemoryDbService } from 'angular-in-memory-web-api';

export class EmpresaData implements InMemoryDbService {
  createDb() {
    let empresa = [
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
