export enum UserRole {
  ADMIN = 'admin',
  USER = 'user',
  SUPER_ADMIN = 'super_admin',
  CONTENT_MANAGER = 'content_manager',
  SALES_MANAGER = 'sales_manager',
  PUBLISHER = 'publisher'
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
