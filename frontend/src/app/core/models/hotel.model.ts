export interface Hotel {
  id: number;
  name: string;
  nameAr?: string;
  nameEn?: string;
  description?: string;
  descriptionAr?: string;
  descriptionEn?: string;
  location: string;
  city: string;
  country: string;
  stars: number;
  pricePerNight: number;
  availableRooms: number;
  amenities?: string[];
  images?: string[];
  isActive: boolean;
  createdAt: string;
  updatedAt: string;
}

export interface HotelSearchParams {
  city?: string;
  country?: string;
  checkInDate?: string;
  checkOutDate?: string;
  guests?: number;
  minStars?: number;
  maxPrice?: number;
}
