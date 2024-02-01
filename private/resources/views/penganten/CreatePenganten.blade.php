@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card">
                <div class="card-header">Form Tambah Penganten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    This is Penganten Create Page! <br/>
                    <hr/>
                    <form method="post" action="{{URl('/penganten')}}" class="" enctype= "multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Salam</label>
                            <div class="col-sm-10">
                                <input name="salam" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Tanggal</label>
                            <div class="col-sm-10">
                                <input name="tanggal" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Penganten 1</label>
                            <div class="col-sm-10">
                                <input name="nama1" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Keterangan Penganten 1</label>
                            <div class="col-sm-10">
                                <input name="keterangan1" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Gambar Penganten 1</label>
                            <div class="col-sm-10">
                            <input type="file" name="gambar1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Nama Penganten 2</label>
                            <div class="col-sm-10">
                                <input name="nama2" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Keterangan Penganten 2</label>
                            <div class="col-sm-10">
                                <input name="keterangan2" type="text" class="form-control" id="input" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input" class="col-sm-2 col-form-label">Gambar Penganten 2</label>
                            <div class="col-sm-10">
                            <input type="file" name="gambar2">
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