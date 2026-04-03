import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
    OneToMany,
    ManyToMany,
    JoinTable,
} from 'typeorm';
import { Category } from './category.entity';
import { ProgramPrice } from './program-price.entity';
import { Order } from './order.entity';
import { Photo } from './photo.entity';
import { Flight } from './flight.entity';
import { Hotel } from './hotel.entity';

@Entity('programs')
export class Program {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    title: string;

    @Column({ unique: true })
    slug: string;

    @Column({ type: 'text' })
    description: string;

    @Column({ nullable: true, type: 'text' })
    short_description: string;

    @Column()
    category_id: number;

    @ManyToOne(() => Category, (category) => category.programs)
    @JoinColumn({ name: 'category_id' })
    category: Category;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    price: number;

    @Column({ type: 'decimal', precision: 10, scale: 2, nullable: true })
    discount_price: number;

    @Column()
    duration_days: number;

    @Column()
    start_date: Date;

    @Column()
    end_date: Date;

    @Column({ default: 0 })
    max_participants: number;

    @Column({ default: 0 })
    current_participants: number;

    @Column({ nullable: true })
    featured_image: string;

    @Column({ type: 'simple-array', nullable: true })
    included_services: string[];

    @Column({ type: 'simple-array', nullable: true })
    excluded_services: string[];

    @Column({ type: 'text', nullable: true })
    itinerary: string;

    @Column({ type: 'text', nullable: true })
    terms_and_conditions: string;

    @Column({ default: false })
    is_featured: boolean;

    @Column({ default: true })
    is_active: boolean;

    @Column({ default: 'pending' })
    status: string;

    @OneToMany(() => ProgramPrice, (price) => price.program)
    prices: ProgramPrice[];

    @OneToMany(() => Order, (order) => order.program)
    orders: Order[];

    @OneToMany(() => Photo, (photo) => photo.program)
    photos: Photo[];

    @ManyToMany(() => Flight, (flight) => flight.programs)
    @JoinTable({
        name: 'program_flights',
        joinColumn: { name: 'program_id', referencedColumnName: 'id' },
        inverseJoinColumn: { name: 'flight_id', referencedColumnName: 'id' },
    })
    flights: Flight[];

    @ManyToMany(() => Hotel, (hotel) => hotel.programs)
    @JoinTable({
        name: 'program_hotels',
        joinColumn: { name: 'program_id', referencedColumnName: 'id' },
        inverseJoinColumn: { name: 'hotel_id', referencedColumnName: 'id' },
    })
    hotels: Hotel[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
