import * as core from '@angular/core';

@core.Component({
  selector: 'app-location-form',
  templateUrl: './app.component.html',

})
export class LocationComponent implements LocationComponent {
  // State for controlling the visibility of the container
  isLocationVisible = true;

  // Model properties for location and destination
  location: string = '';
  destination: string = '';

  // Method to toggle the visibility of the container
  toggleLocation(): void {
    this.isLocationVisible = !this.isLocationVisible;
  }

  // Method to handle form submission
  submitForm(): void {
    console.log(`Location: ${this.location}, Destination: ${this.destination}`);
    // You can handle actual form submission here (e.g., send to a server)
  }
}
