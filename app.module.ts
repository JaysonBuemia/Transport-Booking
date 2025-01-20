import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { CommonModule } from '@angular/common'; // Common Angular directives like ngIf, ngFor
import { AppRoutingModule } from './app-routing.module'; // Import AppRoutingModule

@NgModule({
  imports: [
    BrowserModule,  // Required for browser-based apps
    CommonModule,   // Common Angular directives
    AppRoutingModule, // Import AppRoutingModule for routing configuration
  ],
  providers: [],
  bootstrap: [],
})
export class AppModule {}
