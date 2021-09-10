<?php

namespace App\Http\Livewire;

use App\Liga;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductLiga extends Component
{
    use WithPagination;
    public $search,$liga;
    protected $updateQueryString = ['search'];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function mount($id){
        $ligaDetail = Liga::find($id) ;
        if($ligaDetail){
            $this->liga = $ligaDetail;
        }
    }
    
    public function render()
    {
        if($this->search){
            $product = Product::where('liga_id',$this->liga->id)->where('name','like','%'.$this->search.'%')->paginate(8);
        }else{
            $product = Product::where('liga_id',$this->liga->id)->paginate(8);
        }

        return view('livewire.product-liga',[
            'products'=>$product,
            'liga' => $this->liga,
        ]);
    }
}
