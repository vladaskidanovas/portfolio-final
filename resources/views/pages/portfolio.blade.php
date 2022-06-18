@extends('layouts.master')

@section('content')
    <div class="container portfolio ">
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">

                <x-bootstrap.card>
                    <x-slot name="img">
                        <img
                            class="img_lq"
                            src="{{ asset('img/ledecorate_page_lq.jpeg') }}"
                        >
                        <img
                            class="img_hq d-none"
                            src="{{ asset('img/ledecorate_page_hq.png') }}"
                        >
                    </x-slot>
                    <h5 class="card-title">Ledecorate.co.uk</h5>
                    <p class="card-text">
                        This project is built on WordPress.
                        <br>Used technologies: WordPress, NGINX. Bootstrap
                    </p>
                    <x-slot name="footer">
                        <a
                            href="https://ledecorate.co.uk"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit ledecorate.co.uk</a>
                    </x-slot>
                </x-bootstrap.card>


            </div>
            <div class="col">

                <x-bootstrap.card>
                    <x-slot name="img">
                        <img
                            class="img_lq"
                            src="{{ asset('img/trsnet_page_lq.png') }}"
                        >
                        <img
                            class="img_hq d-none"
                            src="{{ asset('img/trsnet_page_hq.png') }}"
                        >
                    </x-slot>
                    <h5 class="card-title">TRSNET</h5>
                    <p class="card-text">
                        This project I started for practicing my skills in backend development.
                        <br> Used technologies: Laravel, Livewire, Mysql, Bootstrap, jQuery+UI, API's.
                        <br> Planing to implement: Unit test's, Reddis, Localization, Mailer.

                    </p>
                    <x-slot name="footer">
                        <a
                            href="https://trsnet.vladkidanov.dev"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit trsnet.vladkidanov.dev</a>
                    </x-slot>
                </x-bootstrap.card>

            </div>
            <div class="col">

                <x-bootstrap.card>
                    <x-slot name="img">
                        <img
                            class="img_lq"
                            src="{{ asset('img/ssg_lq.png') }}"
                        >
                        <img
                            class="img_hq d-none"
                            src="{{ asset('img/ssg_hq.png') }}"
                        >
                    </x-slot>
                    <h5 class="card-title">Sprite Sheet Generator</h5>
                    <p class="card-text">
                        Sprite Sheet generator is an asset for Unity 2018.4 version. The main purpose is to capture sprite sheets from 3D Objects or Particles.
                        <br> Used technologies: C#, Unity, Shaders

                    </p>
                    <x-slot name="footer">
                        <a
                            href="https://ngc-games.itch.io/sprite-sheet-generator"
                            class="btn btn-primary mb-2"
                            target="_blank"
                        >Visit ngc-games.itch.io</a>
                        <a
                            href="https://github.com/vladaskidanovas/3DTOSpriteSheet"
                            class="btn btn-primary"
                            target="_blank"
                        >Visit GitHub repository</a>
                    </x-slot>
                </x-bootstrap.card>

            </div>
        </div>
    </div>
@stop
