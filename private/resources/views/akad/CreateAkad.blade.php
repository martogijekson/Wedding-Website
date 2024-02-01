@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Form Tambah Akad</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        This is Akad Create Page! <br />
                        <hr />
                        <form method="post" action="{{ URl('/akad') }}" class="" enctype= "multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" class="form-control" id="input" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Jam 1</label>
                                <div class="col-sm-10">
                                    <input name="jam1" type="text" class="form-control" id="input" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Jam 2</label>
                                <div class="col-sm-10">
                                    <input name="jam2" type="text" class="form-control" id="input" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tanggal 1</label>
                                <div class="col-sm-10">
                                    <input name="tanggal1" type="text" class="form-control" id="input"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tanggal 2</label>
                                <div class="col-sm-10">
                                    <input name="tanggal2" type="text" class="form-control" id="input"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input name="keterangan" type="text" class="form-control" id="input"
                                        placeholder="">
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
