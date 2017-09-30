@extends('template.main')

@section('content')
<div class="row" id="search bar">
    {!! Form::open() !!}
        {!! Form::label('') !!}
    <div class="col-sm-2">
        <label class="control-label lead pull-right" for="formInput76">
            <p>Cari Umat</p>
        </label>
    </div>
    <div class="col-md-9">
        <input type="text" class="form-control text-nowrap pull-right" id="formInput76" placeholder="Placeholder text">
    </div>
    <div class="col-sm-1 pull-right">
        <button type="button" class="btn btn-primary pull-right" data-placement="auto right">Cari</button>
    </div>
    {!! Form::close() !!}
</div>
<div class="row" id="table">
    <div class="table-responsive">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                    <th>Username</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>@fat</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row" id="pager">
    <div class="col-md-12 text-center lead text-nowrap">
        <ul class="pagination">
            <li>
                <a href="#">&laquo;</a>
            </li>

            <li class="active">
                <a href="#">1 <span class="sr-only">(current)</span></a>
            </li>

            <li>
                <a href="#">2</a>
            </li>

            <li>
                <a href="#">3</a>
            </li>

            <li>
                <a href="#">&raquo;</a>
            </li>
        </ul>
    </div>
</div>
    @endsection

@section('pageTitle')
    Data Umat
@endsection