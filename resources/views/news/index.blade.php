@extends('main')

@section('title', 'Index')

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
                <h1>Todas Noticias</h1>
            </div>
        </div>
    </div>

    <div class="row" id="stl_2">
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Matéria</th>
                        <th scope="col">Data de publicação</th>
                        <th><th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($news as $post)

                        <tr>
                            <td>{{ substr($post->titulo, 0, 25) }} {{ strlen($post->titulo)>25 ? "..." : "" }}</td>
                            <td>{{ substr($post->autor, 0, 25) }} {{ strlen($post->autor)>25 ? "..." : "" }}</td>
                            <td>{{ substr($post->conteudo, 0, 50) }} {{ strlen($post->conteudo)>50 ? "..." : "" }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td><a class="btn btn-danger" href="{{ route('news.show', $post->id) }}">Ver</a></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>

            <div class="text-center">
                {!! $news->links(); !!}
            </div>

        </div>
    </div>
@endsection
