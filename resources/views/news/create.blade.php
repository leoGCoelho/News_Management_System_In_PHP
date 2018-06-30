@extends('main')

@section('title', 'Adicionar uma noticia')

@section('style')
    <style>
        #stl_1{
          height: 200dpi;
          background: #8e1f1f;
          color: #ffffff
        }
        #stl_1_1{
          margin: 0 auto;
          margin-top: 5%;
        }
        #stl_2{
          margin: 0 auto;
          margin-top: 5%;
          margin-bottom: 10%
        }
        #stl_3{
          margin-right: 6%;
        }
        #stl_4{
          background: #f2f2f2;
          margin-left: 2%;
        }
        #stl_5{
          margin-top: 4%;
          margin-bottom: 4%;
          background-color: #f2f2f2;
        }
        #stl_6{
          margin-right: 6%;
        background-color: #f2f2f2;
        }
    </style>
@endsection

@section('content')
    <div class="row" id="stl_1">
        <div class="col-md-12" id="stl_1_1">
            <div class="jumbutron">
                <h1>Adicionar uma noticia</h1>
                <!--<p><a class="btn btn-primary ntm-lg" href="{{ url('/') }}" role="button"></a></p>-->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <hr>
                {!! Form::open(['route' => 'news.store']) !!}
                    {{ Form::label('titulo', 'Titulo:') }}
                    {{ Form::text('titulo', null, ['class' => 'form-control'])}}
                    {{ Form::label('autor', 'Autor:') }}
                    {{ Form::text('autor', null, ['class' => 'form-control'])}}
                    {{ Form::textarea('conteudo', "Digite aqui", ['class' => 'form-control', 'style' => 'margin-top: 25px']) }}
                    {{ Form::submit('Submeter', ['class' => 'btn btn-danger btn-lg btn-block', 'style' => 'margin-bottom: 5px']) }}

                {!! Form::close() !!}
            </hr>
        </div>
    </div>


@endsection
