@extends('layouts.admin')

@section('content')
    <div class="container pt-3">
        <h1 class="text-dark">Berita</h1>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('berita.create') }}" class="btn btn-primary">Tambah Berita</a>
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
                                    @forelse ($beritas as $berita)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/berita/' . $berita->image) }}" class="rounded"
                                                    style="width: 120px;">
                                            </td>
                                            <td>{{ $berita->title }}</td>
                                            <td>{{ $berita->tags }}</td>
                                            <td>{{ date('d F Y, H:i:s', strtotime($berita->created_at)) }}</td>
                                            <td>{{ $berita->created_at == $berita->updated_at ? '-' : date('d F Y, H:i:s', strtotime($berita->updated_at)) }}
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group-vertical">
                                                    <a href="{{ route('berita.show', $berita->id) }}"
                                                        class="btn btn-sm btn-success d-inline-block">
                                                        <i class="fa-solid fa-eye"></i></a>
                                                    <a href="{{ route('berita.edit', $berita->id) }}"
                                                        class="btn btn-sm btn-warning d-inline-block">
                                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="btn btn-sm btn-danger d-inline-block" data-toggle="modal"
                                                        data-target="#{{ 'deleteModal' . $berita->id }}">
                                                        <i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- Delete modal --}}
                                        <div class="modal fade" id="{{ 'deleteModal' . $berita->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Berita</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus berita ini?</p>
                                                        <p>Judul: <strong>{{ $berita->title }}</strong></p>
                                                    </div>
                                                    <div class="modal-footer ">
                                                        <form action="{{ route('berita.destroy', $berita->id) }}"
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
        {{ $beritas->links() }}
    </div>
@endsection
