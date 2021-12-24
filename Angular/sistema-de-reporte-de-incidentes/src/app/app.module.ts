import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

@NgModule({
  declarations: [
    AppComponent // Componentes que prertenecen a este modulo
  ],
  imports: [
    BrowserModule,
    AppRoutingModule // Router es un modulo en particular
  ],
  providers: [],
  bootstrap: [AppComponent] // El componente principal de app module
})
export class AppModule { } // AppModule: Modulo raiz de Angular. No se puede borrar, se ejecuta en primer lugar.
