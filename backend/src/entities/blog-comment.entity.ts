import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { User } from './user.entity';
import { BlogPost } from './blog-post.entity';

@Entity('blog_comments')
export class BlogComment {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    post_id: number;

    @ManyToOne(() => BlogPost, (post) => post.comments)
    @JoinColumn({ name: 'post_id' })
    post: BlogPost;

    @Column()
    user_id: number;

    @ManyToOne(() => User, (user) => user.blog_comments)
    @JoinColumn({ name: 'user_id' })
    user: User;

    @Column({ type: 'text' })
    content: string;

    @Column({ nullable: true })
    parent_id: number;

    @Column({ default: 'pending' })
    status: string;

    @Column({ nullable: true })
    user_ip: string;

    @Column({ nullable: true })
    user_agent: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
