export enum UserRole {
  ADMIN = 'admin',
  AGENT = 'agent',
  CUSTOMER = 'customer'
}

export interface User {
  id: number;
  name: string;
  email: string;
  phone?: string;
  role: UserRole;
  isActive: boolean;
  createdAt: string;
  updatedAt: string;
}

export interface LoginCredentials {
  email: string;
  password: string;
}

export interface RegisterData {
  name: string;
  email: string;
  password: string;
  password_confirmation: string;
  phone?: string;
  role?: UserRole;
}

export interface AuthResponse {
  token: string;
  user: User;
}
