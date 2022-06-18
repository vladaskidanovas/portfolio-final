@extends('layouts.master')

@section('content')
    <div class="container about">
        <div class="row">
            <div class="col">
                <section class="about_me">
                    <img
                        class="img_lq"
                        src="{{ asset('img/portfolio_lq.jpg') }}"
                        alt="My photo"
                    >
                    <img
                        class="img_hq d-none"
                        src="{{ asset('img/portfolio_hq.jpg') }}"
                        alt="My photo"
                    >
                    <div class="about_me_text">
                        <h1>Hi there!</h1>
                        <p>
                            I'm a self-taught web developer with an ability to create functional, efficient,
                            beautiful websites. I'm looking for a job where I can apply my current development knowledge and
                            learn more if that knowledge is not enough.
                            I enjoy being challenged with projects that require me to work outside my comfort zone.

                        </p>
                        <a
                            href="{{ url('/portfolio') }}"
                            class="btn btn-primary"
                        >My portfolio</a>
                    </div>
                </section>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <section class="about_my_experience">
                    <div class="experience me-3">
                        <h1>Experience</h1>
                        <section>
                            <small>2016 - 2018</small>
                            <div class="bold">Software Engineer - UAB "SALDA" Lithuania</div>
                            <span>Worked as software engineer, collaborate with team on the execution of ideas.</span>
                        </section>
                    </div>
                    <div class="skills">
                        <div class="coding">
                            <h1>Skills</h1>
                            <span class="badge bg-primary mb-1 fs-6">MySQL</span>
                            <span class="badge bg-primary mb-1 fs-6">PHP</span>
                            <span class="badge bg-primary mb-1 fs-6">Laravel</span>
                            <span class="badge bg-primary mb-1 fs-6">Livewire</span>
                            <span class="badge bg-primary mb-1 fs-6">OctoberCMS</span>
                            <span class="badge bg-primary mb-1 fs-6">WordPress</span>
                            <span class="badge bg-primary mb-1 fs-6">NGINX</span>
                            <span class="badge bg-primary mb-1 fs-6">Linux</span>
                            <span class="badge bg-primary mb-1 fs-6">Docker</span>
                            <span class="badge bg-primary mb-1 fs-6">NPM</span>
                            <span class="badge bg-primary mb-1 fs-6">Git</span>
                            <span class="badge bg-primary mb-1 fs-6">HTML/CSS</span>
                            <span class="badge bg-primary mb-1 fs-6">SASS</span>
                            <span class="badge bg-primary mb-1 fs-6">Bootstrap</span>
                            <span class="badge bg-primary mb-1 fs-6">TailwindCSS</span>
                            <span class="badge bg-primary mb-1 fs-6">JavaScript</span>
                            <span class="badge bg-primary mb-1 fs-6">JQuery</span>
                            <span class="badge bg-primary mb-1 fs-6">Vue</span>
                            <span class="badge bg-primary mb-1 fs-6">AlpineJS</span>
                        </div>
                        <div class="languages">
                            <h2>Languages</h2>
                            <span class="badge bg-primary mb-1 fs-6">English</span>
                            <span class="badge bg-primary mb-1 fs-6">Lithuanian</span>
                        </div>
                        <div class="knowledge">
                            <h2>Knowledge</h2>
                            <span class="badge bg-primary mb-1 fs-6">Website hosting</span>
                            <span class="badge bg-primary mb-1 fs-6">Familiarity with Servers</span>
                            <span class="badge bg-primary mb-1 fs-6">Knowledge of APIs</span>
                            <span class="badge bg-primary mb-1 fs-6">Version Control and Version Control Systems</span>
                            <span class="badge bg-primary mb-1 fs-6">Responsive web design</span>
                        </div>
                    </div>
                </section>

            </div>
        </div>


    </div>
@stop
