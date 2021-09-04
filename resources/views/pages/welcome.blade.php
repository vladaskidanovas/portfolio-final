@extends('layouts.master')

@section('content')
<div class="container  mx-auto max-w-screen-lg">
    <section class="welcome-page">
        <div class="background-wrapper position-fixed top-50 start-50 translate-middle">
            <img src="{{ asset('img/gradient.png') }}" alt="">
        </div>


            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="heading-name">
                    HI,I'AM VLAD KIDANOVAS<BR>
                </div>
                <p class="text-center">JUNIOR WEB DEVELOPER</p>
            </div>

    </section>
</div>
@stop
