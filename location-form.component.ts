import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';  
import { HttpClient } from '@angular/common/http';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-location-form',
  templateUrl: './location-form.component.html',
  styleUrls: ['./location-form.component.css'],
  standalone: true,
  imports: [CommonModule, FormsModule], // Include FormsModule here
})
export class LocationFormComponent {
  recommendedLocations: any[] = []; // Ensure this is typed as an array
  isLocationVisible: boolean = true; // Add a boolean to toggle visibility
  location: string = '';
  destination: string = '';

  constructor(private http: HttpClient) {
    this.fetchRecommendedLocations();
  }

  // Method to toggle visibility of location input
  toggleLocation(): void {
    this.isLocationVisible = !this.isLocationVisible;
  }

  fetchRecommendedLocations(): void {
    const url = ''; // Put your API endpoint here
    
    this.http.get<any[]>(url).subscribe(
      (data) => {
        this.recommendedLocations = data;
      },
      (error) => {
        console.error('Error fetching recommended locations:', error);
      }
    );
  }

  // Method to handle form submission
  submitForm(): void {
    console.log(`Location: ${this.location}, Destination: ${this.destination}`);
  }
}
