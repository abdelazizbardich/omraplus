import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { Flight } from './flight.entity';
import { Hotel } from './hotel.entity';
import { Category } from './category.entity';
import { BlogCategory } from './blog-category.entity';

@Entity('photos')
export class Photo {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 500 })
    url: string;

    @Column({ type: 'varchar', length: 500, nullable: true })
    path: string;

    @Column({ type: 'varchar', length: 50 })
    type: string;

    @Column({ type: 'int' })
    post_id: number;

    @Column({ type: 'boolean', default: false })
    is_main: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => Flight, (flight) => flight.photos)
    @JoinColumn({ name: 'post_id' })
    flight: Flight;

    @ManyToOne(() => Hotel, (hotel) => hotel.photos)
    @JoinColumn({ name: 'post_id' })
    hotel: Hotel;

    @ManyToOne(() => Category, (category) => category.photos)
    @JoinColumn({ name: 'post_id' })
    category: Category;

    @ManyToOne(() => BlogCategory, (category) => category.photos)
    @JoinColumn({ name: 'post_id' })
    blog_category: BlogCategory;
}
