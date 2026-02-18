import { Routes } from '@angular/router';

export const routes: Routes = [
  {
    path: '',
    loadChildren: () => import('./features/home/home.module').then(m => m.HomeModule)
  },
  {
    path: 'login',
    loadChildren: () => import('./features/auth/auth.module').then(m => m.AuthModule)
  },
  {
    path: 'register',
    loadChildren: () => import('./features/auth/auth.module').then(m => m.AuthModule)
  },
  {
    path: 'flights',
    loadChildren: () => import('./features/flights/flights.module').then(m => m.FlightsModule)
  },
  {
    path: '**',
    redirectTo: '',
    pathMatch: 'full'
  }
];
