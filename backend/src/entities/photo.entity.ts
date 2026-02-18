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

@Entity('photos')
export class Photo {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    program_id: number;

    @ManyToOne(() => Program, (program) => program.photos)
    @JoinColumn({ name: 'program_id' })
    program: Program;

    @Column()
    filename: string;

    @Column()
    path: string;

    @Column({ nullable: true })
    title: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column({ default: 0 })
    order: number;

    @Column({ default: false })
    is_featured: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
