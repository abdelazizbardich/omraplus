import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    OneToMany,
} from 'typeorm';
import { UserRole } from './user-role.enum';
import { Order } from './order.entity';
import { BlogPost } from './blog-post.entity';
import { BlogComment } from './blog-comment.entity';

@Entity('users')
export class User {
    @PrimaryGeneratedColumn()
    id: number;

    @Column()
    name: string;

    @Column({ unique: true })
    email: string;

    @Column({ nullable: true })
    email_verified_at: Date;

    @Column()
    password: string;

    @Column({ nullable: true })
    phone: string;

    @Column({ nullable: true })
    address: string;

    @Column({ nullable: true })
    city: string;

    @Column({ nullable: true })
    country: string;

    @Column({ nullable: true })
    postal_code: string;

    @Column({ nullable: true })
    passport_number: string;

    @Column({ nullable: true })
    passport_expiry: Date;

    @Column({ nullable: true })
    date_of_birth: Date;

    @Column({ nullable: true })
    gender: string;

    @Column({
        type: 'enum',
        enum: UserRole,
        default: UserRole.USER,
    })
    role: UserRole;

    @Column({ default: true })
    is_active: boolean;

    @Column({ nullable: true })
    avatar: string;

    @Column({ nullable: true, type: 'text' })
    bio: string;

    @Column({ nullable: true })
    remember_token: string;

    @OneToMany(() => Order, (order) => order.user)
    orders: Order[];

    @OneToMany(() => BlogPost, (post) => post.author)
    blog_posts: BlogPost[];

    @OneToMany(() => BlogComment, (comment) => comment.user)
    blog_comments: BlogComment[];

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
