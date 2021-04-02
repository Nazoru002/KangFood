<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga Modal</th>
                <th scope="col">Harga Jual</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi == null ? 'Tidak ada Deskripsi !' : $item->deskripsi }}</td>
                    <td>Rp.{{ number_format($item->harga_modal, '0', ',', '.') }}</td>
                    <td>Rp.{{ number_format($item->harga_jual, '0', ',', '.') }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal" wire:click="$emit('edit-data', '{{ $item->id }}' )">
                            <i class="far fa-edit"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-danger" wire:click="hapusData({{ $item->id }})">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td> 
                </tr>
            @empty
                <tr>
                    <td class="text-center text-danger" colspan="6" style="font-style: italic">Belum Ada Data...</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
