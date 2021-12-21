@extends('layouts.master')

@section('content')
<div class="container  mx-auto max-w-screen-lg">
    <section class="welcome-page">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="welcome-text">
                    Hello, my name is Vlad. <br> I am web developer based in Leicester, UK
                </div>
                <br>
                <p>Junior backend developer</p>
                <a href="{{url("/about")}}" class="btn btn-primary">About me</a>
            </div>

    </section>
</div>
@stop
