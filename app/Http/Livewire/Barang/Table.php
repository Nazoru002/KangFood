<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class Table extends Component
{
    public $data = [];
    public $data_barang = [];


    protected $listeners = [
        'refresh-table' => 'getData',
    ];

    public function mount()
    {
        $this->getData();
        $data_barang = Barang::get();
        $this->data_barang = $data_barang;
    }

    public function render()
    {
        return view('livewire.barang.table');
    }

    public function getData()
    {
        try {
            $data = Barang::orderBy('created_at', 'DESC')->get();
            $this->data = $data;
        } catch (\Exception $e) {
            $this->emit('errpr',' Terjadi Kesalahan !');
        }
    }

    public function hapusData($id)
    {
        try {
            $data = Barang::findOrFail($id);
            $data->delete();
            $this->getData();
            $this->emit('update-trashed');

            
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }
}
