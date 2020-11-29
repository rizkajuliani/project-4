@extends('beranda')
@section('content')
            <div class="container-fluid">

                <div class="Container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    Detail Data Kategori
                                </div>
                                <div class="card-body">
                                    <h3>{{$kategori->nama}}</h3>
                                    <hr>
                                    <p>
                                        {{$kategori->created_at}}
                                    </p>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
            
@endsection