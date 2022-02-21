import { Contrato } from './contrato';
import { User } from './user.ts';

export interface Empresa extends User {
  id: number;
  nombre: String;
  tipo: string;
  contraseña: string;
  telefono: string;
  cif: string;
  imagen: string;
  contratos: Contrato[];
}
