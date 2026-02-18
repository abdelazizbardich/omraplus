import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
    ManyToMany,
} from 'typeorm';
import { BlogPostCategory } from './blog-post-category.entity';
import { Photo } from './photo.entity';

@Entity('blog_categories')
export class BlogCategory {
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

    @OneToMany(() => BlogPostCategory, (junction) => junction.category)
    post_categories: BlogPostCategory[];

    @OneToMany(() => Photo, (photo) => photo.blog_category)
    photos: Photo[];
}
