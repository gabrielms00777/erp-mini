<?php

namespace App\Livewire\ProductType;

use App\Models\ProductType;
use Livewire\Component;

class Edit extends Component
{
    public ProductType $productType;

    public ?string $name;

    public function mount()
    {
        $this->name = $this->productType->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->productType->update([
            'name' => $this->name,
        ]);

        session()->flash('success', 'Tipo de produto editado com sucesso!');

        $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.edit');
    }
}
