import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    ManyToOne,
    JoinColumn,
    CreateDateColumn,
} from 'typeorm';
import { BlogPost } from './blog-post.entity';
import { BlogTag } from './blog-tag.entity';

@Entity('blog_post_tags')
export class BlogPostTag {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    post_id: number;

    @ManyToOne(() => BlogPost, (post) => post.post_tags)
    @JoinColumn({ name: 'post_id' })
    post: BlogPost;

    @Column()
    tag_id: number;

    @ManyToOne(() => BlogTag, (tag) => tag.post_tags)
    @JoinColumn({ name: 'tag_id' })
    tag: BlogTag;

    @CreateDateColumn()
    created_at: Date;
}
