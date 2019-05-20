@extends('layouts.back-layouts')
@section('title')
   {{$program->title}}
@endsection

<style>
.tab-content img, .card-body img{
    width: 100%;
}
</style>

@section('content')
<div class="row">
    <div class="col-md-6">
<div class="card material-card">
        <img class="card-img-top" src="{{$program->getFoto()}}" alt="Card image cap">
        <div class="card-body">
            <div class="d-flex no-block align-items-center mb-3">
                <span style="border-right: 1px solid #CBD2DA;" class="text-muted pr-4">Dibuat Pada : {{$program->created_at->toDateString()}}</span>
                <div class="ml-3">
                    <span style="border-right: 1px solid #CBD2DA;" class="text-muted pr-4">Berakhir Pada : {{ $program->time_is_up }}</span>
                </div>
                <div class="ml-3">
                    @if ($program->isPublished == 1)    
                        <span class="badge badge-success">Published <i class="ti-check"></i></span>
                    @else
                        <span class="badge badge-danger">Belum Dipublish</span>
                    @endif
                </div>
            </div>
            <div class="d-flex no-block align-items-center mb-3">
                <span style="color: #2cd07e; border-right: 1px solid #2cd07e;" class="pr-4">{{$program->category->category_name}}</span>
                <div class="ml-3">
                    <span style="color: #2cd07e; border-right: 1px solid #2cd07e;" class="pr-4"><i class="ti-heart"></i> {{ $program->time_is_up }} Berdonasi</span>
                </div>
                <div class="ml-3">
                    @if ($program->isSelected == 1)
                        <span class="badge badge-success">Program Pilihan <i class="ti-check"></i></span>
                    @endif
                </div>
            </div>
            <h3 class="mt-3 text-uppercase">{{$program->title}}</h3>
            <p class="mt-3 font-light">{{$program->brief_explanation}}</p>
            <div class="float-right">
                @if ($program->isPublished == 0)
                    <a class="btn btn-success waves-effect waves-light mt-2 text-white" href="/admin/published/{{$program->id}}">Publikasi</a>
                @else
                    <a class="btn btn-danger waves-effect waves-light mt-2 text-white" href="/admin/published/{{$program->id}}">Batal Publikasi</a>
                @endif
                @if ($program->isSelected == 0)
                <a class="btn btn-primary waves-effect waves-light mt-2 text-white" href="/admin/selected/{{$program->id}}">Jadikan Program Pilihan</a>
                @else
                <a class="btn btn-danger waves-effect waves-light mt-2 text-white"href="/admin/selected/{{$program->id}}">Batal Jadikan Program Pilihan</a>
                @endif
            </div>
            @if ($program->donation_collected >= $program->donation_target)
                <span class="alert alert-success float-left" >Terdanai <i class="ti-check"></i></span>
            @endif
        </div>
    </div>
    </div>
    <div class="col-md-6">
        
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Deskripsi</span></a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Laporan Perkembangan</span></a> </li>
        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#laporanuser" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Laporan dari User</span></a> </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home2" role="tabpanel">
            <div class="p-4 text-justify">
                {!! $program->description !!}
            </div>
        </div>
        <div class="tab-pane  p-4" id="profile2" role="tabpanel">
                <div class="mb-4">
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($devs as $dev)
                        <div id="accordion" class="accordion">
                            <div class="card mb-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne{{$i}}" aria-expanded="false" aria-controls="collapseOne{{$i}}">
                                  UPDATE #{{$i}}
                                </button>
                              </h5>
                                </div>
                                <div id="collapseOne{{$i}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body text-justify">
                                        <h3>{{$dev->title}}</h3>
                                        <span class="text-muted">{{$dev->created_at->toDateString()}}</span><br><br>
                                        {!! $dev->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                </div>
        </div>
        <div class="tab-pane p-4" id="laporanuser" role="tabpanel">
                <div class="mb-4">
                    @php
                        $ab = 1;
                    @endphp
                        @foreach ($reports as $report)
                            <div id="accordion1" class="accordion">
                                <div class="card mb-1">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne{{$ab}}" aria-expanded="false" aria-controls="collapseOne{{$ab}}">
                                      LAPORAN #{{$ab}}
                                    </button>
                                  </h5>
                                    </div>
                                    <div id="collapseOne{{$ab}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion1" style="">
                                        <div class="card-body"> 
                                            <h3>{{$report->report}}</h3>
                                            <span class="text-muted"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $ab++;
                            @endphp
                            @endforeach
                    </div>
        </div>
    </div>
</div>
@endsection