@extends('backend.layouts.master')

@section('content')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Master Data Barang</h1>
            <div class="float-right">
                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm btn btn-sm btn-info" data-toggle="modal" data-target="#deletedModal">
                    <i class="fas fa-trash"></i>&ensp;
                    Data Terhapus
                </button>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download text-white-50"></i> Generate Report
                </a>
                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm btn btn-sm btn-info" data-toggle="modal" data-target="#createModal">
                    <i class="fas fa-plus"></i>&ensp;
                    Tambah Data
                </button>
            </div>
        </div>
        @livewire('barang.table')
        @livewire('barang.create')
        @livewire('barang.edit')
        @livewire('barang.deleted')
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            window.livewire.on('close-create', () => {
                $('#createModal').modal('hide');
            });

            window.livewire.on('close-deleted', () => {
                $('#deletedModal').modal('hide');
            });

            window.livewire.on('close-edit', () => {
                $('#editModal').modal('hide');   
            });

            $('#exampleModal').on('hidden.bs.modal', function () {
                window.livewire.emit('reset-variable');
            });
        });
    </script>
@endsection