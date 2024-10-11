<?php

namespace App\Livewire\ProductType;

use App\Models\ProductType;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    public ?ProductType $productType;

    public bool $isOpen = false;

    #[On('deleteProductType')]
    public function deleteProductType(ProductType $productType)
    {
        $this->productType = $productType;
        $this->isOpen = true;
    }

    public function delete()
    {
        $this->productType->delete();

        $this->isOpen = false;

        $this->dispatch('refreshProductTypes');

        // session()->flash('success', 'Tipo de produto deletado com sucesso.');

        // $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.delete');
    }
}
