import {
    Controller,
    Get,
    Post,
    Body,
    Patch,
    Param,
    Delete,
    UseGuards,
} from '@nestjs/common';
import {
    ApiTags,
    ApiOperation,
    ApiResponse,
    ApiBearerAuth,
} from '@nestjs/swagger';
import { FlightsService } from './flights.service';
import { CreateFlightDto } from './dto/create-flight.dto';
import { UpdateFlightDto } from './dto/update-flight.dto';
import { JwtAuthGuard } from '../auth/guards/jwt-auth.guard';
import { RolesGuard } from '../auth/guards/roles.guard';
import { Roles } from '../../common/decorators/roles.decorator';
import { UserRole } from '../../entities/user-role.enum';

@ApiTags('flights')
@Controller('flights')
export class FlightsController {
    constructor(private readonly flightsService: FlightsService) {}

    @Post()
    @UseGuards(JwtAuthGuard, RolesGuard)
    @Roles(UserRole.ADMIN)
    @ApiBearerAuth()
    @ApiOperation({ summary: 'Create a new flight' })
    @ApiResponse({
        status: 201,
        description: 'The flight has been successfully created.',
    })
    @ApiResponse({ status: 400, description: 'Bad Request.' })
    @ApiResponse({ status: 401, description: 'Unauthorized.' })
    @ApiResponse({ status: 403, description: 'Forbidden.' })
    create(@Body() createFlightDto: CreateFlightDto) {
        return this.flightsService.create(createFlightDto);
    }

    @Get()
    @ApiOperation({ summary: 'Get all flights' })
    @ApiResponse({
        status: 200,
        description: 'Return all flights with relations.',
    })
    findAll() {
        return this.flightsService.findAll();
    }

    @Get(':id')
    @ApiOperation({ summary: 'Get a flight by ID' })
    @ApiResponse({
        status: 200,
        description: 'Return the flight with relations.',
    })
    @ApiResponse({ status: 404, description: 'Flight not found.' })
    findOne(@Param('id') id: string) {
        return this.flightsService.findOne(+id);
    }

    @Patch(':id')
    @UseGuards(JwtAuthGuard, RolesGuard)
    @Roles(UserRole.ADMIN)
    @ApiBearerAuth()
    @ApiOperation({ summary: 'Update a flight' })
    @ApiResponse({
        status: 200,
        description: 'The flight has been successfully updated.',
    })
    @ApiResponse({ status: 400, description: 'Bad Request.' })
    @ApiResponse({ status: 401, description: 'Unauthorized.' })
    @ApiResponse({ status: 403, description: 'Forbidden.' })
    @ApiResponse({ status: 404, description: 'Flight not found.' })
    update(@Param('id') id: string, @Body() updateFlightDto: UpdateFlightDto) {
        return this.flightsService.update(+id, updateFlightDto);
    }

    @Delete(':id')
    @UseGuards(JwtAuthGuard, RolesGuard)
    @Roles(UserRole.ADMIN)
    @ApiBearerAuth()
    @ApiOperation({ summary: 'Delete a flight' })
    @ApiResponse({
        status: 200,
        description: 'The flight has been successfully deleted.',
    })
    @ApiResponse({ status: 401, description: 'Unauthorized.' })
    @ApiResponse({ status: 403, description: 'Forbidden.' })
    @ApiResponse({ status: 404, description: 'Flight not found.' })
    remove(@Param('id') id: string) {
        return this.flightsService.remove(+id);
    }
}
