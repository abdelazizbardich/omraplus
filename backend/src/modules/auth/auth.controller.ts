import {
    Controller,
    Post,
    Body,
    Get,
    UseGuards,
    HttpCode,
    HttpStatus,
    ClassSerializerInterceptor,
    UseInterceptors,
} from '@nestjs/common';
import {
    ApiTags,
    ApiOperation,
    ApiResponse,
    ApiBearerAuth,
} from '@nestjs/swagger';
import { AuthService } from './auth.service';
import { RegisterDto } from './dto/register.dto';
import { LoginDto } from './dto/login.dto';
import { JwtAuthGuard } from './guards/jwt-auth.guard';
import { CurrentUser } from '../../common/decorators/current-user.decorator';
import { User } from '../../entities/user.entity';

@ApiTags('Authentication')
@Controller('auth')
@UseInterceptors(ClassSerializerInterceptor)
export class AuthController {
    constructor(private readonly authService: AuthService) {}

    @Post('register')
    @ApiOperation({ summary: 'Register a new user' })
    @ApiResponse({
        status: 201,
        description: 'User successfully registered',
    })
    @ApiResponse({
        status: 409,
        description: 'Email already exists',
    })
    async register(@Body() registerDto: RegisterDto): Promise<User> {
        return await this.authService.register(registerDto);
    }

    @Post('login')
    @HttpCode(HttpStatus.OK)
    @ApiOperation({ summary: 'Login and get JWT token' })
    @ApiResponse({
        status: 200,
        description: 'Login successful',
        schema: {
            properties: {
                access_token: { type: 'string' },
            },
        },
    })
    @ApiResponse({
        status: 401,
        description: 'Invalid credentials',
    })
    async login(@Body() loginDto: LoginDto): Promise<{ access_token: string }> {
        return await this.authService.login(loginDto);
    }

    @Get('profile')
    @UseGuards(JwtAuthGuard)
    @ApiBearerAuth()
    @ApiOperation({ summary: 'Get current user profile' })
    @ApiResponse({
        status: 200,
        description: 'User profile retrieved successfully',
    })
    @ApiResponse({
        status: 401,
        description: 'Unauthorized',
    })
    getProfile(@CurrentUser() user: User): User {
        return user;
    }
}
