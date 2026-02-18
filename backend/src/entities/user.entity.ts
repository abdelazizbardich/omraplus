import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { Exclude } from 'class-transformer';
import { UserRole } from './user-role.enum';
import { Order } from './order.entity';
import { BlogPost } from './blog-post.entity';
import { BlogComment } from './blog-comment.entity';

@Entity('users')
export class User {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'varchar', length: 255 })
    name: string;

    @Column({ type: 'varchar', length: 255, unique: true })
    email: string;

    @Column({ type: 'varchar', length: 255 })
    @Exclude()
    password: string;

    @Column({
        type: 'enum',
        enum: UserRole,
        default: UserRole.USER,
    })
    role: UserRole;

    @Column({ type: 'varchar', length: 255, nullable: true })
    first_name: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    last_name: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    city: string;

    @Column({ type: 'varchar', length: 50, nullable: true })
    phone: string;

    @Column({ type: 'varchar', length: 255, nullable: true })
    job: string;

    @Column({ type: 'varchar', length: 10, default: 'en' })
    lang: string;

    @Column({ type: 'varchar', length: 2048, nullable: true })
    profile_photo_path: string;

    @Column({ type: 'text', nullable: true })
    @Exclude()
    two_factor_secret: string;

    @Column({ type: 'text', nullable: true })
    @Exclude()
    two_factor_recovery_codes: string;

    @Column({ type: 'timestamp', nullable: true })
    two_factor_confirmed_at: Date;

    @Column({ type: 'varchar', length: 100, nullable: true })
    @Exclude()
    remember_token: string;

    @Column({ type: 'timestamp', nullable: true })
    email_verified_at: Date;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @OneToMany(() => Order, (order) => order.user)
    orders: Order[];

    @OneToMany(() => BlogPost, (post) => post.author)
    blog_posts: BlogPost[];

    @OneToMany(() => BlogComment, (comment) => comment.user)
    blog_comments: BlogComment[];
}
