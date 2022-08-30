<?php

namespace App\Http\Livewire;

use App\Models\product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;
    public $queryString = ['search'];
    public $showProductList = false;
    public $showProductGrid= True;
    public $paginationGrid = 8;
    public $paginationList = 6;
    public $FilterProducts = "DataTerbaru";

    protected $paginationTheme = 'bootstrap';

    public function mount(){
        $this->search = request()->query('search',$this->search);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function showProductList(){
        $this->showProductList = True;
        $this->showProductGrid = False;
        $this->resetPage();
    }
    
    public function showProductGrid(){
        $this->showProductGrid = True;
        $this->showProductList = False;
        $this->resetPage();
    }

    public function render()
    {
        if ($this->showProductGrid === True) {
            if($this->FilterProducts == "DataUlasan") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationGrid) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationGrid)
                ]);
            }  elseif($this->FilterProducts == "DataAlphabet") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('nama_product')->paginate($this->paginationGrid) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('nama_product')->paginate($this->paginationGrid)
                ]);
            }  elseif($this->FilterProducts == "DataTerlaris"){
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationGrid) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationGrid)
                ]);
            }  elseif($this->FilterProducts =="DataMurahkeMahal"){
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('harga_product','asc')->paginate($this->paginationGrid) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('harga_product','asc')->paginate($this->paginationGrid)
                ]);
            }  elseif( $this->FilterProducts == "DataMahalkeMurah") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('harga_product','desc')->paginate($this->paginationGrid) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('harga_product','desc')->paginate($this->paginationGrid)
                ]);
            } else {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationGrid) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationGrid)
                ]);
            }
        } else{
            if($this->FilterProducts == "DataUlasan") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationList) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationList)
                ]);
            }  elseif($this->FilterProducts == "DataAlphabet") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('nama_product')->paginate($this->paginationList) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('nama_product')->paginate($this->paginationList)
                ]);
            }  elseif($this->FilterProducts == "DataTerlaris"){
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationList) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationList)
                ]);
            }  elseif($this->FilterProducts =="DataMurahkeMahal"){
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('harga_product','asc')->paginate($this->paginationList) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('harga_product','asc')->paginate($this->paginationList)
                ]);
            }  elseif( $this->FilterProducts == "DataMahalkeMurah") {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->orderBy('harga_product','desc')->paginate($this->paginationList) :
                     product::where('status','active')->where('nama_product','LIKE','%'.$this->search.'%')->orderBy('harga_product','desc')->paginate($this->paginationList)
                ]);
            } else {
                return view('livewire.product-index',[
                    'products' => $this->search === null ?
                     product::where('status','active')->latest()->paginate($this->paginationList) :
                     product::where('status','active')->latest()->where('nama_product','LIKE','%'.$this->search.'%')->paginate($this->paginationList)
                ]);
            }
        }
    }

    
}
