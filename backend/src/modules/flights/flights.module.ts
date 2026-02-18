import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { FlightsService } from './flights.service';
import { FlightsController } from './flights.controller';
import { Flight } from '../../entities/flight.entity';
import { Category } from '../../entities/category.entity';
import { Airline } from '../../entities/airline.entity';
import { Program } from '../../entities/program.entity';
import { Photo } from '../../entities/photo.entity';

@Module({
    imports: [
        TypeOrmModule.forFeature([Flight, Category, Airline, Program, Photo]),
    ],
    controllers: [FlightsController],
    providers: [FlightsService],
    exports: [FlightsService],
})
export class FlightsModule {}
