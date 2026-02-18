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
import { ProgramPrice } from './program-price.entity';

@Entity('orders')
export class Order {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int', nullable: true })
    user_id: number;

    @Column({ type: 'int' })
    program_price_id: number;

    @Column({ type: 'varchar', length: 255 })
    customer_name: string;

    @Column({ type: 'varchar', length: 255 })
    customer_email: string;

    @Column({ type: 'varchar', length: 50 })
    customer_phone: string;

    @Column({ type: 'text', nullable: true })
    customer_address: string;

    @Column({ type: 'int', default: 1 })
    pilgrims_count: number;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    total_price: number;

    @Column({ type: 'varchar', length: 50, default: 'pending' })
    status: string;

    @Column({ type: 'varchar', length: 50, nullable: true })
    payment_method: string;

    @Column({ type: 'varchar', length: 50, default: 'unpaid' })
    payment_status: string;

    @Column({ type: 'text', nullable: true })
    notes: string;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => User, (user) => user.orders)
    @JoinColumn({ name: 'user_id' })
    user: User;

    @ManyToOne(() => ProgramPrice, (price) => price.orders)
    @JoinColumn({ name: 'program_price_id' })
    program_price: ProgramPrice;
}
