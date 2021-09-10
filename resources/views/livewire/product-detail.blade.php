<div class="container">
    <div class="row mb-3">
    <div class="col">      
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                </ol>
            </nav>
    </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card product-detail">
                <div class="card-body">
                    <img class="img-fluid" src="{{asset('assets/jersey/'.$product->gambar)}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><strong>{{$product->name}}</strong></h2>
            <h4>Rp.{{number_format($product->harga)}}
                @if($product->is_ready == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i>Ready Stock</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i>Out Of Stock</span>
                @endif
            </h4>
            <hr>
            <div class="row">
                <div class="col">
                    <table class="table" style="border-top:hidden;">
                        <tr>
                            <td>Liga</td>
                            <td>:</td>
                            <td><img width="50px" src="{{asset('assets/liga/'.$product->liga->gambar)}}" alt=""></td>
                        </tr>
                        
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{$product->jenis}}</td>
                        </tr>
                        
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{$product->berat}}</td>
                        </tr>
                        
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td>
                                <input id="qty" type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" value="{{ old('qty') }}" required autocomplete="qty" autofocus>

                                @error('qty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Name Set (isi jika tambah nameset)</strong></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>
                                <input id="name_set" type="text" class="form-control @error('name_set') is-invalid @enderror" name="name_set" value="{{ old('name_set') }}" required autocomplete="name_set" autofocus>

                                @error('name_set')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td>
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
        </div>
    </div>  
</div>
