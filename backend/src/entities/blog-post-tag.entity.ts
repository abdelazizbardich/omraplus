import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    ManyToOne,
    JoinColumn,
} from 'typeorm';
import { BlogPost } from './blog-post.entity';
import { BlogTag } from './blog-tag.entity';

@Entity('blog_post_tag')
export class BlogPostTag {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int' })
    blog_post_id: number;

    @Column({ type: 'int' })
    blog_tag_id: number;

    @ManyToOne(() => BlogPost, (post) => post.post_tags)
    @JoinColumn({ name: 'blog_post_id' })
    post: BlogPost;

    @ManyToOne(() => BlogTag, (tag) => tag.post_tags)
    @JoinColumn({ name: 'blog_tag_id' })
    tag: BlogTag;
}
