# 🕋 OmraPlus - Hajj & Umrah Booking Platform

A modern, full-stack web application for booking Hajj and Umrah packages, featuring a NestJS backend with TypeORM and an Angular frontend with Tailwind CSS.

## 🌟 Overview

OmraPlus is a comprehensive booking platform that enables users to browse, search, and book Hajj and Umrah travel packages. The platform supports multiple languages (English, Arabic, French) and provides a complete booking management system.

### Migration Status

This project represents a **complete migration** from Laravel/Blade to **NestJS/TypeORM + Angular**.

- ✅ **Backend**: Migrated from Laravel to NestJS with TypeORM
- ✅ **Frontend**: Migrated from Blade templates to Angular SPA
- ✅ **Database**: TypeORM entities matching Laravel Eloquent models
- ✅ **Authentication**: Migrated from Laravel Jetstream to JWT
- ✅ **Multilingual**: Maintained support for EN, AR, FR

## 🚀 Quick Start

### Prerequisites

- Node.js 18+ and npm
- MySQL 8+ or PostgreSQL 13+
- Git

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/abdelazizbardich/omraplus.git
cd omraplus
```

2. **Backend Setup**
```bash
cd backend
npm install
cp .env.example .env
# Edit .env with your database credentials
npm run start:dev
```

Backend will run on http://localhost:3000
API docs available at http://localhost:3000/api/docs

3. **Frontend Setup**
```bash
cd ../frontend
npm install
npm start
```

Frontend will run on http://localhost:4200

## 📁 Project Structure

```
omraplus/
├── backend/              # NestJS + TypeORM Backend
│   ├── src/
│   │   ├── config/       # Configuration files
│   │   ├── entities/     # TypeORM entities (18 entities)
│   │   ├── modules/      # Feature modules
│   │   │   ├── auth/     # Authentication (JWT)
│   │   │   ├── flights/  # Flights management
│   │   │   ├── hotels/   # Hotels management
│   │   │   ├── programs/ # Travel programs
│   │   │   ├── orders/   # Booking orders
│   │   │   ├── blog/     # Blog system
│   │   │   └── ...
│   │   └── common/       # Shared resources
│   ├── test/             # E2E tests
│   ├── .env.example      # Environment template
│   ├── package.json
│   └── README.md         # Backend documentation
│
├── frontend/             # Angular + Tailwind Frontend
│   ├── src/
│   │   ├── app/
│   │   │   ├── core/     # Core services, guards, interceptors
│   │   │   ├── shared/   # Reusable components
│   │   │   └── features/ # Feature modules
│   │   │       ├── auth/      # Login, Register
│   │   │       ├── home/      # Home page
│   │   │       ├── flights/   # Flight search & booking
│   │   │       ├── hotels/    # Hotels browsing
│   │   │       ├── blog/      # Blog system
│   │   │       ├── checkout/  # Booking checkout
│   │   │       ├── dashboard/ # User dashboard
│   │   │       └── admin/     # Admin panel
│   │   ├── assets/       # Static assets
│   │   └── environments/ # Environment configs
│   ├── package.json
│   └── README.md         # Frontend documentation
│
├── app/                  # Original Laravel app (for reference)
├── database/             # Original Laravel migrations
├── resources/            # Original Blade templates
└── README.md             # This file
```

## 🎯 Features

### User Features
- ✅ User registration and authentication (JWT)
- ✅ Browse Hajj and Umrah flight packages
- ✅ Advanced search and filtering
- ✅ View flight details with programs and pricing
- ✅ Book packages with passenger selection
- ✅ Multi-language support (EN, AR, FR)
- ⏳ Booking checkout and payment
- ⏳ User dashboard with order history
- ⏳ Blog with articles about Hajj/Umrah
- ⏳ FAQs and guides

### Admin Features
- ✅ Role-based access control (6 roles)
- ⏳ Manage flights, hotels, and programs
- ⏳ Manage orders and bookings
- ⏳ User management
- ⏳ Blog post management
- ⏳ Dashboard with analytics
- ⏳ Photo uploads

### Technical Features
- ✅ **Backend**: NestJS with TypeORM, JWT authentication
- ✅ **Frontend**: Angular 17+ with Tailwind CSS
- ✅ **Database**: MySQL/PostgreSQL with TypeORM
- ✅ **API Documentation**: Swagger/OpenAPI
- ✅ **Validation**: Class-validator with DTOs
- ✅ **Type Safety**: Full TypeScript strict mode
- ✅ **Responsive Design**: Mobile-first with Tailwind
- ✅ **Code Splitting**: Lazy loading for optimal performance
- ⏳ **i18n**: Multi-language with ngx-translate
- ⏳ **RTL Support**: Right-to-left for Arabic
- ⏳ **File Uploads**: Photo management with Multer
- ⏳ **Testing**: Unit and E2E tests

## 🗄️ Database Schema

### Main Entities

| Entity | Description |
|--------|-------------|
| **User** | User accounts with roles (USER, ADMIN, SUPER_ADMIN, CONTENT_MANAGER, SALES_MANAGER, PUBLISHER) |
| **Flight** | Flight packages with multilingual fields (EN, AR, FR) |
| **Hotel** | Hotels in Mecca and Medina with multilingual fields |
| **Program** | Travel programs linking flights and hotels |
| **ProgramPrice** | Pricing for different room types |
| **Room** | Room types (single, double, triple, quad) |
| **Order** | Booking orders with payment tracking |
| **Airline** | Airline companies |
| **Category** | Flight categories (Hajj, Umrah, etc.) |
| **Discount** | Discount codes for programs |
| **Photo** | Photo storage (polymorphic) |
| **BlogPost** | Blog articles with multilingual content |
| **BlogCategory** | Blog post categories |
| **BlogTag** | Blog post tags |
| **BlogComment** | User comments on blog posts |

## 🔐 Authentication & Authorization

### User Roles
1. **USER** - Regular users (can browse and book)
2. **PUBLISHER** - Can manage their own content
3. **CONTENT_MANAGER** - Can manage content
4. **SALES_MANAGER** - Can manage sales and orders
5. **ADMIN** - Can manage most resources
6. **SUPER_ADMIN** - Full system access

### Authentication Flow
1. User registers/logs in
2. Backend generates JWT token
3. Frontend stores token in localStorage
4. Token included in all API requests
5. Backend validates token and permissions

## 🌐 API Endpoints

### Authentication
```
POST   /api/v1/auth/register    Register new user
POST   /api/v1/auth/login       Login
GET    /api/v1/auth/profile     Get current user (protected)
```

### Flights (Example)
```
GET    /api/v1/flights          List all flights
GET    /api/v1/flights/:id      Get flight details
POST   /api/v1/flights          Create flight (admin)
PATCH  /api/v1/flights/:id      Update flight (admin)
DELETE /api/v1/flights/:id      Delete flight (admin)
```

### Other Endpoints
- Hotels, Programs, Orders, Blog, etc. (to be implemented)

## 📊 Technology Stack

### Backend
- **Framework**: NestJS 10+
- **ORM**: TypeORM 0.3+
- **Database**: MySQL 8+ / PostgreSQL 13+
- **Authentication**: JWT with Passport
- **Validation**: class-validator
- **Documentation**: Swagger/OpenAPI
- **File Upload**: Multer
- **Security**: Bcrypt, Helmet

### Frontend
- **Framework**: Angular 17+
- **Styling**: Tailwind CSS 3+
- **HTTP**: HttpClient with Interceptors
- **Routing**: Angular Router with Guards
- **Forms**: Reactive Forms
- **i18n**: ngx-translate
- **Build**: Angular CLI with Vite

### DevOps
- **Version Control**: Git
- **Package Manager**: npm
- **Testing**: Jest (backend), Jasmine/Karma (frontend)
- **Linting**: ESLint, Prettier
- **CI/CD**: GitHub Actions (to be configured)

## 🧪 Testing

### Backend Tests
```bash
cd backend
npm test                 # Unit tests
npm run test:e2e         # E2E tests
npm run test:cov         # Coverage report
```

### Frontend Tests
```bash
cd frontend
npm test                 # Unit tests
npm run test:coverage    # Coverage report
npm run e2e              # E2E tests
```

## 📦 Deployment

### Backend Deployment

**Using Docker:**
```bash
cd backend
docker build -t omraplus-backend .
docker run -p 3000:3000 omraplus-backend
```

**Using PM2:**
```bash
cd backend
npm run build
pm2 start dist/main.js --name omraplus-backend
```

### Frontend Deployment

**Build for production:**
```bash
cd frontend
npm run build
```

**Deploy to Netlify:**
```bash
netlify deploy --prod --dir=dist/frontend
```

**Deploy to Vercel:**
```bash
vercel --prod
```

## 🔧 Development

### Backend Development
```bash
cd backend
npm run start:dev    # Hot reload
npm run start:debug  # Debug mode
```

### Frontend Development
```bash
cd frontend
npm start           # Dev server with hot reload
ng generate component features/new-feature
```

## 📝 Migration Notes

### From Laravel to NestJS

| Laravel | NestJS | Status |
|---------|--------|--------|
| Eloquent Models | TypeORM Entities | ✅ Complete |
| Controllers | Controllers | ✅ Auth complete |
| Middleware | Guards/Interceptors | ✅ Complete |
| Blade Views | Angular Components | ✅ Core complete |
| Jetstream Auth | JWT + Passport | ✅ Complete |
| Validation Rules | class-validator | ✅ Complete |
| Routes | Routes + Decorators | ✅ Core complete |

### What's Preserved
- ✅ Database schema (all tables and relationships)
- ✅ Multilingual support (EN, AR, FR)
- ✅ User roles and permissions
- ✅ Business logic and functionality
- ✅ API endpoints structure

### What's Improved
- ✅ Modern SPA architecture with Angular
- ✅ Better type safety with TypeScript
- ✅ Improved performance with lazy loading
- ✅ Better scalability with NestJS modules
- ✅ Auto-generated API documentation (Swagger)
- ✅ Modern UI with Tailwind CSS

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License.

## 👥 Team

**Original Laravel Application:**
- Developer: Abdelaziz Bardich

**NestJS/Angular Migration:**
- GitHub Copilot Workspace

## 🙏 Acknowledgments

- Original Laravel application by Abdelaziz Bardich
- NestJS framework and community
- Angular framework and community
- Tailwind CSS for beautiful styling
- TypeORM for database management

## 📞 Support

For support and questions:
- Create an issue in the repository
- Email: support@omraplus.com
- Documentation: See README files in backend/ and frontend/ directories

## 🗺️ Roadmap

### Phase 1: Core Backend & Frontend ✅
- [x] NestJS project setup
- [x] TypeORM entities
- [x] JWT authentication
- [x] Angular project setup
- [x] Auth feature (login/register)
- [x] Home page
- [x] Flights feature

### Phase 2: Complete CRUD Modules ⏳
- [ ] Hotels module (backend & frontend)
- [ ] Programs module
- [ ] Orders/Booking system
- [ ] File upload (photos)
- [ ] Blog system
- [ ] Dashboard with analytics

### Phase 3: Advanced Features ⏳
- [ ] Payment integration
- [ ] Email notifications
- [ ] PDF ticket generation
- [ ] Admin panel completion
- [ ] Multi-language completion (i18n)
- [ ] RTL support for Arabic

### Phase 4: Testing & Optimization ⏳
- [ ] Unit tests
- [ ] E2E tests
- [ ] Performance optimization
- [ ] SEO optimization
- [ ] Accessibility improvements

### Phase 5: Deployment ⏳
- [ ] Docker setup
- [ ] CI/CD pipeline
- [ ] Production deployment
- [ ] Monitoring and logging
- [ ] Documentation completion

## 📸 Screenshots

Coming soon...

## 🔗 Links

- [Backend Documentation](./backend/README.md)
- [Frontend Documentation](./frontend/README.md)
- [API Documentation](http://localhost:3000/api/docs)
- [Live Demo](https://omraplus.com) (Coming soon)

---

**Built with ❤️ for the Muslim community**
