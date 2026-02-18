export interface Flight {
  id: number;
  flightNumber: string;
  airline: string;
  departureCity: string;
  arrivalCity: string;
  departureTime: string;
  arrivalTime: string;
  price: number;
  availableSeats: number;
  class: string;
  nameAr?: string;
  nameEn?: string;
  descriptionAr?: string;
  descriptionEn?: string;
  isActive: boolean;
  createdAt: string;
  updatedAt: string;
}

export interface FlightSearchParams {
  departureCity?: string;
  arrivalCity?: string;
  departureDate?: string;
  returnDate?: string;
  passengers?: number;
  class?: string;
}
