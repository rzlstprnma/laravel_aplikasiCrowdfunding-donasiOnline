@extends('layouts.back-layouts')
@section('title')
    Dashboard
@endsection


@section('content')

    <div class="material-card card">
            <div class="card-body">
                    <h4 class="card-title">Daftar Program</h4>
                    <div class="table-responsive">
                        <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="zero_config_length"><label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_config"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="zero_config" class="table table-striped border dataTable" role="grid" aria-describedby="zero_config_info">
                            <thead>
                                <tr role="row">
                                    <th colspan="2">Status</th>
                                    <th>Judul Program</th>
                                    <th>Donasi Mulai</th>
                                    <th>Donasi Berakhir</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                <tr role="row" class="odd">
                                    <td>@if ($program->isSelected == 1)
                                        <p class="badge badge-primary">Pilihan</p>
                                    @else
                                        <p class="badge badge-secondary">Biasa</p>
                                    @endif</td>
                                    <td>@if ($program->isPublished)
                                        <p class="badge badge-primary">Dipublish</p>
                                    @else
                                        <p class="badge badge-danger">Belum Dipublish</p>
                                    @endif</td>
                                    <td>{{$program->title}}</td>
                                    <td>{{$program->start_time}}</td>
                                    <td>{{$program->time_is_up}}</td>
                                    @if ($program->isPublished == 0)
                                        <td><a class="btn btn-sm btn-primary" href="/admin/published/{{$program->id}}">Publikasi</a></td>
                                    @else
                                        <td><a class="btn btn-sm btn-danger" href="/admin/published/{{$program->id}}">Batal Publikasi</a></td>
                                    @endif

                                    @if ($program->isSelected == 0)
                                        <td><a class="btn btn-sm btn-primary" href="/admin/selected/{{$program->id}}">Jadikan Program Pilihan</a></td>
                                    @else
                                        <td><a class="btn btn-sm btn-danger" href="/admin/selected/{{$program->id}}">Batal Jadikan Program Pilihan</a></td>
                                    @endif
                                    <td><a class="btn btn-sm btn-secondary" href="/admin/detail">Detail</a></td>
                                    

                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="zero_config_previous"><a href="#" aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="zero_config" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="zero_config_next"><a href="#" aria-controls="zero_config" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                </div>
    </div>

@endsection
@section('script')
<script src="{{asset('back-assets/assets/extra-libs/DataTables/datatables.min.js')}}"></script>

@endsection