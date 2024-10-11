<?php

namespace App\Livewire\Group;

use App\Models\Group;
use Livewire\Component;

class Create extends Component
{
    public string $name = '';

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        Group::create(['name' => $this->name]);

        session()->flash('success', 'Grupo criado com sucesso!');

        return redirect()->route('admin.groups.index');
    }

    public function render()
    {
        return view('livewire.group.create');
    }
}
