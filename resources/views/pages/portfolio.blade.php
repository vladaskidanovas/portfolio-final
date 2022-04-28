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
                            This project I learned: <br>
                            WordPress framework <br>
                            Deploy site on dedicated server using NGINX
                            Additionally I learned blender and made 3d models
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

                <div class="card">
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
                            This project I learned: <br>
                            Laravel framework <br>
                            Livewire framework

                        </p>
                        <a
                            href="trsnet.vladkidanov.dev"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit trsnet.vladkidanov.dev</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
