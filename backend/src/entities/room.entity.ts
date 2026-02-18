import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { ProgramPrice } from './program-price.entity';

@Entity('rooms')
export class Room {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    name_en: string;

    @Column({ type: 'varchar', length: 255 })
    name_ar: string;

    @Column({ type: 'varchar', length: 255 })
    name_fr: string;

    @Column({ type: 'int', nullable: true })
    capacity: number;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @OneToMany(() => ProgramPrice, (price) => price.room)
    program_prices: ProgramPrice[];
}
