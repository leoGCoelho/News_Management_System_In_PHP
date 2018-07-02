@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Noticia submetida:</strong> {{ Session::get('success') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Atenção:</strong>
        <ul>
            @foreach($errors as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif
