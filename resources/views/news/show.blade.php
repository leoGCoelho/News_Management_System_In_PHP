@extends('main')

@section('title', 'Postagem')
@section('style')
    <style>
        #stl_1{
          height: 200dpi;
          color: #ffffff;
        }
        #stl_1_1{
          margin: 0 auto;
          margin-top: 2%;
          margin-bottom: 3%;
        }
        #stl_1_2{
            height: 200dpi;
            width: 150dpi;
            margin-bottom: 3%;
            background: #343A40;
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
        #stl_7{
          color: #959595;
          margin-bottom: 2%;
        }
        .container img {
            max-width:710px;
            max-height:660px;
            width: auto;
            height: auto;
        }
    </style>
@endsection

@section('content')
    <div class="row" id="stl_1">
        <div class="col-md-12" id="stl_1_2">
            <div class="entry-cover-image" align="center" style="margin-top: 2%">
                <img class="img center" src="{{ $news->imagem}}">
            </div>
            <h1 align="center" id="stl_1_1">{{ $news->titulo }}</h1>
        </div>
    </div>

    <div class="entry-tags" id="stl_7" align="center">
        Autor: {{ $news->autor }} | Postado: {{ $news->updated_at}}
    </div>
    <div class="row" id="stl_2">
        <div class="col-md-8">
            <p class="lead">{{ $news->conteudo }}</p>
        </div>

        <div class="col-md-4">
            <a href="#" class="btn btn-danger btn-block">Compartilhar</a>

            <div class="row" style="margin-top: 3%">
                <div class="col-sm-6">
                    {!! Html::linkRoute('news.edit', 'Editar', [$news->id], ['class' => 'btn btn-danger btn-block']) !!}
                </div>
                <div class="col-sm-6">
                {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Deletar', ['class' => 'btn btn-danger btn-block']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
