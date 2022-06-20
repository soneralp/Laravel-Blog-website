@extends('layouts.app')

@section('content')

    <div class="big-page"></div>
        <section class="py-5">
        <div class="container py-3 px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-3 py-3 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary backgorund-color1 text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Kullanıcı Girişi</h1>
                    <p class="lead fw-normal text-muted mb-0">Tekno Blog'a Giriş Yap</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" value="{{ old('email') }}" name="email" type="text"
                                       tabindex="3" required/>
                                <label for="email">E-mail </label>
                            </div>
                            <!-- Password input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" name="password" tabindex="4" required/>
                                <label for="password">Şifre</label>
                            </div>
                            <!-- Submit Button-->
                            <div class="row justify-content-center">
                                <div class="d-grid col-md-6 my-2">
                                    <button class="btn backgorund-color1 btn-lg" name="login"   style="color: white;" value="login" type="submit" >Giriş Yap</button>
                                </div>
                                <div class="d-grid col-md-4 my-2">
                                    <button class="btn border-color1 btn-lg " ><a style="text-decoration: none; color: #6012c5;" href="{{route('register')}}">Üye Ol</a></button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <!-- Contact cards-->
        </div>

    </section>
    <div class="big-page"></div>


@endsection
