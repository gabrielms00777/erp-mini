<?php

namespace App\Livewire\ProductType;

use App\Models\ProductType;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|max:255')]
    public string $name = '';

    public function save()
    {
        $this->validate();

        ProductType::create($this->all());

        session()->flash('success', 'Tipo de produto criado com sucesso!');

        $this->redirect('/admin/product-types', true);
    }

    public function render()
    {
        return view('livewire.product-type.create');
    }
}
