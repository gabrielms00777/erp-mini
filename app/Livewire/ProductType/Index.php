<?php

namespace App\Livewire\ProductType;

use App\Models\ProductType;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';

    #[Computed()]
    public function productTypes()
    {
        return ProductType::query()->when($this->search, function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%');
        })->paginate(10);
    }

    #[On('refreshProductTypes')]
    public function render()
    {
        return view('livewire.product-type.index');
    }
}
