@extends('main')

@section('title', 'Home')

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
        <div class="col-md-12" id="stl_1_1">
            <div class="jumbutron">
                <h1>NewsUpdate</h1>
                <p>As noticias mais quentes do momento para voce</p>
                <!--<p><a class="btn btn-primary ntm-lg" href="{{ url('/') }}" role="button"></a></p>-->
            </div>
        </div>
    </div>

    <div class="row" id="stl_2">
        <div class="col-md-8" id="stl_3">
            @foreach($news as $post)

            <div class="post"  id="stl_5">
                <div class="entry-cover-image" align="center" style="margin-top: 2%; height: 200dpi;
                width: 150dpi;">
                    <img class="center" src="{{ $post->imagem }}">
                </div>
                <h3>{{ $post->titulo }}</h3>
                <p>{{ substr($post->conteudo, 0, 350) }}{{ strlen($post->conteudo)>300 ? "..." : "" }}</p>
                <a href="{{ route('news.show', $post->id) }}" class="btn btn-danger btn-primary">Mais</a>
            </div>
            <hr>

            @endforeach

        </div>


        <div class="col-md-3 col-md-offset-1" id="stl_4">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
