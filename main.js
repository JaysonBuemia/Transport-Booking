import { Component } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
  showLocation = false;
  location = '';
  destination = '';

  toggleLocationVisibility() {
    this.showLocation = !this.showLocation;
  }

  submitForm() {
    console.log(`Location: ${this.location}, Destination: ${this.destination}`);
  }
}
