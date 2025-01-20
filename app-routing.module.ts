import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component'; // Import your component(s)
import { LocationFormComponent } from './location/location-form.component'; // Example of another component

// Define your routes
const routes: Routes = [
  { path: '', component: AppComponent }, // Default route
  { path: 'location', component: LocationFormComponent }, // Example of another route
  { path: '**', redirectTo: '' }, // Wildcard route (404 page, for example)
];

@NgModule({
  imports: [RouterModule.forRoot(routes)], // Set up the router with your routes
  exports: [RouterModule], // Export the RouterModule to make the router directives available
})
export class AppRoutingModule {}
