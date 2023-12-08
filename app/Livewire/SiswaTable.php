<?php

namespace App\Http\Livewire;

use App\Models\Data;
use Livewire\Component;


class SiswaTable extends Component {

    public function render() {
        return view('livewire.siswa-table', [ 
            'Data' => Dat::paginate(5)
        ]);
    }
}