import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { Flight } from './flight.entity';
import { Photo } from './photo.entity';

@Entity('categories')
export class Category {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    name_en: string;

    @Column({ type: 'varchar', length: 255 })
    name_ar: string;

    @Column({ type: 'varchar', length: 255 })
    name_fr: string;

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

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @OneToMany(() => Flight, (flight) => flight.category)
    flights: Flight[];

    @OneToMany(() => Photo, (photo) => photo.category)
    photos: Photo[];
}
