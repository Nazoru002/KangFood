<?php

namespace App\Http\Livewire\Barang;

use App\Barang;
use Livewire\Component;

class Edit extends Component
{
    public $data = [];
    public $data_barang = [];

    protected $listeners = [
        'edit-data' => 'editData'
    ];

    public function mount()
    {
        $data_barang = Barang::get();
        $this->data_barang = $data_barang;
    }

    public function render()
    {
        return view('livewire.barang.edit');
    }
    
    public function editData($id)
    {
        try {
            $edit = Barang::findOrFail($id);
            $this->data = $edit->toArray();

        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }

    public function simpanData()
    {
        try {
            $simpan = Barang::findOrFail($this->data['id']);

            $simpan->update([
                'nama' => $this->data['nama'],
                'deskripsi' => $this->data['deskripsi'],
                'harga_modal' => $this->data['harga_modal'],
                'harga_jual' => $this->data['harga_jual']
            ]);
            $this->emit('success', 'Data berhasil Di-ubah !');
            $this->emit('close-edit');
            $this->emit('refresh-table');
        } catch (\Exception $e) {
            $this->emit('error', 'Terjadi Kesalahan !');
        }
    }
}
