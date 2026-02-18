# 🚀 Quick Start Guide - OmraPlus

## Prerequisites

- Node.js 18+ installed
- MySQL 8+ running (or PostgreSQL 13+)
- Ports 3000 (backend) and 4200 (frontend) available

## 1. Start the Backend (NestJS)

```bash
# Navigate to backend
cd /home/runner/work/omraplus/omraplus/backend

# Install dependencies (if not already done)
npm install

# Configure database
# Edit .env file with your MySQL credentials:
nano .env
# Set: DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD, DB_DATABASE

# Start the backend server
npm run start:dev

# Backend will be available at:
# API: http://localhost:3000
# Swagger Docs: http://localhost:3000/api/docs
```

## 2. Start the Frontend (Angular)

Open a new terminal:

```bash
# Navigate to frontend
cd /home/runner/work/omraplus/omraplus/frontend

# Install dependencies (if not already done)
npm install

# Start the development server
npm start

# Frontend will be available at:
# App: http://localhost:4200
```

## 3. Test the Application

### Register a New User
1. Go to http://localhost:4200/register
2. Fill in the registration form
3. Submit

### Login
1. Go to http://localhost:4200/login
2. Enter your credentials
3. Login

### Browse Flights
1. Go to http://localhost:4200
2. View featured flights on home page
3. Click "Browse Flights" or navigate to /flights
4. Search and filter flights
5. Click on a flight to see details

### API Documentation
1. Go to http://localhost:3000/api/docs
2. Explore all available endpoints
3. Try out API calls directly from Swagger UI

## 4. Development Workflow

### Backend Development
```bash
cd backend

# Start with hot reload
npm run start:dev

# Run tests
npm test

# Build for production
npm run build
```

### Frontend Development
```bash
cd frontend

# Start with hot reload
npm start

# Generate new component
ng generate component features/my-feature

# Run tests
npm test

# Build for production
npm run build
```

## 5. Database Setup

### Create Database
```sql
CREATE DATABASE omraplus CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### TypeORM will automatically create tables on first run (development mode)

## 6. Environment Variables

### Backend (.env)
```env
DB_HOST=localhost
DB_PORT=3306
DB_USERNAME=root
DB_PASSWORD=your_password
DB_DATABASE=omraplus

JWT_SECRET=your-secret-key-change-this
JWT_EXPIRATION=7d

PORT=3000
NODE_ENV=development
CORS_ORIGIN=http://localhost:4200
```

### Frontend (environment.ts)
```typescript
export const environment = {
  production: false,
  apiUrl: 'http://localhost:3000/api/v1',
};
```

## 7. Common Issues

### Port Already in Use
```bash
# Backend (change port in .env)
PORT=3001

# Frontend
ng serve --port 4201
```

### Database Connection Error
- Check MySQL is running
- Verify credentials in .env
- Ensure database exists

### Module Not Found
```bash
# Clear and reinstall
rm -rf node_modules package-lock.json
npm install
```

## 8. API Endpoints

### Authentication
- POST `/api/v1/auth/register` - Register
- POST `/api/v1/auth/login` - Login
- GET `/api/v1/auth/profile` - Get profile (protected)

### More endpoints coming soon...

## 9. Default Users

Create a super admin user through the register endpoint, then update in database:
```sql
UPDATE users SET role = 'super_admin' WHERE email = 'your@email.com';
```

## 10. Next Steps

- Explore the codebase
- Read MIGRATION.md for architecture details
- Check backend/README.md for backend docs
- Check frontend/README.md for frontend docs
- Start implementing remaining features!

---

**Happy coding! 🚀**
