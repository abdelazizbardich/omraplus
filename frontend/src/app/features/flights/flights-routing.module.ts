import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { FlightListComponent } from './flight-list/flight-list.component';
import { FlightDetailComponent } from './flight-detail/flight-detail.component';

const routes: Routes = [
  {
    path: '',
    component: FlightListComponent,
    title: 'Flights | Omra Plus'
  },
  {
    path: ':id',
    component: FlightDetailComponent,
    title: 'Flight Details | Omra Plus'
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class FlightsRoutingModule { }
