import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiService } from '../../../core/services/api.service';
import { AuthService } from '../../../core/services/auth.service';
import { Flight } from '../../../core/models/flight.model';

@Component({
  selector: 'app-flight-detail',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './flight-detail.component.html',
  styleUrls: ['./flight-detail.component.scss']
})
export class FlightDetailComponent implements OnInit {
  flight: Flight | null = null;
  loading = true;
  error = '';
  bookingLoading = false;
  isAuthenticated = false;
  selectedPassengers = 1;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private apiService: ApiService,
    private authService: AuthService
  ) {}

  ngOnInit(): void {
    this.isAuthenticated = this.authService.isAuthenticated();
    const flightId = this.route.snapshot.paramMap.get('id');
    
    if (flightId) {
      this.loadFlightDetail(flightId);
    } else {
      this.error = 'Invalid flight ID';
      this.loading = false;
    }
  }

  loadFlightDetail(flightId: string): void {
    this.loading = true;
    this.error = '';

    this.apiService.get<Flight>(`flights/${flightId}`).subscribe({
      next: (flight: Flight) => {
        this.flight = flight;
        this.loading = false;
      },
      error: (error: any) => {
        this.error = 'Failed to load flight details. Please try again later.';
        this.loading = false;
        console.error('Error loading flight:', error);
      }
    });
  }

  bookFlight(): void {
    if (!this.isAuthenticated) {
      this.router.navigate(['/login'], { 
        queryParams: { returnUrl: this.router.url } 
      });
      return;
    }

    if (!this.flight) {
      return;
    }

    if (this.selectedPassengers > this.flight.availableSeats) {
      this.error = 'Not enough seats available';
      return;
    }

    this.bookingLoading = true;
    this.error = '';

    const bookingData = {
      flightId: this.flight.id,
      passengers: this.selectedPassengers,
      totalPrice: this.calculateTotalPrice()
    };

    this.apiService.post('bookings', bookingData).subscribe({
      next: (response: any) => {
        this.bookingLoading = false;
        this.router.navigate(['/bookings'], { 
          queryParams: { success: true } 
        });
      },
      error: (error: any) => {
        this.bookingLoading = false;
        this.error = error?.error?.message || 'Failed to book flight. Please try again.';
        console.error('Booking error:', error);
      }
    });
  }

  goBack(): void {
    this.router.navigate(['/flights']);
  }

  incrementPassengers(): void {
    if (this.flight && this.selectedPassengers < this.flight.availableSeats) {
      this.selectedPassengers++;
    }
  }

  decrementPassengers(): void {
    if (this.selectedPassengers > 1) {
      this.selectedPassengers--;
    }
  }

  calculateTotalPrice(): number {
    return this.flight ? this.flight.price * this.selectedPassengers : 0;
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
      weekday: 'long',
      month: 'long', 
      day: 'numeric',
      year: 'numeric'
    });
  }

  formatDateShort(dateString: string): string {
    const date = new Date(dateString);
    return date.toLocaleDateString('en-US', { 
      month: 'short', 
      day: 'numeric',
      year: 'numeric'
    });
  }

  calculateDuration(departure: string, arrival: string): string {
    const dep = new Date(departure);
    const arr = new Date(arrival);
    const diff = arr.getTime() - dep.getTime();
    const hours = Math.floor(diff / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    return `${hours}h ${minutes}m`;
  }
}
