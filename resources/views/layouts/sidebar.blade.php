<div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Admin Panel
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{route('admin.index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Ana Sayfa</p>
                </a>
            </li>


            <li class="active">
                <a href="{{route('admin.yazar.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Blog Yazarları</p>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.kategori.index')}}">
                    <i class="material-icons">library_books</i>
                    <p>Kategoriler</p>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.blog.index')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Blog Yazısı Ekle</p>
                </a>
            </li>
            <li class="active">
                <a href="{{route('admin.slider.index')}}">
                    <i class="material-icons">location_on</i>
                    <p>Slider</p>
                </a>
            </li>


        </ul>
    </div>
</div>
