@extends('layouts.app')

@section('content')
    <div class="big-page"></div>

    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Sıkça Sorulan Sorular</h1>
                <p class="lead fw-normal text-muted mb-0"><hr class="hr-cizgi mx-auto"></p>
            </div>
            <div class="row gx-5">
                <div class="mx-auto col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder text-center mb-3">Üye Olma Hakkında</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Üyelik Olmak Ücretli mi ?</button></h3>
                            <div class="accordion-collapse collapse " id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Tekno Blog'a üye olmak tamamen ücretsizdir.</strong>
                                    Sizlerde hemen Tekno - Blog'a üye olarak blog yazılarını takipte kalabilirsiniz
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Nasıl Blog Yazarı Olurum ?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Blog Yazarı Olmak</strong>
                                    Tekno - Blog'ta blog yazarı olabilmek ve ekibimize katılmak için mail yoluyla bizlerle iletişime geçebilirsiniz.<br>
                                    random-mail@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Accordion 2-->
                    <h2 class="fw-bolder text-center mb-3"> Bilgilerinizin Güvenliği</h2>
                    <div class="accordion mb-5 mb-xl-0" id="accordionExample2">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">Hesap Güvenliği</button></h3>
                            <div class="accordion-collapse collapse " id="collapseThree" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
                                <div class="accordion-body">
                                    <strong>Tekno - Blog Güvenliği</strong>
                                    Hesabınızın güvenliği için elimizden gelenin en iyisini yapıyoruz. Kullandığımız şifreleme algoritmalarımız sayesinde hesabınız son derece güvenli.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">Şifremi Unuttum ?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingTwo" data-bs-parent="#accordionExample4">
                                <div class="accordion-body">
                                    <strong>Şifremi Unuttum Ne Yapmalıyım</strong>
                                    Eğer hesabınızın şifresini unuttuysanız bizlerle mail yoluyla iletişeme geçebilirsiniz. <br>
                                    random-mail@gmail.com
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<!-- Footer-->
    <div class="big-page"></div>

@endsection
