@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="right">
                    <a href="{{ URL('/akad/create') }}" class="btn btn-success">Tambah</a>
                    <div>&nbsp;<br /></div>
                </div>
                <div class="card">
                    <div class="card-header">Akad</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Jam 1</th>
                                    <th class="text-center">Jam 2</th>
                                    <th class="text-center">Tanggal 1</th>
                                    <th class="text-center">Tanggal 2</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($akad as $d)
                                    <tr>
                                        <td class="text-center">{{ $d->nama }}</td>
                                        <td class="text-center">{{ $d->jam1 }}</td>
                                        <td class="text-center">{{ $d->jam2 }}</td>
                                        <td class="text-center">{{ $d->tanggal1 }}</td>
                                        <td class="text-center">{{ $d->tanggal2 }}</td>
                                        <td class="text-center">{{ $d->keterangan }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <a class="btn btn-primary btn-block btn-sm mb-1"
                                                        href="{{ URL('/akad/' . $d->id . '/edit') }}">Edit</a>
                                                </div>
                                                <div class="col-md-12">
                                                    <form action="{{ URL('/akad/' . $d->id) }}" method="post"
                                                        id="formhapus">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-danger btn-block btn-sm"
                                                            type="submit">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('jquery')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#formhapus', function(e) {
                var tanya = window.confirm("Apakah Anda yakin ingin menghapus?");
                if (tanya) {
                    return true;
                } else {
                    e.preventDefault();
                    return false;
                }
            });
        });
    </script>
@endpush
