<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tekno - Blog</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/stillerim.css')}}" rel="stylesheet" />

</head>

<body style="min-height: 100vh;">
<!--top-header-->




<main class="flex-shrink-0">
                        <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark backgorund-color1">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">Tekno - Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="home" href="{{route('index')}}">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link "  href="{{route('login')}}">Kullanıcı Giriş</a></li>





                    <li class="nav-item"><a class="nav-link" href="{{route('SSS')}}">SSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link active"  href="#">TR</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ENG</a></li>

                    @auth()

                        <div class="box" id="giris">
                            <a class="nav-link " href="{{route('admin.index')}}" style="color: white;text-decoration: none;">Admin</a>
                            <form action="{{route('admin.index')}}" method="post" >
                                {{csrf_field()}}
                            </form>
                        </div>

                        <div class="box" id="giris">
                            <a class="nav-link " onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}" style="color: white;text-decoration: none;">Çıkış Yap</a>
                            <form action="{{route('logout')}}" method="post" id="logout-form">
                                {{csrf_field()}}
                            </form>
                        </div>

                        <!--<li class="nav-item"><a class="nav-link" href="kullanicigiris.html">Kullanıcı Girişi</a></li>
-->
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</main>




@yield('content')


</body>

<!--information-end-->
<!--footer-starts-->
<footer class="backgorund-color1 py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Proje Ödevim 2022</div></div>

        </div>
    </div>
</footer>

<!--footer-end-->
</html>

<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous')}}"></script>
<script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T')}}" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@yield('scripts')

<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
