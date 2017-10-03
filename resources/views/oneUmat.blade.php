@extends('template.main')

@section('content')
    <div class="row">
        <div class="col-md-12" style="border-bottom-width: 1px; border-bottom-color: #aaaaaa; border-bottom-style: double ">
            <h5>
                No. Reg Umat : {{ $datas->umat_regid }}
            </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $datas->umat_namadepan }} {{ $datas->umat_namatengah }} {{ $datas->umat_namabelakang }}
            </h1>
        </div>
        <div class="col-md-6">
            <h3>
                @if($datas->keluargaDari == null)
                  -----
                @else
                    Anak dari Bpk. {{ $datas->keluargaDari->namaKK->umat_namadepan }} {{ $datas->keluargaDari->namaKK->umat_namatengah }} {{ $datas->keluargaDari->namaKK->umat_namabelakang }}
                @endif
            </h3>
            {{--<h3>Istri Dari Maskulin Sitohang</h3>--}}
        </div>
        <div class="col-md-6">
            {{--<h3>Anak Ke 3 dari 4 bersaudara</h3>--}}
            <h3>Umur {{ \Carbon\Carbon::parse($datas->umat_tglahir)->diffInYears(Carbon\Carbon::now()) }} Thn</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="border-top-color: #dddddd; border-top-width: 5px; border-top-style: double">

            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Tempat, Tgl Lahir</b></h3>
                </div>
                <div class="col-sm-9">
                    <h3>{{ $datas->umat_tglahir }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Alamat</b></h3>
                </div>
                <div class="col-sm-9">
                    <h3>{{ $datas->umat_alamat }}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Golongan Darah</b></h3>
                </div>
                <div class="col-sm-3">
                    <h3>{{ $datas->umat_goldarah }}</h3>
                </div>
                <div class="col-sm-3">
                    <h3><b>Jenis Kelamin</b></h3>
                </div>
                <div class="col-sm-3">
                    <h3>
                        @if($datas->umat_jk == 'L')
                            Laki-Laki
                        @else
                            Perempuan
                        @endif
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Tanggal Baptis</b></h3>
                </div>
                <div class="col-sm-3">
                    <h3>
                        @if($datas->umat_baptis == 0)
                            Belum Baptis
                        @else
                            @if($datas->dibaptis == null)
                                No Data
                            @else
                                {{ \Carbon\Carbon::parse($datas->dibaptis->bap_tglbaptis)->format('d M Y')}}
                            @endif
                        @endif
                    </h3>
                </div>
                <div class="col-sm-3">
                    <h3><b>Tanggal Sidi</b></h3>
                </div>
                <div class="col-sm-3">

                    <h3>
                        @if($datas->umat_sidi == 0)
                            Belum Naik Sidi
                        @else
                            @if($datas->naiksidi == null)
                                No Data
                            @else
                                {{ \Carbon\Carbon::parse($datas->naiksidi->sidi_tglsidi)->format('d M Y') }}
                            @endif

                        @endif
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Tanggal Menikah</b></h3>
                </div>
                <div class="col-sm-3">
                <h3>
                    @if($datas->umat_sidi == 0)
                        Belum Menikah
                    @else
                        @if($datas->menikah == null)
                            No Data
                        @else
                            {{ \Carbon\Carbon::parse($datas->menikah->nik_tglnikah)->format('d M Y') }}
                        @endif
                    @endif
                </h3>
                </div>
                <div class="col-sm-3">
                    <h3><b>Tanggal Pindah</b></h3>

                </div>
                <div class="col-sm-3">
                    <h3>
                        @if($datas->umat_pindah == 0)
                            Aktif
                        @else
                            @if($datas->pindah == null)
                                Sudah Pindah
                            @else
                                {{ \Carbon\Carbon::parse($datas->pindah->pin_tanggalpindah)->format('d M Y') }}
                            @endif
                        @endif
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Pendidikan Terakhir</b></h3>
                </div>
                <div class="col-sm-9">
                    <h3>
                        {{ $datas->umat_pendidikan }}
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Pekerjaan</b></h3>
                </div>
                <div class="col-sm-9">
                    <h3>
                        @if($datas->umat_tempatkerja == null && $datas->umat_jabatankerja == null)
                            Belum Bekerja
                        @else
                            @if($datas->umat_tempatkerja == null)
                              {{ $datas->umat_jabatankerja }}
                            @else
                                {{ $datas->umat_jabatankerja }} di {{ $datas->umat_tempatkerja }}
                            @endif
                        @endif
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Status Jemaat</b></h3>
                </div>
                <div class="col-sm-3">
                    <h3>
                        {{ $datas->status->status_nama }}
                    </h3>
                </div>
                <div class="col-sm-3">
                    <h3><b>Jabatan Gereja</b></h3>
                </div>
                <div class="col-sm-3">
                    <h3>
                        @if($datas->umat_jabatangereja == null)
                            No Data
                        @else
                            @if($datas->jabatan == null)
                                No Data
                            @else
                                {{ $datas->jabatan->jabg_namajabatan }}
                            @endif
                        @endif
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <h3><b>Jabatan Organisasi</b></h3>
                </div>
                <div class="col-sm-9">
                    <h3>
                        @if($datas->umat_jabatanorgangereja == null)
                            No Data
                        @else
                            @if($datas->jabatanOrganisasi == null)
                                No Data
                            @else
                                {{ $datas->jabatanOrganisasi->jabog_namajabatan }}
                            @endif
                        @endif
                    </h3>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('pageTitle')
    Detail Umat No. Reg. {{ $datas->umat_regid }}
@endsection