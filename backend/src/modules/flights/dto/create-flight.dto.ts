import { ApiProperty } from '@nestjs/swagger';
import {
    IsString,
    IsNotEmpty,
    IsDateString,
    IsEnum,
    IsBoolean,
    IsNumber,
    IsOptional,
} from 'class-validator';

export class CreateFlightDto {
    @ApiProperty({
        description: 'Flight title in English',
        example: 'Hajj Flight 2024',
    })
    @IsString()
    @IsNotEmpty()
    title_en: string;

    @ApiProperty({
        description: 'Flight title in Arabic',
        example: 'رحلة حج 2024',
    })
    @IsString()
    @IsNotEmpty()
    title_ar: string;

    @ApiProperty({
        description: 'Flight title in French',
        example: 'Vol Hajj 2024',
    })
    @IsString()
    @IsNotEmpty()
    title_fr: string;

    @ApiProperty({
        description: 'Flight slug in English',
        example: 'hajj-flight-2024',
    })
    @IsString()
    @IsNotEmpty()
    slug_en: string;

    @ApiProperty({
        description: 'Flight slug in Arabic',
        example: 'رحلة-حج-2024',
    })
    @IsString()
    @IsNotEmpty()
    slug_ar: string;

    @ApiProperty({
        description: 'Flight slug in French',
        example: 'vol-hajj-2024',
    })
    @IsString()
    @IsNotEmpty()
    slug_fr: string;

    @ApiProperty({
        description: 'Flight description in English',
        example: 'Premium Hajj flight package with excellent service',
        required: false,
    })
    @IsString()
    @IsOptional()
    description_en?: string;

    @ApiProperty({
        description: 'Flight description in Arabic',
        example: 'باقة رحلة حج متميزة مع خدمة ممتازة',
        required: false,
    })
    @IsString()
    @IsOptional()
    description_ar?: string;

    @ApiProperty({
        description: 'Flight description in French',
        example: 'Forfait de vol Hajj premium avec un excellent service',
        required: false,
    })
    @IsString()
    @IsOptional()
    description_fr?: string;

    @ApiProperty({
        description: 'Departure date',
        example: '2024-06-15',
    })
    @IsDateString()
    @IsNotEmpty()
    going_date: Date;

    @ApiProperty({
        description: 'Return date',
        example: '2024-06-30',
    })
    @IsDateString()
    @IsNotEmpty()
    return_date: Date;

    @ApiProperty({
        description: 'Flight type',
        enum: ['hajj', 'umrah'],
        example: 'hajj',
    })
    @IsEnum(['hajj', 'umrah'])
    @IsNotEmpty()
    type: string;

    @ApiProperty({
        description: 'Whether the flight is recommended',
        example: false,
        required: false,
        default: false,
    })
    @IsBoolean()
    @IsOptional()
    is_recommended?: boolean;

    @ApiProperty({
        description: 'Category ID',
        example: 1,
    })
    @IsNumber()
    @IsNotEmpty()
    category_id: number;

    @ApiProperty({
        description: 'Airline ID',
        example: 1,
    })
    @IsNumber()
    @IsNotEmpty()
    airline_id: number;
}
