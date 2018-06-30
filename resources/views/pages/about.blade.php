@extends('main')

@section('title', 'Sobre')

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
                <h1>Sobre o NewsUpdate</h1>
                <!--<p><a class="btn btn-primary ntm-lg" href="{{ url('/') }}" role="button"></a></p>-->
            </div>
        </div>
    </div>

    <div class="row" id="stl_2">
        <div class="col-md-8" id="stl_6">
            <p>
                Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla. Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.
            </p>
        </div>


        <div class="col-md-3 col-md-offset-1" id="stl_4">
            <h2>Contact</h2>
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label name="assunto">Assunto:</label>
                <input id="assunto" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label name="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" class="form-control">Digite sua mensagem</textarea>
            </div>
            <input type="submit" value="Enviar" class="btn btn-success">
        </div>
    </div>

@endsection
