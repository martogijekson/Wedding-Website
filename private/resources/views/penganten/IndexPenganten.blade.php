@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div align="right">
                <a href="{{URL('/penganten/create')}}" class="btn btn-success">Tambah</a>
                <div>&nbsp;<br/></div>
            </div>
            <div class="card">
                <div class="card-header">Penganten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>This is Penganten's Page! Welcome to My Website.</p>

                    <div class="table-responsive"> <!-- Tambahkan class table-responsive untuk membuat tabel dapat discroll -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Salam</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Nama1</th>
                                    <th class="text-center">Keterangan1</th>
                                    <th class="text-center">Gambar1</th>
                                    <th class="text-center">Nama2</th>
                                    <th class="text-center">Keterangan2</th>
                                    <th class="text-center">Gambar2</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($penganten as $d)
                                    <tr>
                                        <td class="text-center">{{ $d->salam }}</td>
                                        <td class="text-center">{{ $d->tanggal }}</td>
                                        <td class="text-center">{{ $d->title }}</td>
                                        <td class="text-center">{{ $d->nama1 }}</td>
                                        <td class="text-center">{{ $d->keterangan1 }}</td>
                                        <td class="text-center"><img src="{{ URL($d->gambar1).'?p='.rand(0,100) }}" height="100" width="150"></td>
                                        <td class="text-center">{{ $d->nama2 }}</td>
                                        <td class="text-center">{{ $d->keterangan2 }}</td>
                                        <td class="text-center"><img src="{{ URL($d->gambar2).'?p='.rand(0,100) }}" height="100" width="150"></td>
                                        <td>
                                        <div class="row">
                    <div class="col-md-12"> <!-- Ubah grid ke 12 kolom agar tombol Edit dan Hapus muncul secara vertikal -->
                    <div class="text-center mb-1">
                        <a class="btn btn-primary btn-block btn-sm" href="{{ URL('/penganten/'.$d->id.'/edit')}}">Edit</a>
                    </div>
                    <div class="text-center">
                        <form action="{{ URL('/penganten/'.$d->id)}}" method="post" id="formhapus">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger btn-block btn-sm" type="submit">Hapus</button>
                        </form>
                    </div>
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
</div>

@endsection

@push('jquery')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('submit','#formhapus',function(e){
                var tanya = window.confirm("Apakah Anda yakin ingin menghapus?");
                if(tanya){
                    return true;
                }else{
                    e.preventDefault();
                    return false;
                }
        });
    });
</script>
@endpush
