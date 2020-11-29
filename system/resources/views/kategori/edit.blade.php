@extends('beranda')
@section('content')
<div class="container-fluid">
                <div class="Container">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    Edit Data Kategori
                                </div>
                                <div class="card-body">
                                    <form action="{{url('admin/kategori', $kategori->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" name="nama">
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