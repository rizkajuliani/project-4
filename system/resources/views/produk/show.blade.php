@extends('beranda')
@section('content')
<div class="container-fluid">
    <div class="Container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                   <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <h3>{{$produk->nama}}</h3>
                       <hr>
                       <p>
                           Rp. {{number_format($produk->harga)}} |
                           stok : {{$produk->stok}} |
                           berat : {{$produk->berat}} gr
                       </p>
                       <p>
                           {!! nl2br  ($produk->deskripsi)!!}
                       </p>
                   </div>
               </div>  
           </div>
       </div>
   </div>
</div>
@endsection