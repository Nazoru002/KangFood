<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class Deleted extends Component
{
    public $data = [];
    public $data_barang = [];

    protected $listeners = [
        'update-trashed' => 'getData',
    ];

    public function mount()
    {
        $this->getData();
        $data_barang = Barang::get();
        $this->data_barang = $data_barang;
    }

    public function render()
    {
        return view('livewire.barang.deleted');
    }

    public function updateTrashed()
    {
        $this->getData();
    }

    public function getData()
    {
        try {
            $data = Barang::onlyTrashed()->get();
            $this->data = $data;
            
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function restored($id)
    {
        
    }
}
