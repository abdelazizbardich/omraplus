import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { BlogPost } from './blog-post.entity';
import { BlogCategory } from './blog-category.entity';

@Entity('blog_post_category')
export class BlogPostCategory {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int' })
    blog_post_id: number;

    @Column({ type: 'int' })
    blog_category_id: number;

    @ManyToOne(() => BlogPost, (post) => post.post_categories)
    @JoinColumn({ name: 'blog_post_id' })
    post: BlogPost;

    @ManyToOne(() => BlogCategory, (category) => category.post_categories)
    @JoinColumn({ name: 'blog_category_id' })
    category: BlogCategory;
}
