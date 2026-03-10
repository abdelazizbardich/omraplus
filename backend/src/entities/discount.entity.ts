import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
} from 'typeorm';

@Entity('discounts')
export class Discount {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ unique: true })
    code: string;

    @Column()
    name: string;

    @Column({ nullable: true, type: 'text' })
    description: string;

    @Column()
    discount_type: string;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    discount_value: number;

    @Column({ nullable: true, type: 'decimal', precision: 10, scale: 2 })
    max_discount_amount: number;

    @Column({ nullable: true, type: 'decimal', precision: 10, scale: 2 })
    min_purchase_amount: number;

    @Column({ nullable: true })
    start_date: Date;

    @Column({ nullable: true })
    end_date: Date;

    @Column({ default: 0 })
    usage_limit: number;

    @Column({ default: 0 })
    used_count: number;

    @Column({ default: true })
    is_active: boolean;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
