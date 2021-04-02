<div>
    <form wire:submit.prevent="add()" method="POST">
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createModalLabel">Tambah Data Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nama Barang : </label>
                                <input wire:model.lazy="nama" type="text" class="form-control" placeholder="Masukkan Nama Barang..." autofocus>
                            </div>
    
                            <div class="form-group">
                                <label for="">Deskripsi Barang : </label>
                                <textarea wire:model.lazy="desk" type="text" class="form-control" placeholder="Masukkan Deskripsi Jika Diperlukan..."></textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="">Harga Modal : </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input wire:model.lazy="harga_m" type="number" class="form-control" name="harga_m" id="harga_m" aria-label="Harga Jual" aria-describedby="basic-addon1" placeholder="Masukkan Harga Modal..." required>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="">Harga Jual : </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input wire:model.lazy="harga_j" type="number" class="form-control" name="harga_j" id="harga_j" aria-label="Harga Jual" aria-describedby="basic-addon1" placeholder="Masukkan Harga Jual..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


