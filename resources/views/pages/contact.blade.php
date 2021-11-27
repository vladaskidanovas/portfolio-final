@extends('layouts.master')

@section('content')
    <div class="container contact">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if (session('status'))
                        <div class="col">
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        </div>
                    @else
                        <div class="col-md-6 col-sm-0">
                            <h1 class="card-title">Want to get in touch?</h1>
                            Also you can contact me using those:
                            <div class="row">
                                <div class="col">
                                    <a class="fs-1" href="https://github.com/vladaskidanovas" target="_blank">
                                        <ion-icon name="logo-github"></ion-icon>
                                    </a>
                                    <a class="fs-1" href="https://www.linkedin.com/in/vladislovas-kidanovas/"
                                       target="_blank">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">

                            <form name="send_message" id="send_message" method="post" action="{{ url('send_message') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="formControlName" class="form-label">Name</label>
                                    <input type="text"
                                           class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                           id="formControlName" name="name" placeholder="Alan" required>
                                    <div id="validationName" class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formControlEmail" class="form-label">Email address</label>
                                    <input type="email"
                                           class="form-control {{ $errors->first('email_address') ? 'is-invalid' : '' }}"
                                           id="formControlEmail" name="email_address" placeholder="name@example.com"
                                           required>
                                    <div id="validationEmail" class="invalid-feedback">
                                        {{ $errors->first('email_address') }}
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formControlMessageText" class="form-label">Message</label>
                                    <textarea class="form-control {{ $errors->first('message_text') ? 'is-invalid' : '' }} "
                                              id="formControlMessageText" name="message_text" rows="9" required></textarea>
                                    <div id="validationMessage" class="invalid-feedback">
                                        {{ $errors->first('message_text') }}
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>

@stop
