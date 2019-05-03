@extends('layouts.back-layouts')
@section('title')
    Dashboard
@endsection


@section('content')

    <div class="material-card card">
            <div class="card-body">
                    <h4 class="card-title">Daftar Program</h4>
                    <div class="table-responsive">
                            <table id="zero_config" class="table no-wrap user-table" role="grid" aria-describedby="zero_config_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Status</th>
                                            <th>Orang Melaporkan</th>
                                            <th>Judul Program</th>
                                            <th>Mulai Pada</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programs as $program)
                                        <tr role="row" class="odd">
                                            <td>@if ($program->isSelected == 1)
                                                <p class="badge badge-success">Program Pilihan</p>
                                            @else
                                                <p class="badge badge-secondary">Program Biasa</p>
                                            @endif
                                            @if ($program->isPublished)
                                                <p class="badge badge-success">Dipublish</p>
                                            @else
                                                <p class="badge badge-danger">Belum Dipublish</p>
                                            @endif</td>
                                            <td>Orang Melaporkan <p class="badge badge-danger badge-pill">{{$program->report->count()}}</p></td>
                                            <td>{{$program->title}}</td>
                                            <td>{{$program->created_at->toDateString()}}</td>
                                            
                                            <td><a class="btn btn-sm btn-secondary" href="/admin/detail/{{$program->id}}">Detail</a>
                                            <a class="btn btn-sm btn-danger" href="/admin/hapus/{{$program->id}}">Hapus Program</a>
                                            </td>
                                            
        
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                    </div>
                </div>
    </div>

@endsection