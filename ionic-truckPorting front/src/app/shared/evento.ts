import { Empresa } from '../shared/empresa';

export interface Evento {
  id: number;
  nombre: String;
  lugar: String;
  fechaInicio: Date;
  fechaFinal: Date;
  imagen: string;
  empresas: Empresa[];
}
