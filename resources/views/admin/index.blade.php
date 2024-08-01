@extends('layouts.master')

@section('content')
<div class="content">
    <div class="page-inner">

        <div class="col md-12 mt-4">
            <div class="card">

                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">

                        <input type="text" class="form-control col-md-4" name="search" placeholder="cari nama karyawan"
                            id="search">
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    @foreach($headers as $header)
                                    @if($header !== 'password')
                                    <th>{{ ucfirst(str_replace('_', ' ', $header)) }}</th>
                                    @endif
                                    @endforeach
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="karyawan-table-body">


                                @foreach($users as $user)
                                <tr>
                                    @foreach($headers as $header)
                                    @if($header !== 'password')
                                    <td>{{ $user->$header }}</td>
                                    @endif
                                    @endforeach
                                    <td>
                                        <button onclick="handleButtonClick({{ $user->id }})">Aksi</button>
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
