import { Empresa } from './empresa';
import { Evento } from './evento';
import { Vehiculo } from './vehiculo';

export interface Contrato {
  id: number;
  empresa: Empresa;
  evento: Evento;
  fecha: Date;
  vehiculos: Vehiculo[];
  precio: number;
}
