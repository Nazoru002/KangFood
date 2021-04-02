<div>
    <form wire:submit.prevent="simpanData()" method="POST">
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nama Barang : </label>
                                <input wire:model.lazy="data.nama" class="form-control" type="text" placeholder="Masukkan Nama Barang..." required>
                            </div>

                            <div class="form-group">
                                <label for="">Deskripsi : </label>
                                <textarea wire:model.lazy="data.deskripsi" class="form-control" placeholder="Masukkan Deskripsi Jika Di-perlukan ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Harga Modal : </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input wire:model.lazy="data.harga_modal" class="form-control" type="number" aria-label="Harga Modal" aria-describedby="basic-addon1" placeholder="Ex.0" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Harga Jual : </label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    </div>
                                    <input wire:model.lazy="data.harga_jual" class="form-control" type="number" aria-label="Harga Jual" aria-describedby="basic-addon1" placeholder="Ex.0" required>
                                </div>
                            </div>                          
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
