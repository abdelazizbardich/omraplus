export interface Program {
  id: number;
  title: string;
  titleAr?: string;
  titleEn?: string;
  description?: string;
  descriptionAr?: string;
  descriptionEn?: string;
  duration: number;
  price: number;
  includes?: string[];
  itinerary?: string;
  startDate?: string;
  endDate?: string;
  maxParticipants?: number;
  availableSpots?: number;
  images?: string[];
  isActive: boolean;
  createdAt: string;
  updatedAt: string;
}

export interface ProgramSearchParams {
  minDuration?: number;
  maxDuration?: number;
  minPrice?: number;
  maxPrice?: number;
  startDate?: string;
}
