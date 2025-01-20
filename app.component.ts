import { Component, AfterViewInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { LocationComponent } from "./app.isLocationVisible";
@Component({
  selector: 'app-root',
  standalone: true,
  imports: [FormsModule, LocationComponent],
  templateUrl: 'app.component.html',
  styleUrls: ['./app.component.css'],
  schemas: [CUSTOM_ELEMENTS_SCHEMA],
})
export class AppComponent implements AfterViewInit {
  location: string = '';
  destination: string = '';
  isLocationAvailable = true;
  isLocationVisible = true;


  toggleLocation() {
    if (this.isLocationAvailable || this.location){
    this.isLocationVisible = !this.isLocationVisible;
  } else {
      alert('The location not enabled, please open your location and try again');
  }
  }

  getLocationFromGPS(){
    if (navigator.geolocation){
      navigator.geolocation.getCurrentPosition(
      (position) => {
        this.location = `${position.coords.latitude}, ${position.coords.longitude}`;
        this.isLocationAvailable = true;
        console.log('Location detected', this.location);
      },

    (error)=> {
        console.error('Failed to get location', error.message);
        alert('unable to retrieve location');
      }
  );

  }else{
  console.log('geolocation are not supported by your browser')
  }
}

  submitForm() {
    console.log(`Location: ${this.location}, Destination: ${this.destination}`);
  }


  ngAfterViewInit() {
    this.getLocationFromGPS();
  }
}
