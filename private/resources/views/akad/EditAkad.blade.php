@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">Form Edit Akad</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        This is Akad's Edit Page! <br />
                        <hr />
                        <form method="post" action="{{ URl('/akad/' . $data->id) }}" class=""
                            enctype= "multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name ="_method" value="PUT">
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" class="form-control" id="input" placeholder=""
                                        value="{{ $data->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Jam 1</label>
                                <div class="col-sm-10">
                                    <input name="jam1" type="text" class="form-control" id="input" placeholder=""
                                        value="{{ $data->jam1 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Jam 2</label>
                                <div class="col-sm-10">
                                    <input name="jam2" type="text" class="form-control" id="input" placeholder=""
                                        value="{{ $data->jam2 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tanggal 1</label>
                                <div class="col-sm-10">
                                    <input name="tanggal1" type="text" class="form-control" id="input" placeholder=""
                                        value="{{ $data->tanggal1 }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tanggal 2</label>
                                <div class="col-sm-10">
                                    <input name="tanggal2" type="text" class="form-control" id="input" placeholder=""
                                        value="{{ $data->tanggal }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <input name="keterangan" type="text" class="form-control" id="input"
                                        placeholder="" value="{{ $data->keterangan }}">
                                </div>
                            </div>

                            <div class="col-md-12" align="right">
                                <input type="submit" name= "simpan" class="btn btn-success" value="Update">
                                <input type="reset" name="kosongkan" class="btn btn-default" value="Kosongkan">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
