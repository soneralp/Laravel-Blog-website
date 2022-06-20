@extends('layouts.app')
@section('content')

    <!--bottom-header-->
    <!--banner-starts-->



    <header class="backgorund-color1 fullscreen  ">
        <div class="container px-5">
            <div class="row  align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Tekno - Blog</h1>
                        <p class="lead fw-normal text-white-50 mb-4">En güncel teknoloji ve yazılım içerikli
                            yazılarımızdan haberdar olmak için takipte kalın.
                            Tekno Blog en güncel haberler ile şimdi tablet bilgisayar ve telefonlarınızda daima sizinle.
                            <br><strong style="color: white;"> Sizde üye olarak blog yazarlarımızın arasına
                                katılabilirsiniz</strong></p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        </div>
                    </div>
                </div>
                <!------------------- Slider -------------------->
                <div class="col-xl-5 col-xxl-6 d-xl-block text-center">

                    <div id="SimpleCarouselExample" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <li>
                                    <img class=" w-75" src="{{asset('images/1.png')}}" />
                                </li>
                            </div>
                            @foreach(\App\Models\Slider::all() as $key => $value)
                                <div class="carousel-item   ">
                                    <li>
                                        <img class=" w-75" src="{{asset(\App\Helper\mHelper::largeImage($value['image']))}}" />
                                    </li>
                                </div>
                            @endforeach


                            <button class="carousel-control-prev" type="button" data-target="#SimpleCarouselExample"
                                    data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#SimpleCarouselExample"
                                    data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                            </button>

                        </div>


                    </div>
                </div>


                <!------------------- Slider -------------------->
            </div>
        </div>
    </header>




    <section class="py-5">
        <div class="container px-5 ">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class=" fw-bolder pb-5">Son Eklenenler</h2>
                        <div class="flex-shrink-0">
                            <!-- Navigation-->


                            <nav style="border-radius: 25px;"
                                 class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
                                <div class="container">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarSupportedContent"
                                            aria-controls="navbarSupportedContent" aria-expanded="false"
                                            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                            @foreach(\App\Models\Kategoriler::all() as $key => $value)
                                                <li style="margin-right: 10px;" class="grid"><a
                                                        style="font-weight: bold; color: white;text-decoration: none; margin-right: 5px;"
                                                        href="{{route('cat',['selflink'=>$value['selflink']])}}">{{$value['name']}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </nav>


                        </div>
                    </div>

                </div>
            </div>
            <div class="row pt-5 gx-5">
                @foreach(\App\Models\Bloglar::all()->chunk(4) as $chunk)
                    @foreach($chunk as $key => $value)
                        <div class="col-lg-4">
                            <div class="card my-3 shadow border-0">
                                    <a class="mask">
                                        <img class="card-img-top" src="{{asset($value['image'])}}" alt="..."/>
                                    </a>
                                    <div class="card-body p-4">
                                         <div class="badge bg-primary backgorund-color1 rounded-pill mb-2">{{\App\Models\Kategoriler::getField($value['kategoriid'],"name")}}</div>
                                        <p><a class="text-decoration-none link-dark stretched-link" href="{{route('blog.detay',['selflink' => $value['selflink']])}}"><h5
                                                    class="card-title mb-3">{{$value['name']}}</h5></a>
                                    </div>
                                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div class="d-flex align-items-center">

                                                <div class="small">
                                                    <div class="fw-bold">{{$value['name']}}</div>
                                                    <div
                                                        class="text-muted">{{\App\Models\Yazarlar::getField($value['yazarid'],"name")}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <!-- Call to action-->
            <div class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                <div
                    class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                    <div class="mb-4 mb-xl-0">
                        <div class="fs-3 fw-bold text-white">Sizde Blog Yazarı Olabilmek İçin</div>
                        <div class="text-white-50">Mail adresinizi bizlere gödererek iletişime geçebilirsiniz</div>
                    </div>
                    <div class="ms-xl-4">
                        <div class="input-group mb-2">
                            <a href="{{route('register')}}" class="input-group text-decoration-none">
                                <button class="btn btn-outline-light w-75 mx-auto" id="button-newsletter" type="button">
                                    Üye Ol
                                </button>
                            </a>
                        </div>
                        <div class="small text-white-50">Gizliliğinizi önemsiyoruz verileriniz kimseyle
                            paylaşılmayacaktır.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!--about-starts-->
    <!--about-end-->
    <!--product-starts-->
    <!--product-end-->
    <!--information-starts-->

@endsection
