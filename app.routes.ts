import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LocationComponent } from '../location/location.component';
import { ContactComponent } from './app/contact/contact.component';
//import { AppComponent } from './app.component';
//import { LocationFormComponent } from './location/location-form.component'; // Your location component

export const routes: Routes = [
  { path: '', 
    redirectTo: 'contact', 
    pathMatch: 'full' 
  },
  //{ path: '', 
    //component: '',
    //AppComponent: ''},
  { 
    path: 'contact', 
    component:ContactComponent
  },
  { path: 'location', 
    component:LocationComponent
  },
  
];

//export { routes };

//@NgModule({
  //imports: [RouterModule.forRoot(routes)],
  //exports: [RouterModule],
//})

//export class AppRoutingModule {}
