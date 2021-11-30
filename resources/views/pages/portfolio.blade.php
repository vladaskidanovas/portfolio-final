@extends('layouts.master')

@section('content')
<div class="container portfolio">
    <div class="card">
        <div class="card-img-top">
            <img class="img_lq" src="{{ asset('img/ledecorate_page_lq.jpeg') }}">
            <img class="img_hq d-none" src="{{ asset('img/ledecorate_page_hq.png') }}">
        </div>
        <div class="card-body">
            <h5 class="card-title">Ledecorate.co.uk</h5>
            <p class="card-text">This is my first project since I took long holidays from work</p>
            <a href="https://ledecorate.co.uk" class="btn btn-primary" target="_blank">Visit ledecorate.co.uk</a>
        </div>
    </div>
</div>
@stop
