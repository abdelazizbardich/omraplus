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
import { User } from './user.entity';
import { BlogPostCategory } from './blog-post-category.entity';
import { BlogPostTag } from './blog-post-tag.entity';
import { BlogComment } from './blog-comment.entity';

@Entity('blog_posts')
export class BlogPost {
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

    @Column({ type: 'text' })
    content_en: string;

    @Column({ type: 'text' })
    content_ar: string;

    @Column({ type: 'text' })
    content_fr: string;

    @Column({ type: 'text', nullable: true })
    excerpt_en: string;

    @Column({ type: 'text', nullable: true })
    excerpt_ar: string;

    @Column({ type: 'text', nullable: true })
    excerpt_fr: string;

    @Column({ type: 'varchar', length: 500, nullable: true })
    featured_image: string;

    @Column({ type: 'int', nullable: true })
    user_id: number;

    @Column({ type: 'int', default: 0 })
    view_count: number;

    @Column({ type: 'int', default: 0 })
    share_count: number;

    @Column({ type: 'boolean', default: false })
    is_published: boolean;

    @Column({ type: 'timestamp', nullable: true })
    published_at: Date;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => User, (user) => user.blog_posts)
    @JoinColumn({ name: 'user_id' })
    author: User;

    @OneToMany(() => BlogPostCategory, (junction) => junction.post)
    post_categories: BlogPostCategory[];

    @OneToMany(() => BlogPostTag, (junction) => junction.post)
    post_tags: BlogPostTag[];

    @OneToMany(() => BlogComment, (comment) => comment.blog_post)
    comments: BlogComment[];
}
