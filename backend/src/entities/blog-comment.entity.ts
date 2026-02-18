import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { BlogPost } from './blog-post.entity';
import { User } from './user.entity';

@Entity('blog_comments')
export class BlogComment {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int' })
    blog_post_id: number;

    @Column({ type: 'int', nullable: true })
    user_id: number;

    @Column({ type: 'varchar', length: 255, nullable: true })
    guest_name: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    guest_email: string;

    @Column({ type: 'text' })
    content: string;

    @Column({ type: 'boolean', default: false })
    is_approved: boolean;

    @Column({ type: 'boolean', default: false })
    is_spam: boolean;

    @Column({ type: 'varchar', length: 10, default: 'en' })
    lang: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => BlogPost, (post) => post.comments)
    @JoinColumn({ name: 'blog_post_id' })
    blog_post: BlogPost;

    @ManyToOne(() => User, (user) => user.blog_comments)
    @JoinColumn({ name: 'user_id' })
    user: User;
}
