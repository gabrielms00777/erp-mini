<?php

namespace App\Livewire\Group;

use App\Models\Group;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public string $search = '';

    public function render()
    {
        return view('livewire.group.index', [
            'groups' => Group::query()
                ->where('name', 'like', '%'.$this->search.'%')
                ->paginate(10),
        ]);
    }
}
