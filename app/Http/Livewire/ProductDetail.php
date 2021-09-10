<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public function mount($id){
        $detail = Product::find($id) ;
        if($detail){
            $this->product = $detail;
        }
    }

    public function render()
    {
        return view('livewire.product-detail',[
            'product' => $this->product
        ]);
    }
}
