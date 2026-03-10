import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule, AbstractControl, ValidationErrors } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { AuthService } from '../../../core/services/auth.service';
import { RegisterData } from '../../../core/models/user.model';

@Component({
  selector: 'app-register',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, RouterLink],
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.scss']
})
export class RegisterComponent implements OnInit {
  registerForm!: FormGroup;
  loading = false;
  error = '';
  showPassword = false;
  showConfirmPassword = false;

  constructor(
    private formBuilder: FormBuilder,
    private authService: AuthService,
    private router: Router
  ) {}

  ngOnInit(): void {
    if (this.authService.isAuthenticated()) {
      this.router.navigate(['/']);
    }

    this.registerForm = this.formBuilder.group({
      name: ['', [Validators.required, Validators.minLength(2)]],
      email: ['', [Validators.required, Validators.email]],
      phone: ['', [Validators.required, Validators.pattern(/^[0-9]{10,15}$/)]],
      password: ['', [Validators.required, Validators.minLength(6), this.passwordStrengthValidator]],
      confirmPassword: ['', [Validators.required]],
      acceptTerms: [false, [Validators.requiredTrue]]
    }, {
      validators: this.passwordMatchValidator
    });
  }

  get f() {
    return this.registerForm.controls;
  }

  passwordStrengthValidator(control: AbstractControl): ValidationErrors | null {
    const value = control.value;
    if (!value) {
      return null;
    }

    const hasNumber = /[0-9]/.test(value);
    const hasUpper = /[A-Z]/.test(value);
    const hasLower = /[a-z]/.test(value);

    const passwordValid = hasNumber && hasUpper && hasLower;

    return !passwordValid ? { passwordStrength: true } : null;
  }

  passwordMatchValidator(control: AbstractControl): ValidationErrors | null {
    const password = control.get('password');
    const confirmPassword = control.get('confirmPassword');

    if (!password || !confirmPassword) {
      return null;
    }

    return password.value === confirmPassword.value ? null : { passwordMismatch: true };
  }

  togglePasswordVisibility(): void {
    this.showPassword = !this.showPassword;
  }

  toggleConfirmPasswordVisibility(): void {
    this.showConfirmPassword = !this.showConfirmPassword;
  }

  onSubmit(): void {
    if (this.registerForm.invalid) {
      Object.keys(this.registerForm.controls).forEach(key => {
        this.registerForm.get(key)?.markAsTouched();
      });
      return;
    }

    this.loading = true;
    this.error = '';

    const registerData: RegisterData = {
      name: this.registerForm.value.name,
      email: this.registerForm.value.email,
      phone: this.registerForm.value.phone,
      password: this.registerForm.value.password,
      password_confirmation: this.registerForm.value.confirmPassword
    };

    this.authService.register(registerData).subscribe({
      next: (response: any) => {
        this.loading = false;
        this.router.navigate(['/']);
      },
      error: (error: any) => {
        this.loading = false;
        this.error = error?.error?.message || 'Registration failed. Please try again.';
        console.error('Registration failed:', error);
      }
    });
  }

  getErrorMessage(field: string): string {
    const control = this.registerForm.get(field);
    
    if (!control?.touched || !control?.errors) {
      return '';
    }

    if (control.errors['required']) {
      return `${field.charAt(0).toUpperCase() + field.slice(1).replace(/([A-Z])/g, ' $1')} is required`;
    }
    
    if (control.errors['email']) {
      return 'Please enter a valid email address';
    }
    
    if (control.errors['minlength']) {
      const minLength = control.errors['minlength'].requiredLength;
      return `Must be at least ${minLength} characters`;
    }

    if (control.errors['pattern'] && field === 'phone') {
      return 'Please enter a valid phone number (10-15 digits)';
    }

    if (control.errors['passwordStrength']) {
      return 'Password must contain uppercase, lowercase, and number';
    }

    if (field === 'confirmPassword' && this.registerForm.errors?.['passwordMismatch']) {
      return 'Passwords do not match';
    }

    return '';
  }

  getPasswordStrength(): string {
    const password = this.registerForm.get('password')?.value || '';
    
    if (!password) {
      return '';
    }

    let strength = 0;
    if (password.length >= 8) strength++;
    if (/[a-z]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;

    if (strength <= 2) return 'weak';
    if (strength <= 4) return 'medium';
    return 'strong';
  }
}
