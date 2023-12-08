<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;

class DataTable extends Component
{
    public function render()
    {
        return view('livewire.data-table',[
            'data' => Data::paginate(5)
        ]);
    }
}
