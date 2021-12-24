import { Component } from '@angular/core';

@Component({ // aca indicamos que esto es un componente
  selector: 'app-root', // un componente tiene definido su propio selector. selector == etiqueta HTML. No pueden existir 2 componentes con el mismo nombre de selector.
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'sistema-de-reporte-de-incidentes'; // atributo del objeto
}

// componente (como minimo):
// 1 html
// 1 css
// 1 ts 