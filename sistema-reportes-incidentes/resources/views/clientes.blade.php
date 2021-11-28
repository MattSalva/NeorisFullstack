@include('header')
<div>
    <h1>{{$titulo}}</h1>
</div>

<div>
    <label>Ingrese su metodo de busqueda (por CUIT o Razon Social)</label>
    <form method="get" action="{{route('clientes.index')}}">
        <input name="razon_social">
        <input name="cuit">
        <button type="submit">Enviar</button>
    </form>
</div>

<div>
    <table>
        <thead>
        <tr>
            <th>Razon social</th>
            <th>CUIT</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clientes as $unCliente)
                <tr>
                    <td>{{$unCliente->razon_social}}</td>
                    <td>{{$unCliente->cuit}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="clientes/create">Crear nuevo cliente</a>

</div>
