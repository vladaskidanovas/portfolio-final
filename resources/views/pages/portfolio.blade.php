@extends('layouts.master')

@section('content')
    <div class="container portfolio ">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">
                <div class="card">
                    <div class="card-img-top">
                        <img
                            class="img_lq"
                            src="{{ asset('img/ledecorate_page_lq.jpeg') }}"
                        >
                        <img
                            class="img_hq d-none"
                            src="{{ asset('img/ledecorate_page_hq.png') }}"
                        >
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ledecorate.co.uk</h5>
                        <p class="card-text">
                            This project is built on WordPress.
                            <br>Used technologies: WordPress, NGINX. Bootstrap
                        </p>
                        <a
                            href="https://ledecorate.co.uk"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit ledecorate.co.uk</a>
                    </div>
                </div>

            </div>
            <div class="col">

                <div
                    class="card"
                    style="height: ;"
                >
                    <div class="card-img-top">
                        <img
                            class="img_lq"
                            src="{{ asset('img/trsnet_page_lq.jpeg') }}"
                        >
                        <img
                            class="img_hq d-none"
                            src="{{ asset('img/trsnet_page_hq.png') }}"
                        >
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">TRSNET</h5>
                        <p class="card-text">
                            This project I started for practicing my skills in backend development.
                            <br> Used technologies: Laravel, Livewire, Mysql, Reddis, Bootstrap, jQuery+UI, API’s

                        </p>
                        <a
                            href="https://trsnet.vladkidanov.dev"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit trsnet.vladkidanov.dev</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
