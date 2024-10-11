<?php

namespace App\Livewire\Group;

use App\Models\Group;
use Livewire\Component;

class Show extends Component
{
    public Group $group;

    public bool $isOpen = false;

    public function loadGroup(Group $group)
    {
        $this->group = $group;
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.group.show');
    }
}
