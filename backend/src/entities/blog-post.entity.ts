import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
    OneToMany,
} from 'typeorm';
import { User } from './user.entity';
import { BlogComment } from './blog-comment.entity';
import { BlogPostCategory } from './blog-post-category.entity';
import { BlogPostTag } from './blog-post-tag.entity';

@Entity('blog_posts')
export class BlogPost {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    title: string;

    @Column({ unique: true })
    slug: string;

    @Column({ type: 'text' })
    content: string;

    @Column({ nullable: true, type: 'text' })
    excerpt: string;

    @Column()
    author_id: number;

    @ManyToOne(() => User, (user) => user.blog_posts)
    @JoinColumn({ name: 'author_id' })
    author: User;

    @Column({ nullable: true })
    featured_image: string;

    @Column({ nullable: true, type: 'text' })
    meta_title: string;

    @Column({ nullable: true, type: 'text' })
    meta_description: string;

    @Column({ nullable: true, type: 'simple-array' })
    meta_keywords: string[];

    @Column({ default: 0 })
    views_count: number;

    @Column({ default: false })
    is_featured: boolean;

    @Column({ default: 'draft' })
    status: string;

    @Column({ nullable: true })
    published_at: Date;

    @OneToMany(() => BlogComment, (comment) => comment.post)
    comments: BlogComment[];

    @OneToMany(() => BlogPostCategory, (postCategory) => postCategory.post)
    post_categories: BlogPostCategory[];

    @OneToMany(() => BlogPostTag, (postTag) => postTag.post)
    post_tags: BlogPostTag[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
