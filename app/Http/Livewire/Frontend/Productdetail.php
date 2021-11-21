<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Productdetail extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->id = $product_id;
    }

    public function render()
    {
        return view('livewire.frontend.productdetail');
    }
}
