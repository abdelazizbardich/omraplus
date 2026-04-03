# OmraPlus Backend - NestJS API

A complete, production-ready NestJS backend for the OmraPlus application with TypeORM, JWT authentication, and comprehensive entity relationships.

## 🚀 Features

- **Authentication & Authorization**
  - JWT-based authentication
  - Role-based access control (RBAC)
  - User registration and login
  - Password hashing with bcrypt
  - Protected routes with guards

- **Database Entities**
  - Users with role management
  - Airlines and Flights
  - Hotels and Rooms
  - Programs (Umrah/Hajj packages)
  - Orders and Payments
  - Blog system with categories, tags, and comments
  - Full relational mappings

- **API Documentation**
  - Swagger/OpenAPI documentation
  - Auto-generated from decorators
  - Interactive API testing

- **Code Quality**
  - TypeScript strict mode
  - ESLint with TypeScript rules
  - Prettier formatting
  - Validation pipes with class-validator

## 📋 Prerequisites

- Node.js (v18 or higher)
- npm or yarn
- MySQL database

## 🛠️ Installation

1. **Install dependencies**
   ```bash
   npm install
   ```

2. **Configure environment**
   ```bash
   cp .env.example .env
   ```

3. **Update .env file with your configuration**
   ```env
   DB_HOST=localhost
   DB_PORT=3306
   DB_USERNAME=root
   DB_PASSWORD=your_password
   DB_DATABASE=omraplus
   JWT_SECRET=your-secret-key
   ```

## 🚦 Running the Application

### Development Mode
```bash
npm run start:dev
```

### Production Mode
```bash
npm run build
npm run start:prod
```

### Debug Mode
```bash
npm run start:debug
```

## 📚 API Documentation

Once the application is running, access the Swagger documentation at:
- **URL**: `http://localhost:3000/api/docs`

## 🔑 Authentication

### Register a new user
```bash
POST /auth/register
Content-Type: application/json

{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123"
}
```

### Login
```bash
POST /auth/login
Content-Type: application/json

{
  "email": "john@example.com",
  "password": "password123"
}
```

### Get Profile (Protected)
```bash
GET /auth/profile
Authorization: Bearer YOUR_JWT_TOKEN
```

## 📁 Project Structure

```
backend/src/
├── common/
│   └── decorators/           # Custom decorators
│       ├── current-user.decorator.ts
│       └── roles.decorator.ts
├── config/                   # Configuration files
│   ├── app.config.ts
│   ├── database.config.ts
│   └── jwt.config.ts
├── entities/                 # TypeORM entities
│   ├── user.entity.ts
│   ├── user-role.enum.ts
│   ├── airline.entity.ts
│   ├── flight.entity.ts
│   ├── hotel.entity.ts
│   ├── room.entity.ts
│   ├── category.entity.ts
│   ├── program.entity.ts
│   ├── program-price.entity.ts
│   ├── order.entity.ts
│   ├── discount.entity.ts
│   ├── photo.entity.ts
│   ├── blog-post.entity.ts
│   ├── blog-category.entity.ts
│   ├── blog-tag.entity.ts
│   ├── blog-comment.entity.ts
│   ├── blog-post-category.entity.ts
│   ├── blog-post-tag.entity.ts
│   └── index.ts
├── modules/
│   └── auth/                 # Authentication module
│       ├── dto/
│       │   ├── login.dto.ts
│       │   └── register.dto.ts
│       ├── guards/
│       │   ├── jwt-auth.guard.ts
│       │   └── roles.guard.ts
│       ├── strategies/
│       │   └── jwt.strategy.ts
│       ├── auth.controller.ts
│       ├── auth.service.ts
│       └── auth.module.ts
├── app.module.ts
└── main.ts
```

## 🎭 User Roles

The application supports the following user roles:
- **USER**: Regular user (default)
- **ADMIN**: Administrator
- **SUPER_ADMIN**: Super administrator
- **CONTENT_MANAGER**: Content management
- **SALES_MANAGER**: Sales management
- **PUBLISHER**: Publishing rights

### Using Roles

```typescript
import { Roles } from './common/decorators/roles.decorator';
import { UserRole } from './entities/user-role.enum';
import { RolesGuard } from './modules/auth/guards/roles.guard';

@Get('admin-only')
@UseGuards(JwtAuthGuard, RolesGuard)
@Roles(UserRole.ADMIN, UserRole.SUPER_ADMIN)
async adminRoute() {
  // Only admins can access this
}
```

## 🗄️ Database Schema

The application includes the following main entities:

- **Users**: User accounts with authentication
- **Airlines**: Airline companies
- **Flights**: Flight information
- **Hotels**: Hotel properties
- **Rooms**: Hotel rooms
- **Categories**: Program categories
- **Programs**: Umrah/Hajj packages
- **ProgramPrices**: Pricing tiers for programs
- **Orders**: Customer orders
- **Discounts**: Discount codes
- **Photos**: Program photos
- **BlogPosts**: Blog articles
- **BlogCategories**: Blog categorization
- **BlogTags**: Blog tagging system
- **BlogComments**: Blog comments

## 🧪 Testing

```bash
# Unit tests
npm run test

# E2E tests
npm run test:e2e

# Test coverage
npm run test:cov
```

## 🔍 Linting & Formatting

```bash
# Run linter
npm run lint

# Format code
npm run format
```

## 🏗️ Building for Production

```bash
npm run build
```

The compiled output will be in the `dist/` directory.

## 🌐 CORS Configuration

CORS is configured in `main.ts`. By default, it accepts all origins in development:

```typescript
app.enableCors({
  origin: process.env.FRONTEND_URL || '*',
  credentials: true,
});
```

## 🔒 Security Best Practices

- JWT tokens expire after 24 hours
- Passwords are hashed using bcrypt
- Input validation on all endpoints
- Role-based access control
- SQL injection protection via TypeORM

## 📝 Environment Variables

| Variable | Description | Default |
|----------|-------------|---------|
| `NODE_ENV` | Environment mode | development |
| `PORT` | Server port | 3000 |
| `FRONTEND_URL` | Frontend URL for CORS | * |
| `DB_HOST` | Database host | localhost |
| `DB_PORT` | Database port | 3306 |
| `DB_USERNAME` | Database username | root |
| `DB_PASSWORD` | Database password | empty |
| `DB_DATABASE` | Database name | omraplus |
| `JWT_SECRET` | JWT secret key | your-secret-key |
| `JWT_EXPIRES_IN` | JWT expiration | 24h |

## 📄 License

This project is licensed under the UNLICENSED license.

---

## NestJS Resources

Check out a few resources that may come in handy when working with NestJS:

- Visit the [NestJS Documentation](https://docs.nestjs.com) to learn more about the framework.
- For questions and support, please visit our [Discord channel](https://discord.gg/G7Qnnhy).
- To dive deeper and get more hands-on experience, check out our official video [courses](https://courses.nestjs.com/).

Nest is [MIT licensed](https://github.com/nestjs/nest/blob/master/LICENSE).
