@extends('layouts.master')

@section('content')
<div class="container  mx-auto max-w-screen-lg">
    <section class="welcome-page">
        <div class="background-wrapper position-fixed">
            <img draggable="false" src="{{ asset('img/gradient.png') }}" alt="">
        </div>


            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="heading-name">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi quo ullam.
                </div>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, eveniet.</p>
                <button type="button" class="btn btn-outline-primary">Portfolio</button>
            </div>

    </section>
</div>
@stop
