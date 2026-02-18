export enum OrderStatus {
  PENDING = 'pending',
  CONFIRMED = 'confirmed',
  CANCELLED = 'cancelled',
  COMPLETED = 'completed'
}

export enum OrderType {
  FLIGHT = 'flight',
  HOTEL = 'hotel',
  PROGRAM = 'program'
}

export interface Order {
  id: number;
  userId: number;
  orderType: OrderType;
  itemId: number;
  status: OrderStatus;
  totalPrice: number;
  quantity: number;
  orderDetails?: any;
  paymentMethod?: string;
  paymentStatus?: string;
  notes?: string;
  createdAt: string;
  updatedAt: string;
}

export interface CreateOrderData {
  orderType: OrderType;
  itemId: number;
  quantity: number;
  orderDetails?: any;
  paymentMethod?: string;
  notes?: string;
}
