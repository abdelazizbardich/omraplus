import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Repository } from 'typeorm';
import { Flight } from '../../entities/flight.entity';
import { Category } from '../../entities/category.entity';
import { Airline } from '../../entities/airline.entity';
import { CreateFlightDto } from './dto/create-flight.dto';
import { UpdateFlightDto } from './dto/update-flight.dto';

@Injectable()
export class FlightsService {
    constructor(
        @InjectRepository(Flight)
        private readonly flightRepository: Repository<Flight>,
        @InjectRepository(Category)
        private readonly categoryRepository: Repository<Category>,
        @InjectRepository(Airline)
        private readonly airlineRepository: Repository<Airline>,
    ) {}

    async create(createFlightDto: CreateFlightDto): Promise<Flight> {
        const category = await this.categoryRepository.findOne({
            where: { id: createFlightDto.category_id },
        });

        if (!category) {
            throw new NotFoundException(
                `Category with ID ${createFlightDto.category_id} not found`,
            );
        }

        const airline = await this.airlineRepository.findOne({
            where: { id: createFlightDto.airline_id },
        });

        if (!airline) {
            throw new NotFoundException(
                `Airline with ID ${createFlightDto.airline_id} not found`,
            );
        }

        const flight = this.flightRepository.create(createFlightDto);
        return await this.flightRepository.save(flight);
    }

    async findAll(): Promise<Flight[]> {
        return await this.flightRepository.find({
            relations: ['category', 'airline', 'programs', 'photos'],
        });
    }

    async findOne(id: number): Promise<Flight> {
        const flight = await this.flightRepository.findOne({
            where: { id },
            relations: ['category', 'airline', 'programs', 'photos'],
        });

        if (!flight) {
            throw new NotFoundException(`Flight with ID ${id} not found`);
        }

        return flight;
    }

    async update(id: number, updateFlightDto: UpdateFlightDto): Promise<Flight> {
        const flight = await this.findOne(id);

        if (updateFlightDto.category_id) {
            const category = await this.categoryRepository.findOne({
                where: { id: updateFlightDto.category_id },
            });

            if (!category) {
                throw new NotFoundException(
                    `Category with ID ${updateFlightDto.category_id} not found`,
                );
            }
        }

        if (updateFlightDto.airline_id) {
            const airline = await this.airlineRepository.findOne({
                where: { id: updateFlightDto.airline_id },
            });

            if (!airline) {
                throw new NotFoundException(
                    `Airline with ID ${updateFlightDto.airline_id} not found`,
                );
            }
        }

        Object.assign(flight, updateFlightDto);
        return await this.flightRepository.save(flight);
    }

    async remove(id: number): Promise<void> {
        const flight = await this.findOne(id);
        await this.flightRepository.remove(flight);
    }
}
