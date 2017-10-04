@extends('template.main')

@section('css')
    <link href="/css/checkbox.css" rel="stylesheet">

@endsection

@section('pageTitle')
    Umat Baru
@endsection

@section('content')
    <div class="container" style="font-family: 'Open Sans', sans-serif;">
        <div class="centered title"><h1>Tambahkan Umat Baru</h1></div>
    </div>
    <hr class="featurette-divider"></hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                {!! Form::open(['url' => '/', 'method' => 'post', 'class' => 'form', 'id' => 'umatBaru']) !!}
                    <div class="form-row">
                        <div class="form-group required col-sm-4 form-group-lg">
                            {!! Form::label('namaDepan', 'Nama Depan', ['class' => 'control-label']) !!}
                            {!! Form::text('namaDepan', '', ['class' => 'form-control', 'placeholder' => 'Nama Depan']) !!}
                        </div>
                        <div class="form-group-lg col-sm-4">
                            {!! Form::label('namaTengah', 'Nama Tengah', ['class' => 'control-label']) !!}
                            {!! Form::text('namaTengah', '', ['class' => 'form-control', 'placeholder' => 'Nama Tengah']) !!}
                        </div>
                        <div class="form-group-lg col-sm-4 required">
                            {!! Form::label('namaBelakang', 'Nama Belakang/Marga', ['class' => 'control-label']) !!}
                            {!! Form::text('namaBelakang', '', ['class' => 'form-control', 'placeholder' => 'Nama Belakang']) !!}
                        </div>
                    </div>
                    &nbsp;
                    <div class="form-row">
                        <div class="form-group-lg required col-sm-6 pull-left">
                            {!! Form::label('tempatLahir', 'Tempat Lahir', ['class' => 'control-label']) !!}
                            {!! Form::text('tempatLahir', '', ['class' => 'form-control', 'placeholder' => 'Tempat Lahir']) !!}
                        </div>

                        <div class="form-group-lg required col-sm-6">
                            {!! Form::label('tgLahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
                            <div class="form-group-lg required card" id="tgLahir">
                                <div class="col-sm-3">
                                    {!! Form::selectRange('tanggalLahir', 1, 31 , null , ['class' => 'form-control', 'placeholder'=>'Tgl']) !!}
                                </div>
                                <div class="col-sm-6">
                                    {!! Form::selectMonth('bulanLahir' , null , ['class' => 'form-control', 'placeholder' => 'Bulan']) !!}
                                </div>

                                <div class="col-sm-3">
                                    {!! Form::selectRange('tahunLahir', 1922, 2017 , null , ['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-lg col-sm-6">
                            {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
                            {!! Form::textarea('alamat', '', ['class' => 'form-control', 'placeholder' => 'Alamat']) !!}
                        </div>
                        
                        <div class="form-group-lg col-sm-6">
                            {!! Form::label('wilayah', 'Wilayah', ['class' => 'control-label']) !!} 
                            {!! Form::select('wilayah', [] , null , ['class' => 'form-control', 'placeholder' => 'Wilayah']) !!}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-lg col-sm-6">
                            {!! Form::label('noTelp', 'No. Telepon/HP', ['class' => 'control-label']) !!}
                            {!! Form::text('noTelp', '', ['class' => 'form-control', 'placeholder' => 'No. Telepon/HP']) !!}
                        </div>

                        <div class="form-group-lg col-sm-6">
                            {!! Form::label('tgMasuk', 'Tanggal Masuk', ['class' => 'control-label']) !!}
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                {!! Form::date('tgMasuk', \Carbon\Carbon::now(), ['id' => 'tgMasuk', 'class' => 'form-control input-group']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-lg col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    {!! Form::label('golDarah', 'GOlongan Darah', ['class' => 'control-label']) !!}
                                    {!! Form::select('golDarah', ['A' => 'A', 'B' => 'B' , 'AB' => 'AB', 'O' => 'O'] , null , ['class' => 'form-control', 'placeholder' => 'Gol Darah']) !!}
                                </div>

                                <div class="col-sm-6">
                                    {!! Form::label('jk', 'Jenis Kelamin', ['class' => 'control-label']) !!}
                                    {!! Form::select('jk', ['L' => 'Laki-laki', 'P' => 'Perempuan'] , null , ['class' => 'form-control', 'placeholder' => 'Jenis Kelamin']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-lg col-sm-4">
                            <div class="btn-group-lg checkbox">
                                <label for="baptis" class="btn btn-default btn-block">
                                    {!! Form::checkbox('baptis', '0', null,  ['id' => 'baptis', 'class' => 'btn btn-default']) !!}
                                    <span class="cr"><span class="cr-icon glyphicon glyphicon-ok"></span></span>
                                    {!! Form::label('baptis', 'Baptis', ['class' => 'control-label']) !!}
                                </label>
                            </div>
                            <div class="input-group" id="tgBaptis" style="display: none;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                {!! Form::date('tgBaptis', \Carbon\Carbon::now(), [ 'class' => 'form-control']) !!}
                            </div>
                        </div>


                        <div class="form-group-lg col-sm-4">
                            <div class="btn-group-lg checkbox">
                                <label for="sidi" class="btn btn-default btn-block">
                                    {!! Form::checkbox('sidi', '0', null,  ['id' => 'sidi', 'class' => 'btn btn-default']) !!}
                                    <span class="cr"><span class="cr-icon glyphicon glyphicon-ok"></span></span>
                                    {!! Form::label('sidi', 'Naik Sidi', ['class' => 'control-label']) !!}
                                </label>
                            </div>
                            <div class="input-group" id="tgSidi" style="display: none;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                {!! Form::date('tgSidi', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group-lg col-sm-4">
                            <div class="btn-group-lg checkbox">
                                <label for="menikah" class="btn btn-default btn-block">
                                    {!! Form::checkbox('menikah', '0', null,  ['id' => 'menikah', 'class' => 'btn btn-default']) !!}
                                    <span class="cr"><span class="cr-icon glyphicon glyphicon-ok"></span></span>
                                    {!! Form::label('menikah', 'Menikah', ['class' => 'control-label']) !!}
                                </label>
                            </div>

                            <div class="input-group" id="tgNikah" style="display: none;">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
                                {!! Form::date('tgNikah', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-lg col-sm-6">
                            <div class="btn-group-lg checkbox">
                                <label for="pindah" class="btn btn-default btn-block">
                                    	{!! Form::checkbox('pindah', '1', null,  ['id' => 'pindah', 'class' => 'btn btn-default']) !!}
                                        <span class="cr"><span class="cr-icon glyphicon glyphicon-remove"></span></span>
                                        {!! Form::label('pindah', 'Status Pindah', ['class' => 'control-label']) !!}
                                </label>
                            </div>
                            {!! Form::date('tgPindah', \Carbon\Carbon::now(), ['id' => 'tgPindah', 'class' => 'form-control', 'style' => 'display: none;']) !!}
                        </div>

                        <div class="form-group-lg col-sm-6">
                            <div class="btn-group-lg checkbox">
                                <label for="meninggal" class="btn btn-default btn-block">
                                    {!! Form::checkbox('meninggal', '1', null,  ['id' => 'meninggal', 'class' => 'btn btn-default']) !!}
                                    <span class="cr"><span class="cr-icon glyphicon glyphicon-remove"></span></span>
                                    {!! Form::label('meninggal', 'Meninggal', ['class' => 'control-label']) !!}
                                </label>
                            </div>
                            {!! Form::date('tgMeninggal', \Carbon\Carbon::now(), ['id' => 'tgMeninggal', 'class' => 'form-control', 'style' => 'display: none;']) !!}
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group-lg col-sm-4">
                                {!! Form::label('pendidikan', 'Pendidikan', ['class' => 'control-label']) !!}
                                {!! Form::select('pendidian', [
                                    'SD' => 'SD',
                                    'SMP' => 'SMP',
                                    'SMA' => 'SMA',
                                    'S1' => 'S1',
                                    'S2' => 'S2',
                                    'S3' => 'S3',
                                    'Lain-Lain' => 'Lain-Lain'
                                ], null , ['class' => 'form-control', 'placeholder' => 'Pendidikan']) !!}
                            </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('headScript')
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#baptis').change(function(){
                if(this.checked)
                    $('#tgBaptis').fadeIn('slow');
                else
                $('#tgBaptis').fadeOut('slow');

            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#sidi').change(function(){
                if(this.checked)
                    $('#tgSidi').fadeIn('slow');
                else
                    $('#tgSidi').fadeOut('slow');

            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#menikah').change(function(){
                if(this.checked)
                    $('#tgNikah').fadeIn('slow');
                else
                    $('#tgNikah').fadeOut('slow');

            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#pindah').change(function(){
                if(this.checked)
                    $('#tgPindah').fadeIn('slow');
                else
                    $('#tgPindah').fadeOut('slow');

            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#meninggal').change(function(){
                if(this.checked)
                    $('#tgMeninggal').fadeIn('slow');
                else
                    $('#tgMeninggal').fadeOut('slow');

            });
        });
    </script>

@endsection