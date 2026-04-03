import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Router, RouterLink } from '@angular/router';
import { ApiService } from '../../core/services/api.service';
import { AuthService } from '../../core/services/auth.service';
import { Flight } from '../../core/models/flight.model';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
  featuredFlights: Flight[] = [];
  loading = true;
  error = '';
  isAuthenticated = false;

  constructor(
    private apiService: ApiService,
    private authService: AuthService,
    private router: Router
  ) {}

  ngOnInit(): void {
    this.isAuthenticated = this.authService.isAuthenticated();
    this.loadFeaturedFlights();
  }

  loadFeaturedFlights(): void {
    this.loading = true;
    this.error = '';

    this.apiService.get<Flight[]>('flights?limit=6&featured=true').subscribe({
      next: (flights: Flight[]) => {
        this.featuredFlights = flights;
        this.loading = false;
      },
      error: (error: any) => {
        this.error = 'Failed to load featured flights';
        this.loading = false;
        console.error('Error loading flights:', error);
      }
    });
  }

  navigateToFlights(): void {
    this.router.navigate(['/flights']);
  }

  navigateToFlightDetail(flightId: number): void {
    this.router.navigate(['/flights', flightId]);
  }

  formatPrice(price: number): string {
    return new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD'
    }).format(price);
  }

  formatTime(dateString: string): string {
    const date = new Date(dateString);
    return date.toLocaleTimeString('en-US', { 
      hour: '2-digit', 
      minute: '2-digit',
      hour12: true 
    });
  }

  formatDate(dateString: string): string {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', { 
      month: 'short', 
      day: 'numeric',
      year: 'numeric'
    });
  }
}
