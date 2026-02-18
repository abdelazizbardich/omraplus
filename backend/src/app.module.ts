import { Module } from '@nestjs/common';
import { ConfigModule, ConfigService } from '@nestjs/config';
import { TypeOrmModule } from '@nestjs/typeorm';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { AuthModule } from './modules/auth/auth.module';
import {
    User,
    Airline,
    Category,
    Flight,
    Hotel,
    Room,
    Program,
    ProgramPrice,
    Discount,
    Order,
    Photo,
    BlogPost,
    BlogCategory,
    BlogTag,
    BlogComment,
    BlogPostCategory,
    BlogPostTag,
} from './entities';

@Module({
    imports: [
        ConfigModule.forRoot({
            isGlobal: true,
            envFilePath: '.env',
        }),
        TypeOrmModule.forRootAsync({
            imports: [ConfigModule],
            useFactory: (configService: ConfigService) => ({
                type: 'mysql',
                host: configService.get('DB_HOST') || 'localhost',
                port: configService.get('DB_PORT') || 3306,
                username: configService.get('DB_USERNAME') || 'root',
                password: configService.get('DB_PASSWORD') || '',
                database: configService.get('DB_DATABASE') || 'omraplus',
                entities: [
                    User,
                    Airline,
                    Category,
                    Flight,
                    Hotel,
                    Room,
                    Program,
                    ProgramPrice,
                    Discount,
                    Order,
                    Photo,
                    BlogPost,
                    BlogCategory,
                    BlogTag,
                    BlogComment,
                    BlogPostCategory,
                    BlogPostTag,
                ],
                synchronize: configService.get('NODE_ENV') !== 'production',
                logging: configService.get('NODE_ENV') === 'development',
            }),
            inject: [ConfigService],
        }),
        AuthModule,
    ],
    controllers: [AppController],
    providers: [AppService],
})
export class AppModule {}
