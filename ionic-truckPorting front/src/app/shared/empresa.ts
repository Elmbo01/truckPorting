import { Contrato } from './contrato';

export interface Empresa {
  id: number;
  nombre: String;
  tipo: string;
  contraseña: string;
  telefono: string;
  cif: string;
  imagen: string;
  contratos: Contrato[];
}
