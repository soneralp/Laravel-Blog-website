@extends('layouts.app')

@section('content')


    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-3 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary backgorund-color1 text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Üye Ol</h1>
                    <p class="lead fw-normal text-muted mb-0">Tekno Blog'a Üye Olun</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name İnput -->
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('name') is-invalid @enderror" name="name"   id="name" type="name" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Name </label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control  @error('mail') is-invalid @enderror" name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="email">E-mail </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input class="form-control @error('password') is-invalid @enderror" name="password" id="name" type="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label for="password">Şifre</label>
                            </div>
                            <!-- Submit Button-->
                            <div class="row justify-content-center">
                                <div class="d-grid col-md-6 my-2"><button class="btn border-color1 btn-lg " value="Submit" id="submitButton" style="color: #6012c5;" type="submit">Üye Ol</button></div>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
            <!-- Contact cards-->
        </div>
    </section>












@endsection
