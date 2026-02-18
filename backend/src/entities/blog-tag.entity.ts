import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { BlogPostTag } from './blog-post-tag.entity';

@Entity('blog_tags')
export class BlogTag {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    name: string;

    @Column({ unique: true })
    slug: string;

    @Column({ default: true })
    is_active: boolean;

    @OneToMany(() => BlogPostTag, (postTag) => postTag.tag)
    post_tags: BlogPostTag[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
