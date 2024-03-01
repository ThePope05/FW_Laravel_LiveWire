<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Filter extends Component
{
    public $search = '';

    public function refreshPage()
    {
        $this->render();
    }

    public function resetFilter()
    {
        $this->search = '';
        $this->render();
    }

    public function render()
    {
        return view('livewire.filter', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->paginate(30),
        ]);
    }
}
