<h3>{{$produk->nama}}</h3>
                                    <hr>
                                    <p>
                                        Rp. {{number_format($produk->harga)}} |
                                        stok : {{$produk->stok}} |
                                        berat : {{$produk->berat}} gr
                                    </p>
                                    <p>
                                        {{$produk->deskripsi}}
                                    </p>