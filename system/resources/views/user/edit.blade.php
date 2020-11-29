@extends('beranda')
@section('content')
<div class="container-fluid">

                <div class="Container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    Edit Data User
                                </div>
                                <div class="card-body">
                                    <form action="{{url('user', $user->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{$user->nama}}">
                                    </div>
                                          <div class="form-group">
                                             <label for="" class="control-label">Username</label>
                                             <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                          </div>
                                          <div class="form-group">
                                             <label for="" class="control-label">Email</label>
                                             <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                          </div>
                                          <div class="form-group">
                                             <label for="" class="control-label">Password</label>
                                             <input type="text" class="form-control" name="password" value="{{$user->password}}">
                                          </div>
                                    <input type="submit" class="btn btn-dark float-right" value="Simpan" />
                                 </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
@endsection