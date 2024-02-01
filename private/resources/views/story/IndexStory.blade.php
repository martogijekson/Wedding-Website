@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div align="right">
                <a href="{{ URL('/story/create') }}" class="btn btn-success">Tambah</a>
                <div>&nbsp;<br/></div>
            </div>
            <div class="card">
                <div class="card-header">Story</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($story as $d)
                            <tr>
                                <td class="text-center">{{ $d->judul }}</td>
                                <td class="text-center">{{ $d->tanggal }}</td>
                                <td class="text-center">{{ $d->keterangan }}</td>
                                <td class="text-center"><img src="{{ URL($d->gambar).'?p='.rand(0,100) }}" height="100" width="150"></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="btn btn-primary btn-block btn-sm mb-1" href="{{ URL('/story/'.$d->id.'/edit')}}">Edit</a>
                                        </div>
                                        <div class="col-md-12">
                                            <form action="{{ URL('/story/'.$d->id)}}" method="post" id="formhapus">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="delete">
                                                <button class="btn btn-danger btn-block btn-sm" type="submit">Hapus</button>
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
