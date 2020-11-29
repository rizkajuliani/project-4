@extends('beranda')
@section('content')
<div class="container-fluid">
                <div class="Container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    Detail Data User
                                </div>
                                <div class="card-body">
                                    <h3>Nama : {{$user->nama}}</h3>
                                    <h3>Username : {{$user->username}}</h3>
                                    <h3>Email : {{$user->email}}</h3>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
@endsection