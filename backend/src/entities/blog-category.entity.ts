import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { BlogPostCategory } from './blog-post-category.entity';

@Entity('blog_categories')
export class BlogCategory {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    name: string;

    @Column({ unique: true })
    slug: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column({ default: 0 })
    order: number;

    @Column({ default: true })
    is_active: boolean;

    @OneToMany(() => BlogPostCategory, (postCategory) => postCategory.category)
    post_categories: BlogPostCategory[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
