<?php

namespace App\Livewire\Group;

use App\Models\Group;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    public Group $group;

    public bool $isOpen = false;

    #[On('confirmDelete')]
    public function deleteGroup(Group $group)
    {
        $this->group = $group;
        $this->isOpen = true;
    }

    public function delete()
    {
        $this->group->delete();
        $this->isOpen = false;

        $this->dispatch('refreshGroups');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.group.delete');
    }
}
