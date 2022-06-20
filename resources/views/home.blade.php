@extends('layouts.app')

@section('content')



    <div class="alert" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if (session('status'))
                        <div class="alert alert-success" role="modal">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






    <div class="alert">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 230px; margin-bottom: 230px">
                <div style="font-size: 35px; color: white; border-top-left-radius: 25px;border-top-right-radius: 25px; font-weight: bold;" class="bg-success card-header">{{ __('Tekno Blog Admin') }}</div>

                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="font-size: 25px;">Giriş Başarılı</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
