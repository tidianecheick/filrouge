@extends('layout.navbar')
@section('content') <br>
<div class="public"> <h3> <strong> <i> REALISATION</h3></strong></i></div>


<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center " uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation1.jpg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation2.jpeg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation3.jpg')}}" alt=""></div>
        </div>
    </div>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/afriklonny.jpeg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/slide4.jpg')}}" alt=""></div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-body"><img src="{{asset('image/realisation3.jpg')}}" alt=""></div>
        </div>
    </div>
    <div class="uk-height-medium" id="conteneur">
    <div class="js-wrapper">

    <center> <h2>  <strong>  Autre réalisation </strong></h2></center>

        <div uk-overflow-auto="selContainer: .uk-height-medium; selContent: .js-wrapper">
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-2"><img src="{{asset('image/reali3.jpg')}}" width="1800" height="1200" alt=""></div>
                <div class="uk-width-1-2"><img src="{{asset('image/reali2.jpg')}}" width="1800" height="1200" alt=""></div>
                <div class="uk-width-1-2"><img src="{{asset('image/reali.jpg')}}" width="1800" height="1200" alt=""></div>
                <div class="uk-width-1-2"><img src="{{asset('image/slide4.jpg')}}" width="1800" height="1200" alt=""></div>
            </div>
        </div>

       

    </div>
   
</div> <br>
   <center> <h2>  <strong>  Notre Equipe </strong></h2></center>

<div class="uk-flex uk-flex-center">
<div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="{{asset('image/homme.jpg')}}" width="400" height="400" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <p class="uk-h4 uk-margin-remove">Chef de Service</p>
            </div>
        </div>
</div>
<div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="{{asset('image/homme.jpg')}}" width="400" height="400" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <p class="uk-h4 uk-margin-remove">Sécretaire</p>
            </div>
        </div>
       
</div>
<div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
            <img src="{{asset('image/homme.jpg')}}" width="400" height="400" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <p class="uk-h4 uk-margin-remove">PDG Axel</p>
            </div>
        </div>
</div>
</div>

@endsection