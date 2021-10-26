@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <section class="about_me">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset('img/gradient.png') }}" alt="My photo">
                    </div>
                    <div class="col-8">
                        <h5>About me</h5>
                        <p>
                            Hello! I’m Vlad Kidanov. <br>
                            Web developer from Leicester, UK. I have rich experience in web site design and building, also I am good at wordpress. I love to talk with you about our unique.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-6">

            <section class="experience_education">
                <p>Experience</p>
                <p>

                     ipsum dolor sit amet consectetur adipisicing elit. Numquam sunt, ipsum voluptatum consequatur necessitatibus quisquam fugit exercitationem doloremque,
                    commodi magnam perferendis cupiditate quia. Pariatur, accusantium! Dolor illo numquam dolorum modi!
                </p>
            </section>
            <section class="skills">
                <p>Skills</p>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur facere corrupti assumenda ipsam tenetur repudiandae ratione excepturi, aut culpa
                    animi nulla aperiam. Aperiam facere totam suscipit voluptas consequatur deleniti nesciunt?
                </p>
            </section>
            <section class="languages">
                <p>languages</p>

            </section>
            <section class="knowledge">
                <p>Knowledge</p>
            </section>
            <section class="service">
                <p>My services</p>
            </section>
        </div>
    </div>



</div>
@stop
