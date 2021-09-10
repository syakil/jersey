<div>
<div class="container">

<div class="row mb-3">
   <div class="col">      
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$liga->name}}</li>
            </ol>
        </nav>
   </div>
</div>  

<div class="row">
    <div class="col-md-8">
        <h2>List <strong>{{$liga->name}}</strong></h2>
    </div>
    <div class="col-md-4">
        <div class="input-group mb-3">
            <input wire:model="search" type="text" class="form-control" placeholder="Search.." aria-label="search" name="search" aria-describedby="search">
            <div class="input-group-prepend">
                <span class="input-group-text" id="search"><i class="fas fa-search"></i></span>
            </div>
        </div>
    </div>
</div>

{{-- best product --}}
<section class="best-products mb-5">
    <div class="row mt-4">
        @foreach($products as $list)
        <div class="col-md-3 mb-3">
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
    <div class="row">
        <div class="col">
            {{$products->links()}}
        </div>
    </div>
</section> 
</div>
</div>
