@extends('layouts.master')

@section('content')
<div class="container  mx-auto max-w-screen-lg">
    <section class="welcome-page">
        <div class="background-wrapper position-fixed">
            <img draggable="false" src="{{ asset('img/gradient.png') }}" alt="">
        </div>


            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="heading-name">
                    Hello, my name is Vlad. <br> I am web developer & programmer based in Leicester, UK
                </div>
                <br>
                <p>Junior web developer & programmer</p>
                <a href="{{url("/resume")}}" class="btn btn-outline-primary">Portfolio</a>
            </div>

    </section>
</div>
@stop
