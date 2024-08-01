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

                                    <th>Aksi</th>
                                    <th>Nama</th>
                                    <th>Matkul</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="karyawan-table-body">

                                @php
                                $no = 1;
                                @endphp
                                @foreach($dosen as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama_dosen }}</td>
                                    <td>
                                        @foreach($item->matkul as $matkul)
                                            {{ $matkul->nama_mk }}<br>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($item->kelas as $kelas)
                                        {{ $kelas->nama_kelas }}<br>
                                        <!-- Adjust based on your Kelas model's attributes -->
                                        @endforeach
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
