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
import { Category } from './category.entity';
import { Airline } from './airline.entity';
import { Program } from './program.entity';
import { Photo } from './photo.entity';

@Entity('flights')
export class Flight {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    title_en: string;

    @Column({ type: 'varchar', length: 255 })
    title_ar: string;

    @Column({ type: 'varchar', length: 255 })
    title_fr: string;

    @Column({ type: 'varchar', length: 255 })
    slug_en: string;

    @Column({ type: 'varchar', length: 255 })
    slug_ar: string;

    @Column({ type: 'varchar', length: 255 })
    slug_fr: string;

    @Column({ type: 'text', nullable: true })
    description_en: string;

    @Column({ type: 'text', nullable: true })
    description_ar: string;

    @Column({ type: 'text', nullable: true })
    description_fr: string;

    @Column({ type: 'date' })
    going_date: Date;

    @Column({ type: 'date', nullable: true })
    return_date: Date;

    @Column({ type: 'varchar', length: 50 })
    type: string;

    @Column({ type: 'boolean', default: false })
    is_recommended: boolean;

    @Column({ type: 'int' })
    category_id: number;

    @Column({ type: 'int', nullable: true })
    airline_id: number;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => Category, (category) => category.flights)
    @JoinColumn({ name: 'category_id' })
    category: Category;

    @ManyToOne(() => Airline, (airline) => airline.flights)
    @JoinColumn({ name: 'airline_id' })
    airline: Airline;

    @OneToMany(() => Program, (program) => program.flight)
    programs: Program[];

    @OneToMany(() => Photo, (photo) => photo.flight)
    photos: Photo[];
}
