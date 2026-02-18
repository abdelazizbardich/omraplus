import { Injectable } from '@angular/core';
import { HttpEvent, HttpInterceptor, HttpHandler, HttpRequest, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';
import { Router } from '@angular/router';
import { AuthService } from '../services/auth.service';

@Injectable()
export class ErrorInterceptor implements HttpInterceptor {

  constructor(
    private router: Router,
    private authService: AuthService
  ) {}

  intercept(req: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
    return next.handle(req).pipe(
      catchError((error: HttpErrorResponse) => {
        let errorMessage = 'An unknown error occurred';

        if (error.error instanceof ErrorEvent) {
          errorMessage = `Client Error: ${error.error.message}`;
        } else {
          switch (error.status) {
            case 0:
              errorMessage = 'Network error: Unable to connect to server';
              break;
            case 400:
              errorMessage = error.error?.message || 'Bad Request';
              break;
            case 401:
              errorMessage = 'Unauthorized: Please log in';
              this.authService.logout();
              this.router.navigate(['/auth/login']);
              break;
            case 403:
              errorMessage = 'Forbidden: You do not have permission to access this resource';
              break;
            case 404:
              errorMessage = error.error?.message || 'Resource not found';
              break;
            case 422:
              errorMessage = this.formatValidationErrors(error.error?.errors) || 'Validation failed';
              break;
            case 500:
              errorMessage = 'Internal Server Error: Please try again later';
              break;
            case 503:
              errorMessage = 'Service Unavailable: Server is temporarily unavailable';
              break;
            default:
              errorMessage = error.error?.message || `Server Error: ${error.status} ${error.statusText}`;
          }
        }

        console.error('HTTP Error:', {
          status: error.status,
          message: errorMessage,
          url: error.url,
          error: error.error
        });

        return throwError(() => ({
          status: error.status,
          message: errorMessage,
          originalError: error
        }));
      })
    );
  }

  private formatValidationErrors(errors: any): string {
    if (!errors) {
      return '';
    }

    if (typeof errors === 'string') {
      return errors;
    }

    const errorMessages: string[] = [];
    for (const field in errors) {
      if (errors.hasOwnProperty(field)) {
        const fieldErrors = errors[field];
        if (Array.isArray(fieldErrors)) {
          errorMessages.push(...fieldErrors);
        } else {
          errorMessages.push(fieldErrors);
        }
      }
    }

    return errorMessages.join('; ');
  }
}
