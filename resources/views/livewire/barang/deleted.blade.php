<div>
    <div class="modal fade" id="deletedModal" tabindex="-1" aria-labelledby="deletedModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletedModalLabel">Data Barang Terhapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
    
                <div class="modal-body">
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
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-danger" colspan="6" style="font-style: italic">Belum Ada Data...</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
