@extends('layouts.admin')

@section('content')
    <div class="container pt-3">
        <h1 class="text-dark">Artikel</h1>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Artikel</a>
                        </div>
                        <!-- ./card-header -->
                        <div class="card-body table-responsive p-0" style="height: 54vh;">
                            {{-- looping disini ? --}}
                            <table class="table table-head-fixed table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Tags</th>
                                        <th>Diunggah pada</th>
                                        <th>Diperbarui pada</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($artikels as $artikel)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/artikel/' . $artikel->image) }}"
                                                    class="rounded" style="width: 120px;">
                                            </td>
                                            <td>{{ $artikel->title }}</td>
                                            <td>{{ $artikel->tags }}</td>
                                            <td>{{ date('d F Y, H:i:s', strtotime($artikel->created_at)) }}</td>
                                            <td>{{ $artikel->created_at == $artikel->updated_at ? '-' : date('d F Y, H:i:s', strtotime($artikel->updated_at)) }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group-vertical">
                                                    <a href="{{ route('artikel.show', $artikel->id) }}"
                                                        class="btn btn-sm btn-success d-inline-block">
                                                        <i class="fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('artikel.edit', $artikel->id) }}"
                                                        class="btn btn-sm btn-warning d-inline-block">
                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="btn btn-sm btn-danger d-inline-block" data-toggle="modal"
                                                        data-target="#{{ 'deleteModal' . $artikel->id }}">
                                                        <i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Delete modal --}}
                                        <div class="modal fade" id="{{ 'deleteModal' . $artikel->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Artikel</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus artikel ini?</p>
                                                        <p>Judul: <strong>{{ $artikel->title }}</strong></p>
                                                    </div>
                                                    <div class="modal-footer ">
                                                        <form action="{{ route('artikel.destroy', $artikel->id) }}"
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
        {{ $artikels->links() }}
    </div>
@endsection
