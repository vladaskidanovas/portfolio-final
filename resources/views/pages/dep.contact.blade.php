@extends('layouts.master')

@section('content')
    <div class="container contact">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="status hstack gap-3">
                        <i class="bi bi-check-circle-fill fs-3"></i>
                        {{ session('status') }}
                    </div>
                @else
                    <div class="row h-100">
                        <div class="col-md-6">
                            <h1 class="card-title">Want to get in touch?</h1>
                        </div>
                        <div class="col-md-6">


                            <form
                                name="send_message"
                                id="send_message"
                                class="h-100"
                                method="post"
                                action="{{ url('send_message') }}"
                            >
                                @csrf

                                <div class="vstack gap-3 h-100">
                                    <input
                                        type="text"
                                        class="form-control {{ $errors->first('name') ? 'is-invalid' : '' }}"
                                        id="formControlName"
                                        name="name"
                                        placeholder="Name"
                                        required
                                    >
                                    <div
                                        id="validationName"
                                        class="invalid-feedback"
                                    >
                                        {{ $errors->first('name') }}
                                    </div>
                                    <input
                                        type="email"
                                        class="form-control {{ $errors->first('email_address') ? 'is-invalid' : '' }}"
                                        id="formControlEmail"
                                        name="email_address"
                                        placeholder="Email address"
                                        required
                                    >
                                    <div
                                        id="validationEmail"
                                        class="invalid-feedback"
                                    >
                                        {{ $errors->first('email_address') }}
                                    </div>
                                    <textarea
                                        style="resize:none"
                                        class="form-control {{ $errors->first('message_text') ? 'is-invalid' : '' }} h-100"
                                        id="formControlMessageText"
                                        name="message_text"
                                        placeholder="Message text"
                                        rows="10"
                                        required
                                    ></textarea>
                                    <div
                                        id="validationMessage"
                                        class="invalid-feedback"
                                    >
                                        {{ $errors->first('message_text') }}
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

@stop
