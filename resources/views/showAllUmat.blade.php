@extends('template.main')

@section('content')
<div class="row" id="search bar">
    {!! Form::open(['url' => 'cariUmat', 'method' => 'get', 'class' => 'form-horizontal']) !!}
        <div class="col-sm-2">
            {!! Form::label('cariUmat', 'Cari Umat :', ['class' => 'control-label lead']) !!}
        </div>
        <div class="col-sm-9">
            {!! Form::text('cariUmat', '', ['class' => 'form-control text-nowrap', 'placeholder' => 'Nama Jemaat']) !!}
        </div>
        <div class="col-sm-1">
            {!! Form::submit('Cari', ['class' => 'form-control btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
<div class="row">
    <div class="col-sm-12">
        <h4 align="right">
            Menampilkan Hasil ke
            {{ (($datas->currentPage() -1)* $datas->perPage()) +1 }} sampai
            {{ (($datas->currentPage() -1) * $datas->perPage()) + $datas->perpage() }} dari
            {{ $datas->total() }}
        </h4>
    </div>
</div>
<div class="row" id="table">
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Jemaat</th>
                    <th>Tempat,Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Gol Darah</th>
                    <th>Baptis</th>
                    <th>Sidi</th>
                    <th>Menikah</th>
                    <th>Jemaat Sejak</th>
                    <th>Pindah</th>
                    <th>Pendidikan</th>
                    <th>Wilayah</th>
                </tr>
                </thead>

                <tbody>
                @foreach($datas as $indexKey => $d)
                <tr>
                    <td>
                        {{ (($datas->currentPage() -1) * $datas->perPage()) + ($indexKey + 1) }}
                    </td>
                    <td nowrap>
                        <a href="detailUmat/{{ $d->umat_regid }}">
                            {{ $d->umat_namadepan }} {{ $d->umat_namatengah }} {{ $d->umat_namabelakang }}
                        </a>
                    </td>
                    <td nowrap>
                        {{ $d->umat_tplahir }}, {{ Carbon\Carbon::parse($d->umat_tglahir)->format('d M Y') }}
                    </td>
                    <td nowrap>
                        @if($d->umat_jk == "L")
                            Laki-Laki
                        @else
                            Perempuan
                        @endif
                    </td>
                    <td nowrap>
                        {{ $d->umat_goldarah }}
                    </td>

                    <td nowrap>
                        @if($d->umat_baptis == true)
                            @if($d->dibaptis === null)
                                No Data
                            @else
                            {{ \Carbon\Carbon::parse($d->dibaptis->bap_tglbaptis)->format('d M Y') }}
                            @endif
                        @else
                            Belum Dibaptis
                        @endif
                    </td>

                    <td nowrap>
                        @if($d->umat_sidi == true)
                            @if($d->naikSidi === null)
                                No Data
                            @else
                            {{ \Carbon\Carbon::parse($d->naikSidi->sidi_tglsidi)->format('d M Y') }}
                            @endif
                        @else
                            Belum Naik Sidi
                        @endif
                    </td>

                    <td nowrap>
                        @if($d->umat_menikah == true)
                            @if($d->menikah === null)
                                No Data
                            @else
                                {{ \Carbon\Carbon::parse($d->menikah->nik_tglnikah)->format('d M Y') }}
                            @endif
                        @else
                            Belum Menikah
                        @endif
                    </td>

                    <td nowrap>
                        {{ \Carbon\Carbon::parse($d->umat_tglmasuk)->format('d M Y') }}
                    </td>

                    <td nowrap>
                        @if($d->umat_pindah == true)
                            @if($d->pindah === null)
                                No Data
                            @else
                                {{ \Carbon\Carbon::parse($d->pindah->pin_tanggalpindah)->format('d M Y') }}
                            @endif
                        @else
                            Aktif
                        @endif
                    </td>

                    <td nowrap>
                        {{ $d->umat_pendidikan }}
                    </td>

                    <td nowrap>
                        {{ $d->wilayah->wil_namawilayah }}
                    </td>

                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row" id="pager">
    <div class="col-md-12 text-center lead text-nowrap">
        <ul class="pagination">
            @if(!isset($input))
            {{$datas->links()}}
            @else
            {{$datas->appends($input)->links() }}
            @endif

        </ul>

    </div>

</div>

    @endsection

@section('pageTitle')
    Data Umat
@endsection