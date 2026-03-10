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

    @Column()
    name: string;

    @Column({ unique: true })
    code: string;

    @Column({ nullable: true })
    logo: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column({ default: true })
    is_active: boolean;

    @OneToMany(() => Flight, (flight) => flight.airline)
    flights: Flight[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
