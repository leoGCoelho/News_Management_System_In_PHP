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
            <div class="post"  id="stl_5">
                <h3>Titulo1</h3>
                <p>He is a heavily damaged rabbit animatronic/springlock suit of an olive drab color with darker colors on his stomach and insides of his ears. A great portion of his right ear is missing with wires sticking out of the stump left behind. Springtrap's entire body is torn and tattered with gaping holes exposing caging and wires throughout, thus making Springtrap appear much more macabre-looking than any of the other animatronics from any previous installments in the series. His brown/green nose has an irregular squarish shape due to deterioration. While both hands and feet are attached and generally intact, his legs are entirely stripped from the mid-shin down, fully exposing endoskeleton metal and wiring. Several finger joints from each hand are missing their suit overlays. The middle and pinky fingers of his right hand are notably missing their fingertips. A single black button can be seen on the middle of his chest. If look closely to the large hole from his chest which is located under his button, there are multiple red lines.
                </p>
                <a href="#" class="btn btn-danger btn-primary">Mais</a>
            </div>

            <div class="post" id="stl_5">
                <h3>Titulo2</h3>
                <p>He is a heavily damaged rabbit animatronic/springlock suit of an olive drab color with darker colors on his stomach and insides of his ears. A great portion of his right ear is missing with wires sticking out of the stump left behind. Springtrap's entire body is torn and tattered with gaping holes exposing caging and wires throughout, thus making Springtrap appear much more macabre-looking than any of the other animatronics from any previous installments in the series. His brown/green nose has an irregular squarish shape due to deterioration. While both hands and feet are attached and generally intact, his legs are entirely stripped from the mid-shin down, fully exposing endoskeleton metal and wiring. Several finger joints from each hand are missing their suit overlays. The middle and pinky fingers of his right hand are notably missing their fingertips. A single black button can be seen on the middle of his chest. If look closely to the large hole from his chest which is located under his button, there are multiple red lines.
                </p>
                <a href="#" class="btn btn-danger btn-primary">Mais</a>
            </div>

            <div class="post" id="stl_5">
                <h3>Titulo3</h3>
                <p>He is a heavily damaged rabbit animatronic/springlock suit of an olive drab color with darker colors on his stomach and insides of his ears. A great portion of his right ear is missing with wires sticking out of the stump left behind. Springtrap's entire body is torn and tattered with gaping holes exposing caging and wires throughout, thus making Springtrap appear much more macabre-looking than any of the other animatronics from any previous installments in the series. His brown/green nose has an irregular squarish shape due to deterioration. While both hands and feet are attached and generally intact, his legs are entirely stripped from the mid-shin down, fully exposing endoskeleton metal and wiring. Several finger joints from each hand are missing their suit overlays. The middle and pinky fingers of his right hand are notably missing their fingertips. A single black button can be seen on the middle of his chest. If look closely to the large hole from his chest which is located under his button, there are multiple red lines.
                </p>
                <a href="#" class="btn btn-danger btn-primary">Mais</a>
            </div>

        </div>


        <div class="col-md-3 col-md-offset-1" id="stl_4">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection
