@extends('layouts.layout1')
@section('title' , 'Ctrl | Inicio')
@section('content')

<div class="container justify-content-center"> 
  {{-- <div class="container main-title text-1-5xl sm:text-5xl font-lf-bold max-w-lg mb-1 font-normal text-center md:text-center" style="line-height: 0.63">
    <span class="">Bienvenido a Ctrl Documents</span>
  </div> --}}
  <br><br>
    <div class="container md:flex mx-230 justify-left md:justify-left">

      <div class="container">
        {{-- informacion --}}
        <h1 class="main-title text-1-5xl sm:text-5xl  mb-2 font-normal font-lf-bold max-w-lg mx-auto text-left md:text-left" style="color:#0f1f40;"
          >Puede obtener toda la información conocida sobre un proveedor concreto.</span>
            <div class="main-title-anim-container flex text-left md:text-left">
              <span class="text-lf-teal main-title-parts trans opacity-100 block text-left md:text-left" style="width: 200px; color:#f99000; text-align: left">Facturas</span>
              <span class=" block mx-1 sm:mx-2"> y </span><span class="block text-lf-teal main-title-parts trans opacity-100" style="color:#f99000">Comprobantes</span>
            </div>
         </h1>
        <br><br><br>

          {{-- <div class="flex md:block justify-center"> --}}
            {{-- {{ route('') }} --}}
            <a href="javascript:void(0)" class="getting_started_button" data-toggle="modal" data-target="#theModal">
              @include('partials.button_about')
            </a>
            {{-- <a href="javascript:void(0)" class="tabmenu bg-dark" data-toggle="modal" data-target="#theModal"
                            style="text-decoration: none">Agregar
                        </a> --}}
          {{-- </div> --}}
      </div>

            {{-- animacion --}}
            <div class="lf-home-hero-illus-lottie mx-auto " style="text-align: right; width: 115%;position: relative;">
                <video playsinline="" autoplay="autoplay" muted="muted" loop="loop" poster="https://assets10.lottiefiles.com/render/kc0grg7t.png" class="w-full rounded-t-lg" Style="width: 80%; height: 80%">
                  <source type="video/mp4" src="/img/kc0grg7t.mp4">
                </video>
            </div>
    </div>

      @include('partials.home_complemento')

@endsection

@include('partials.modal')