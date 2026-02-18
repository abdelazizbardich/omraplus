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
import { Program } from './program.entity';

export interface TravelerDetails {
    travelers: Array<{
        name: string;
        passportNumber: string;
        passportExpiry: string;
        dateOfBirth: string;
        gender: string;
        nationality?: string;
    }>;
}

@Entity('orders')
export class Order {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ unique: true })
    order_number: string;

    @Column()
    user_id: number;

    @ManyToOne(() => User, (user) => user.orders)
    @JoinColumn({ name: 'user_id' })
    user: User;

    @Column()
    program_id: number;

    @ManyToOne(() => Program, (program) => program.orders)
    @JoinColumn({ name: 'program_id' })
    program: Program;

    @Column({ default: 1 })
    participants_count: number;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    subtotal: number;

    @Column({ type: 'decimal', precision: 10, scale: 2, default: 0 })
    discount_amount: number;

    @Column({ type: 'decimal', precision: 10, scale: 2, default: 0 })
    tax_amount: number;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    total_amount: number;

    @Column({ nullable: true })
    discount_code: string;

    @Column({ default: 'pending' })
    payment_status: string;

    @Column({ nullable: true })
    payment_method: string;

    @Column({ nullable: true })
    payment_transaction_id: string;

    @Column({ nullable: true })
    payment_date: Date;

    @Column({ default: 'pending' })
    order_status: string;

    @Column({ nullable: true, type: 'text' })
    notes: string;

    @Column({ nullable: true, type: 'text' })
    customer_notes: string;

    @Column({ nullable: true, type: 'json' })
    traveler_details: TravelerDetails;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;
}
