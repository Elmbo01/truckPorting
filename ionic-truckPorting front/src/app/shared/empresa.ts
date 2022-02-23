import { Contrato } from './contrato';
import { User } from './user';

export interface Empresa extends User {
  id: number;
  nombre: String;
  tipo: string;
  telefono: string;
  cif: string;
  imagen: string;
  contratos: Contrato[];
}
