import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { AuthService } from '../../../core/services/auth.service';
import { LoginCredentials } from '../../../core/models/user.model';

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, RouterLink],
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  loginForm!: FormGroup;
  loading = false;
  error = '';
  showPassword = false;

  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router
  ) {}

  ngOnInit(): void {
    if (this.authService.isAuthenticated()) {
      this.router.navigate(['/']);
    }

    this.loginForm = this.formBuilder.group({
      email: ['', [Validators.required, Validators.email]],
      password: ['', [Validators.required, Validators.minLength(6)]],
      rememberMe: [false]
    });
  }

  get f() {
    return this.loginForm.controls;
  }

  togglePasswordVisibility(): void {
    this.showPassword = !this.showPassword;
  }

  onSubmit(): void {
    if (this.loginForm.invalid) {
      Object.keys(this.loginForm.controls).forEach(key => {
        this.loginForm.get(key)?.markAsTouched();
      });
      return;
    }

    this.loading = true;
    this.error = '';

    const credentials: LoginCredentials = {
      email: this.loginForm.value.email,
      password: this.loginForm.value.password
    };

    this.authService.login(credentials).subscribe({
      next: (response: any) => {
        this.loading = false;
        this.router.navigate(['/']);
      },
      error: (error: any) => {
        this.loading = false;
        this.error = error?.error?.message || 'Invalid email or password. Please try again.';
        console.error('Login failed:', error);
      }
    });
  }

  getErrorMessage(field: string): string {
    const control = this.loginForm.get(field);
    
    if (!control?.touched || !control?.errors) {
      return '';
    }

    if (control.errors['required']) {
      return `${field.charAt(0).toUpperCase() + field.slice(1)} is required`;
    }
    
    if (control.errors['email']) {
      return 'Please enter a valid email address';
    }
    
    if (control.errors['minlength']) {
      return `Password must be at least ${control.errors['minlength'].requiredLength} characters`;
    }

    return '';
  }
}
