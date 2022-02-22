export interface User {
  id: number;
  email: string;
  roles: Array<JSON>;
  r?: string;
  password: String;
  expires_at?: string;
}
