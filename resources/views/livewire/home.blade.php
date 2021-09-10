<div class="container">
    {{-- Banner --}}
    <div class="banner">
        <img src="{{asset('assets/slider/slider1.png')}}">
    </div>

    {{-- liga --}}
    <section class="pilih-liga mt-4">
        <h3>Pilih Liga</h3>
        <div class="row mt-4">
            @foreach($ligas as $list)
            <div class="col">
                <div class="card shadow">
                    <a href="{{route('products-liga',$list->id)}}">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/liga/'.$list->gambar)}}" class="img-fluid"    >
                    </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- best product --}}
    <section class="best-products mt-5 mb-5">
        <h3>Best Products</h3>
        <div class="row mt-4">
            @foreach($products as $list)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{asset('assets/jersey/'.$list->gambar)}}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{$list->name}}</strong></h5>
                                <h5>Rp {{number_format($list->harga)}}</h5>
                            </div>
                        </div>
                         <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{route('products-detail',$list->id)}}" class="btn btn-primary btn-block"><i class="fas fa-eye" aria-hidden="true"></i> Detail</a>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
