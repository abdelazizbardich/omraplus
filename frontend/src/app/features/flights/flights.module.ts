import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ReactiveFormsModule } from '@angular/forms';
import { FlightsRoutingModule } from './flights-routing.module';

@NgModule({
  imports: [
    CommonModule,
    ReactiveFormsModule,
    FlightsRoutingModule
  ]
})
export class FlightsModule { }
