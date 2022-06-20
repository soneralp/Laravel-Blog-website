@extends('layouts.app')

@section('content')



            <!-- Page content-->
            <div class="container mt-5">
                <div class="row">

                        <div class="col-lg-8">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1">{{$data[0]['name']}}</h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">{{\App\Models\Yazarlar::getField($data[0]['yazarid'],"name")}}</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-primary text-decoration-none link-light" href="#!">{{\App\Models\Kategoriler::getField($data[0]['kategoriid'],"name")}}</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="{{asset(\App\Helper\mHelper::largeImage($data[0]['image']))}}" alt="..."/>
                                </figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                        {!! $data[0]['aciklama']!!}
                                </section>
                            </article>
                            <!-- Comments section-->
                        </div>


                <!-- Side widgets-->
                    <div class="col-lg-4">
                        <!-- Search widget-->
                        <!-- Categories widget-->
                        <div class="card mb-4">
                            <div class="card-header">Categories</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#!">Web Design</a></li>
                                            <li><a href="#!">HTML</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled mb-0">
                                            <li><a href="#!">JavaScript</a></li>
                                            <li><a href="#!">CSS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Side widget-->
                        <!--
                        <div class="card mb-4">
                            <div class="card-header">Side Widget</div>
                            <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
            <!-- Footer-->


@endsection

