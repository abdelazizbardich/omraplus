import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { Flight } from './flight.entity';

@Entity('airlines')
export class Airline {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    name_en: string;

    @Column({ type: 'varchar', length: 255 })
    name_ar: string;

    @Column({ type: 'varchar', length: 255 })
    name_fr: string;

    @Column({ type: 'varchar', length: 500, nullable: true })
    logo: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @OneToMany(() => Flight, (flight) => flight.airline)
    flights: Flight[];
}
