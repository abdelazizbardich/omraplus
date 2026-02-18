import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { Program } from './program.entity';

@Entity('categories')
export class Category {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    name: string;

    @Column({ unique: true })
    slug: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column({ nullable: true })
    icon: string;

    @Column({ nullable: true })
    image: string;

    @Column({ default: 0 })
    order: number;

    @Column({ default: true })
    is_active: boolean;

    @OneToMany(() => Program, (program) => program.category)
    programs: Program[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
