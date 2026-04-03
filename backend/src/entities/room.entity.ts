import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { Hotel } from './hotel.entity';

@Entity('rooms')
export class Room {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    hotel_id: number;

    @ManyToOne(() => Hotel, (hotel) => hotel.rooms)
    @JoinColumn({ name: 'hotel_id' })
    hotel: Hotel;

    @Column()
    name: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column()
    room_type: string;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    price_per_night: number;

    @Column({ default: 0 })
    max_occupancy: number;

    @Column({ default: 0 })
    available_rooms: number;

    @Column({ nullable: true })
    bed_type: string;

    @Column({ nullable: true })
    size: string;

    @Column({ type: 'simple-array', nullable: true })
    amenities: string[];

    @Column({ nullable: true })
    image: string;

    @Column({ default: true })
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
