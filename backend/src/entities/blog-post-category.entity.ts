import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    ManyToOne,
    JoinColumn,
    CreateDateColumn,
} from 'typeorm';
import { BlogPost } from './blog-post.entity';
import { BlogCategory } from './blog-category.entity';

@Entity('blog_post_categories')
export class BlogPostCategory {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    post_id: number;

    @ManyToOne(() => BlogPost, (post) => post.post_categories)
    @JoinColumn({ name: 'post_id' })
    post: BlogPost;

    @Column()
    category_id: number;

    @ManyToOne(() => BlogCategory, (category) => category.post_categories)
    @JoinColumn({ name: 'category_id' })
    category: BlogCategory;

    @CreateDateColumn()
    created_at: Date;
}
