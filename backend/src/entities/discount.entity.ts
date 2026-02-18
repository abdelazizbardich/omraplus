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

@Entity('discounts')
export class Discount {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255, nullable: true })
    name_en: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    name_ar: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    name_fr: string;

    @Column({ type: 'int', nullable: true })
    program_id: number;

    @Column({ type: 'varchar', length: 100, unique: true })
    code: string;

    @Column({ type: 'varchar', length: 50, default: 'percentage' })
    type: string;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    value: number;

    @Column({ type: 'timestamp', nullable: true })
    valid_until: Date;

    @Column({ type: 'boolean', default: true })
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => Program, (program) => program.discounts)
    @JoinColumn({ name: 'program_id' })
    program: Program;
}
