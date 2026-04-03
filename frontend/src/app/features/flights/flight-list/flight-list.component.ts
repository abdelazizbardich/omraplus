import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, FormGroup, ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { ApiService } from '../../../core/services/api.service';
import { Flight, FlightSearchParams } from '../../../core/models/flight.model';

@Component({
  selector: 'app-flight-list',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './flight-list.component.html',
  styleUrls: ['./flight-list.component.scss']
})
export class FlightListComponent implements OnInit {
  flights: Flight[] = [];
  filteredFlights: Flight[] = [];
  searchForm!: FormGroup;
  loading = true;
  error = '';
  
  cities = [
    'Jeddah', 'Medina', 'Riyadh', 'Dubai', 'Cairo', 
    'Istanbul', 'Karachi', 'Mumbai', 'Jakarta', 'Kuala Lumpur'
  ];
  
  classes = ['Economy', 'Business', 'First Class'];

  constructor(
    private apiService: ApiService,
    private formBuilder: FormBuilder,
    private router: Router
  ) {}

  ngOnInit(): void {
    this.initializeSearchForm();
    this.loadFlights();
    this.setupSearchListener();
  }

  initializeSearchForm(): void {
    this.searchForm = this.formBuilder.group({
      departureCity: [''],
      arrivalCity: [''],
      departureDate: [''],
      passengers: [1],
      class: ['']
    });
  }

  setupSearchListener(): void {
    this.searchForm.valueChanges.subscribe(() => {
      this.applyFilters();
    });
  }

  loadFlights(): void {
    this.loading = true;
    this.error = '';

    this.apiService.get<Flight[]>('flights').subscribe({
      next: (flights: Flight[]) => {
        this.flights = flights;
        this.filteredFlights = flights;
        this.loading = false;
      },
      error: (error: any) => {
        this.error = 'Failed to load flights. Please try again later.';
        this.loading = false;
        console.error('Error loading flights:', error);
      }
    });
  }

  applyFilters(): void {
    const formValue = this.searchForm.value;
    
    this.filteredFlights = this.flights.filter(flight => {
      const matchesDeparture = !formValue.departureCity || 
        flight.departureCity.toLowerCase().includes(formValue.departureCity.toLowerCase());
      
      const matchesArrival = !formValue.arrivalCity || 
        flight.arrivalCity.toLowerCase().includes(formValue.arrivalCity.toLowerCase());
      
      const matchesClass = !formValue.class || 
        flight.class.toLowerCase() === formValue.class.toLowerCase();
      
      const matchesDate = !formValue.departureDate || 
        new Date(flight.departureTime).toDateString() === new Date(formValue.departureDate).toDateString();
      
      const hasEnoughSeats = flight.availableSeats >= (formValue.passengers || 1);

      return matchesDeparture && matchesArrival && matchesClass && matchesDate && hasEnoughSeats;
    });
  }

  resetFilters(): void {
    this.searchForm.reset({
      departureCity: '',
      arrivalCity: '',
      departureDate: '',
      passengers: 1,
      class: ''
    });
    this.filteredFlights = this.flights;
  }

  sortFlights(sortBy: string): void {
    switch (sortBy) {
      case 'price-asc':
        this.filteredFlights.sort((a, b) => a.price - b.price);
        break;
      case 'price-desc':
        this.filteredFlights.sort((a, b) => b.price - a.price);
        break;
      case 'departure':
        this.filteredFlights.sort((a, b) => 
          new Date(a.departureTime).getTime() - new Date(b.departureTime).getTime()
        );
        break;
      case 'airline':
        this.filteredFlights.sort((a, b) => a.airline.localeCompare(b.airline));
        break;
      default:
        break;
    }
  }

  navigateToDetail(flightId: number): void {
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

  calculateDuration(departure: string, arrival: string): string {
    const dep = new Date(departure);
    const arr = new Date(arrival);
    const diff = arr.getTime() - dep.getTime();
    const hours = Math.floor(diff / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    return `${hours}h ${minutes}m`;
  }
}
