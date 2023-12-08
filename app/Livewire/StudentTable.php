<?php

namespace App\Livewire;

use App\Models\Data;
use Livewire\Component;
use Livewire\WithPagination;

class StudentTable extends Component
{
    public $search = '';

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.student-table', [ 
            'Data' => Data::where('Nama', 'like', '%'.$this->search. '%')->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

