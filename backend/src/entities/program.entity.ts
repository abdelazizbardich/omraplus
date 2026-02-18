import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    OneToMany,
    JoinColumn,
} from 'typeorm';
import { Flight } from './flight.entity';
import { Hotel } from './hotel.entity';
import { ProgramPrice } from './program-price.entity';
import { Discount } from './discount.entity';

@Entity('programs')
export class Program {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int' })
    flight_id: number;

    @Column({ type: 'int', nullable: true })
    hotel_id_mecca: number;

    @Column({ type: 'int', nullable: true })
    hotel_id_medina: number;

    @Column({ type: 'boolean', default: false })
    is_economic: boolean;

    @Column({ type: 'boolean', default: false })
    is_recommended: boolean;

    @Column({ type: 'int', nullable: true })
    seat_count: number;

    @Column({ type: 'boolean', default: false })
    have_meals: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => Flight, (flight) => flight.programs)
    @JoinColumn({ name: 'flight_id' })
    flight: Flight;

    @ManyToOne(() => Hotel, (hotel) => hotel.programs_mecca)
    @JoinColumn({ name: 'hotel_id_mecca' })
    hotel_mecca: Hotel;

    @ManyToOne(() => Hotel, (hotel) => hotel.programs_medina)
    @JoinColumn({ name: 'hotel_id_medina' })
    hotel_medina: Hotel;

    @OneToMany(() => ProgramPrice, (price) => price.program)
    prices: ProgramPrice[];

    @OneToMany(() => Discount, (discount) => discount.program)
    discounts: Discount[];
}
