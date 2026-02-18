import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { Program } from './program.entity';
import { Photo } from './photo.entity';

@Entity('hotels')
export class Hotel {
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
    address_en: string;

    @Column({ type: 'text', nullable: true })
    address_ar: string;

    @Column({ type: 'text', nullable: true })
    address_fr: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    city: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    distance: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @OneToMany(() => Program, (program) => program.hotel_mecca)
    programs_mecca: Program[];

    @OneToMany(() => Program, (program) => program.hotel_medina)
    programs_medina: Program[];

    @OneToMany(() => Photo, (photo) => photo.hotel)
    photos: Photo[];
}
