@extends('layouts.master')

@section('content')
<div class="container about">
    <div class="row">
        <div class="col">
            <section class="about_me">
                <img src="{{ asset('img/me.png') }}" alt="My photo">
                <div class="about_me_text">
                    <h1>Hi there!</h1>
                    <p>
                        Self-taught web developer with a passion for creating beautiful, responsive websites and dynamic
                        web applications.
                    </p>
                </div>
            </section>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <section class="about_my_experience">
                <div class="experience">
                    <h1>Experience</h1>
                    <section>
                        <small>2018 - present</small>
                        <div class="bold">Self employed</div>
                        <span>Made WordPress websites for small business.</span>
                    </section>
                    <section>
                        <small>2016 - 2018</small>
                        <div class="bold">Software Engineer - UAB "SALDA" Lithuania</div>
                        <span>Worked as software engineer, collaborate with team on the execution of ideas.</span>
                    </section>
                </div>
                <div class="skills">
                    <div class="coding">
                        <h1>Skills</h1>
                        <span class="badge bg-primary mb-1 fs-6">JavaScript</span>
                        <span class="badge bg-primary mb-1 fs-6">MySQL</span>
                        <span class="badge bg-primary mb-1 fs-6">Docker</span>
                        <span class="badge bg-primary mb-1 fs-6">NPM</span>
                        <span class="badge bg-primary mb-1 fs-6">HTML/CSS</span>
                        <span class="badge bg-primary mb-1 fs-6">ReactJS</span>
                        <span class="badge bg-primary mb-1 fs-6">PHP</span>
                        <span class="badge bg-primary mb-1 fs-6">SASS</span>
                        <span class="badge bg-primary mb-1 fs-6">Git</span>
                        <span class="badge bg-primary mb-1 fs-6">NGINX</span>
                        <span class="badge bg-primary mb-1 fs-6">Linux</span>
                    </div>
                    <div class="languages">
                        <h2>Languages</h2>
                        <span class="badge bg-primary mb-1 fs-6">English</span>
                        <span class="badge bg-primary mb-1 fs-6">Lithuanin</span>
                        <span class="badge bg-primary mb-1 fs-6">Russian</span>
                    </div>
                    <div class="knowledge">
                        <h2>Knowledge</h2>
                    </div>
                </div>
            </section>
          
        </div>
    </div>


</div>
@stop