@extends('layout')

@section('title', 'Home')

@section('content')
<h1><a href="http://127.0.0.1:8000/welcome">Prueba</a></h1>
@auth

{{ auth()->user()->name }}


@endauth
<div id="informacion" style="display: flex; box-shadow: 0px 1px 0px #999; margin: auto; position: relative; width: 90%; height: 400px;">


    <div id="contenido">
        <div class="container" id="1" style="width: 350px; border: 0px solid gray; float: right; margin-left: 250px; margin-top: 22px; height: 300px; white-space: nowrap;">

            <div class="articulo">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_qpsnmykx.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>


            </div>
        </div>

    </div>

    <div class="container" id="2" style="width: 350px; border: 0px solid gray; float: right; margin-left: 100px; margin-top: 22px; height: 300px; white-space: nowrap;">

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_k86wxpgr.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>




    </div>

</div>
@endsection
