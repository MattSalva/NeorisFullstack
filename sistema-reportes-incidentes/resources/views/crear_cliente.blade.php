@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    <form method="post" action="{{route('clientes.store')}}">
        @csrf
        <div>
            <label>Razon social</label>
            <input name="razon_social">
        </div>
        <div>
            <label>CUIT</label>
            <input name="cuit">
        </div>
        <button type="submit">Guardar</button>

    </form>

</div>
