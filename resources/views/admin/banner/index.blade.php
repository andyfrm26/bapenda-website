@extends('layouts.admin')

@section('content')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <div class="container pt-3">
        <h1 class="text-dark">Banner</h1>
        <small><em>ukuran optimal banner: <strong>1920x840 pixel</strong> atau 16:7 ratio</em></small>

    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('banner.create') }}" class="btn btn-primary">Tambah Banner</a>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body table-responsive p-0" style="height: 54vh;">
                            {{-- looping disini ? --}}
                            <table class="table table-head-fixed table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 40px">No.</th>
                                        <th>Gambar</th>
                                        <th style="width: 100px">Status</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @forelse ($banners as $banner)
                                        <tr>
                                            <td>{{ ++$i }}.</td>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/banner/' . $banner->image) }}" class="rounded"
                                                    style="height: 240px;">
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('banner.toggleStatus', $banner->id) }}"
                                                    method="POST">
                                                    {{ csrf_field() }}

                                                    <button type="submit"
                                                        class="btn btn-{{ $banner->status ? 'success' : 'secondary' }}">{{ $banner->status ? 'Aktif' : 'Nonaktif' }}</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <div class="btn-group-vertical">
                                                    <a href="{{ route('banner.show', $banner->id) }}"
                                                        class="btn btn-sm btn-success d-inline-block">
                                                        <i class="fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('banner.edit', $banner->id) }}"
                                                        class="btn btn-sm btn-warning d-inline-block">
                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="btn btn-sm btn-danger d-inline-block {{ sizeof($banners) === 1 ? 'disabled' : '' }}"
                                                        data-toggle="modal"
                                                        data-target="#{{ 'deleteModal' . $banner->id }}">
                                                        <i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Delete modal --}}
                                        <div class="modal fade" id="{{ 'deleteModal' . $banner->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Banner</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus banner ini?</p>
                                                    </div>
                                                    <div class="modal-footer ">
                                                        <form action="{{ route('banner.destroy', $banner->id) }}"
                                                            method="POST">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="d-flex justify-content-center py-2">
        {{ $banners->links() }}
    </div>

    <script nonce="{{ csrf_token() }}"></script>
@endsection
