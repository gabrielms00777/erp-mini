<?php

namespace App\Livewire\ProductType;

use App\Models\ProductType;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public ?ProductType $productType;

    public bool $isOpen = false;

    #[On('loadProductType')]
    public function loadProductType(ProductType $productType)
    {
        $this->productType = $productType;
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.product-type.show');
    }
}
