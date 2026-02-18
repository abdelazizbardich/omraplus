import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { Program } from './program.entity';

@Entity('program_prices')
export class ProgramPrice {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    program_id: number;

    @ManyToOne(() => Program, (program) => program.prices)
    @JoinColumn({ name: 'program_id' })
    program: Program;

    @Column()
    room_type: string;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    price: number;

    @Column({ default: 0 })
    min_occupancy: number;

    @Column({ default: 0 })
    max_occupancy: number;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column({ default: true })
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
