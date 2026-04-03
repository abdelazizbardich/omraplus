import {
    IsEmail,
    IsNotEmpty,
    IsString,
    MinLength,
    IsOptional,
    IsDateString,
} from 'class-validator';
import { ApiProperty, ApiPropertyOptional } from '@nestjs/swagger';

export class RegisterDto {
    @ApiProperty({ example: 'John Doe' })
    @IsString()
    @IsNotEmpty()
    name: string;

    @ApiProperty({ example: 'user@example.com' })
    @IsEmail()
    @IsNotEmpty()
    email: string;

    @ApiProperty({ example: 'password123' })
    @IsString()
    @IsNotEmpty()
    @MinLength(6)
    password: string;

    @ApiPropertyOptional({ example: '+1234567890' })
    @IsString()
    @IsOptional()
    phone?: string;

    @ApiPropertyOptional({ example: '123 Main St' })
    @IsString()
    @IsOptional()
    address?: string;

    @ApiPropertyOptional({ example: 'New York' })
    @IsString()
    @IsOptional()
    city?: string;

    @ApiPropertyOptional({ example: 'USA' })
    @IsString()
    @IsOptional()
    country?: string;

    @ApiPropertyOptional({ example: '10001' })
    @IsString()
    @IsOptional()
    postal_code?: string;

    @ApiPropertyOptional({ example: 'AB123456' })
    @IsString()
    @IsOptional()
    passport_number?: string;

    @ApiPropertyOptional({ example: '2025-12-31' })
    @IsDateString()
    @IsOptional()
    passport_expiry?: string;

    @ApiPropertyOptional({ example: '1990-01-01' })
    @IsDateString()
    @IsOptional()
    date_of_birth?: string;

    @ApiPropertyOptional({ example: 'male' })
    @IsString()
    @IsOptional()
    gender?: string;
}
