@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Slider</h4>
                            <p class="category">Burada eklenen sliderların listesini bulabilirsiniz</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr><th>Önizleme</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr></thead>

                                @foreach($data as $key => $value )

                                    <tbody>
                                    <tr>
                                        <td><img src="{{asset($value['image'])}}" style="width: 120px; height:120px"></td>
                                        <td> <a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</a> </td>
                                        <td> <a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a> </td>
                                    </tr>
                                    @endforeach

                                    </tbody>

                            </table>
                            {{$data->links()}}

                        </div>
                    </div>
                    <a href="{{route('admin.slider.create')}}" class="btn btn-success">Yeni Slider Ekle</a>
                </div>
            </div>
        </div>
    </div>
@endsection
