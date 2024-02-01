@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Form Tambah Story</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Story's Create Page! <br/>
                    <hr/>
                    <form method="post" action="{{URl('/story')}}" class="" enctype= "multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input name="judul" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input name="tanggal" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <input name="keterangan" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                            <input type="file" name="gambar">
                            </div>
                        </div>
                        <div class="col-md-12" align="right">
                            <input type="submit" name= "simpan" class="btn btn-success" value="Simpan">
                            <input type="reset" name="kosongkan" class="btn btn-default" value="Kosongkan">
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection