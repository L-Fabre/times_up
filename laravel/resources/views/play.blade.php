@extends('layouts.base')
@section('title', 'jouer')
@section('css', '/css/play.css')

@section('content')
    <section class="flex" id="play">

        <div class="start flex ">
            <h1>Êtes-vous prêt?</h1>
            <input type="button" value="Start" onclick="play(); viewTimer1();">
        </div>
        <div class="hide cards1">
            <h1 class="timer"></h1>
            @foreach ($cards as $card)
                <div class="card1 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card[0]->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="flex div-btn1 ">
                <input class="find" type="button" value="Trouvé !" onclick="find1()">
            </div>
        </div>
        <div class="hide cards2">
            <h1 class="timer"></h1>
            @foreach ($cards as $card)
                <div class="card2 hide">
                    <div class="enterCard" >
                        <div class="flex">
                            <h1 class="top-right">Party</h1>
                        </div>
                        <p class="word">{{$card[0]->card}}</p>
                        <h1 class="bottom-left">Party</h1>
                    </div>
                </div>
                
            @endforeach
            <div class="hide div-btn2 ">
                <input class="find" type="button" value="Trouvé !" onclick="find2()">
                <input class="next" type="button" value="Passer" onclick="next2()">
            </div>
        </div>
    
        <div class="hide congrat">
            <h1>bravo</h1>
        </div>
    </section>
@endsection
@section('js', '/js/play.js')