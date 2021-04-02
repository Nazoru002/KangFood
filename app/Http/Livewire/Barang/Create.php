<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class Create extends Component
{
    public $nama = null;
    public $desk = null;
    public $harga_m = 0;
    public $harga_j = 0;
    public $data_barang = [];

    protected $listeners = [
        'reset-variable' => 'resetVariable',
    ];

    public function mount()
    {
        $data_barang = Barang::get();
        $this->data_barang = $data_barang;
    }

    public function render()
    {
        return view('livewire.barang.create');
    }

    public function add()
    {
        try {
            $barang = Barang::firstOrCreate([
                'nama' => $this->nama,
                'deskripsi' => $this->desk,
                'harga_modal' => $this->harga_m,
                'harga_jual' => $this->harga_j
            ]);
            
            $this->emit('refresh-table');
            $this->emit('close-create');
            $this->emit('reset-variable');
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function resetVariable()
    {
        $this->reset([
            'nama',
            'desk',
            'harga_m',
            'harga_j'
        ]);
    }
}
