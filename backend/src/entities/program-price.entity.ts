import {
    Entity,
    PrimaryGeneratedColumn,
    Column,
    CreateDateColumn,
    UpdateDateColumn,
    ManyToOne,
    OneToMany,
    JoinColumn,
} from 'typeorm';
import { Program } from './program.entity';
import { Room } from './room.entity';
import { Order } from './order.entity';

@Entity('program_prices')
export class ProgramPrice {
    @PrimaryGeneratedColumn()
    id: number;

    @Column({ type: 'int' })
    program_id: number;

    @Column({ type: 'int' })
    room_id: number;

    @Column({ type: 'decimal', precision: 10, scale: 2 })
    price: number;

    @Column({ type: 'decimal', precision: 10, scale: 2, nullable: true })
    old_price: number;

    @CreateDateColumn()
    created_at: Date;

    @UpdateDateColumn()
    updated_at: Date;

    @ManyToOne(() => Program, (program) => program.prices)
    @JoinColumn({ name: 'program_id' })
    program: Program;

    @ManyToOne(() => Room, (room) => room.program_prices)
    @JoinColumn({ name: 'room_id' })
    room: Room;

    @OneToMany(() => Order, (order) => order.program_price)
    orders: Order[];
}
