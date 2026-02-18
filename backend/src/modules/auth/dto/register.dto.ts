import { ApiProperty, ApiPropertyOptional } from '@nestjs/swagger';
import {
    IsEmail,
    IsNotEmpty,
    IsString,
    MinLength,
    IsOptional,
    MaxLength,
} from 'class-validator';

export class RegisterDto {
    @ApiProperty({
        description: 'User full name',
        example: 'John Doe',
    })
    @IsString()
    @IsNotEmpty({ message: 'Name is required' })
    @MaxLength(255, { message: 'Name must not exceed 255 characters' })
    name: string;

    @ApiProperty({
        description: 'User email address',
        example: 'user@example.com',
    })
    @IsEmail({}, { message: 'Please provide a valid email address' })
    @IsNotEmpty({ message: 'Email is required' })
    @MaxLength(255, { message: 'Email must not exceed 255 characters' })
    email: string;

    @ApiProperty({
        description: 'User password',
        example: 'password123',
        minLength: 6,
    })
    @IsString()
    @IsNotEmpty({ message: 'Password is required' })
    @MinLength(6, { message: 'Password must be at least 6 characters long' })
    @MaxLength(255, { message: 'Password must not exceed 255 characters' })
    password: string;

    @ApiPropertyOptional({
        description: 'User first name',
        example: 'John',
    })
    @IsOptional()
    @IsString()
    @MaxLength(255, { message: 'First name must not exceed 255 characters' })
    first_name?: string;

    @ApiPropertyOptional({
        description: 'User last name',
        example: 'Doe',
    })
    @IsOptional()
    @IsString()
    @MaxLength(255, { message: 'Last name must not exceed 255 characters' })
    last_name?: string;

    @ApiPropertyOptional({
        description: 'User city',
        example: 'New York',
    })
    @IsOptional()
    @IsString()
    @MaxLength(255, { message: 'City must not exceed 255 characters' })
    city?: string;

    @ApiPropertyOptional({
        description: 'User phone number',
        example: '+1234567890',
    })
    @IsOptional()
    @IsString()
    @MaxLength(50, { message: 'Phone must not exceed 50 characters' })
    phone?: string;

    @ApiPropertyOptional({
        description: 'User job title',
        example: 'Software Engineer',
    })
    @IsOptional()
    @IsString()
    @MaxLength(255, { message: 'Job must not exceed 255 characters' })
    job?: string;
}
