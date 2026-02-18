import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
    ManyToMany,
} from 'typeorm';
import { Room } from './room.entity';
import { Program } from './program.entity';

@Entity('hotels')
export class Hotel {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    name: string;

    @Column({ unique: true })
    slug: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column()
    address: string;

    @Column()
    city: string;

    @Column()
    country: string;

    @Column({ type: 'decimal', precision: 10, scale: 7, nullable: true })
    latitude: number;

    @Column({ type: 'decimal', precision: 10, scale: 7, nullable: true })
    longitude: number;

    @Column({ default: 0 })
    star_rating: number;

    @Column({ nullable: true })
    phone: string;

    @Column({ nullable: true })
    email: string;

    @Column({ nullable: true })
    website: string;

    @Column({ nullable: true })
    image: string;

    @Column({ type: 'simple-array', nullable: true })
    amenities: string[];

    @Column({ default: true })
    is_active: boolean;

    @OneToMany(() => Room, (room) => room.hotel)
    rooms: Room[];

    @ManyToMany(() => Program, (program) => program.hotels)
    programs: Program[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
