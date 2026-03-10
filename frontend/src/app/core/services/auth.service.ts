import { Injectable } from '@angular/core';
import { BehaviorSubject, Observable, throwError } from 'rxjs';
import { map, tap, catchError } from 'rxjs/operators';
import { ApiService } from './api.service';
import { StorageService } from './storage.service';
import { User, LoginCredentials, RegisterData, AuthResponse } from '../models/user.model';
import { jwtDecode } from 'jwt-decode';

const TOKEN_KEY = 'auth_token';
const USER_KEY = 'current_user';

interface JwtPayload {
  sub: number;
  email: string;
  role: string;
  exp: number;
}

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  private currentUserSubject: BehaviorSubject<User | null>;
  public currentUser$: Observable<User | null>;

  constructor(
    private apiService: ApiService,
    private storageService: StorageService
  ) {
    const user = this.storageService.getItem<User>(USER_KEY);
    this.currentUserSubject = new BehaviorSubject<User | null>(user);
    this.currentUser$ = this.currentUserSubject.asObservable();
  }

  login(credentials: LoginCredentials): Observable<AuthResponse> {
    return this.apiService.post<AuthResponse>('auth/login', credentials).pipe(
      tap(response => {
        this.storageService.setItem(TOKEN_KEY, response.token);
        this.storageService.setItem(USER_KEY, response.user);
        this.currentUserSubject.next(response.user);
      }),
      catchError(error => {
        console.error('Login error:', error);
        return throwError(() => error);
      })
    );
  }

  register(userData: RegisterData): Observable<AuthResponse> {
    return this.apiService.post<AuthResponse>('auth/register', userData).pipe(
      tap(response => {
        this.storageService.setItem(TOKEN_KEY, response.token);
        this.storageService.setItem(USER_KEY, response.user);
        this.currentUserSubject.next(response.user);
      }),
      catchError(error => {
        console.error('Registration error:', error);
        return throwError(() => error);
      })
    );
  }

  logout(): void {
    this.storageService.removeItem(TOKEN_KEY);
    this.storageService.removeItem(USER_KEY);
    this.currentUserSubject.next(null);
  }

  getCurrentUser(): User | null {
    return this.currentUserSubject.value;
  }

  isAuthenticated(): boolean {
    const token = this.getToken();
    if (!token) {
      return false;
    }

    try {
      const decoded = jwtDecode<JwtPayload>(token);
      const isExpired = decoded.exp * 1000 < Date.now();
      
      if (isExpired) {
        this.logout();
        return false;
      }
      
      return true;
    } catch (error) {
      console.error('Error decoding token:', error);
      return false;
    }
  }

  getToken(): string | null {
    return this.storageService.getItem<string>(TOKEN_KEY);
  }

  hasRole(roles: string[]): boolean {
    const user = this.getCurrentUser();
    if (!user) {
      return false;
    }
    return roles.includes(user.role);
  }

  refreshUserData(): Observable<User> {
    return this.apiService.get<User>('auth/me').pipe(
      tap(user => {
        this.storageService.setItem(USER_KEY, user);
        this.currentUserSubject.next(user);
      }),
      catchError(error => {
        console.error('Error refreshing user data:', error);
        this.logout();
        return throwError(() => error);
      })
    );
  }
}
