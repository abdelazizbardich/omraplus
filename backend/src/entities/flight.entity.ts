import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
    ManyToMany,
} from 'typeorm';
import { Airline } from './airline.entity';
import { Program } from './program.entity';

@Entity('flights')
export class Flight {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    flight_number: string;

    @Column()
    airline_id: number;

    @ManyToOne(() => Airline, (airline) => airline.flights)
    @JoinColumn({ name: 'airline_id' })
    airline: Airline;

    @Column()
    departure_airport: string;

    @Column()
    arrival_airport: string;

    @Column()
    departure_time: Date;

    @Column()
    arrival_time: Date;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    price: number;

    @Column({ default: 0 })
    available_seats: number;

    @Column({ nullable: true })
    aircraft_type: string;

    @Column({ nullable: true, type: 'text' })
    baggage_allowance: string;

    @Column({ default: true })
    is_active: boolean;

    @ManyToMany(() => Program, (program) => program.flights)
    programs: Program[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
