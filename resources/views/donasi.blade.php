@extends('layouts.front-layouts')

@section('title')
    Donasi
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('front-assets/css/donasi.css')}}">
@endsection

@section('content')
    
    <section class="section-1">
        <div class="row m-4">
            <div class="col-md-8">
               <div class="card">
                   <img src="{{$program->getFoto()}}" alt="Program Image">

                   <div class="container mt-3">
                        <p class="title">{{$program->title}}</p>
                        <div class="brief">
                            <p>{{$program->brief_explanation}}</p>
                        </div>
                    </div>
                    <div class="program-info">
                        <div class="waktu">
                            <div class="container">
                            <span>Kategori</span><p>Kemanusiaan</p>
                            <span>Berakhir Pada</span><p>{{$program->time_is_up}}</p>
                            </div>
                        </div>

                        <div class="dana">
                            <div class="container">
                            <span>Terkumpul</span><p class="collected">@if ($program->donation_collected == 0)
                                0
                            @else
                            {{$program->donation_collected}}
                            @endif</p>
                            <span>Target</span><p>{{$program->donation_target}}</p>
                            </div>
                        </div>
                    </div>
               </div>

               <div class="tabs">

                <ul class="tabs-nav">
                  <li><a href="#tab-1">Details</a></li>
                  <li><a href="#tab-2">Laporan & Perkembangan</a></li>
                </ul>

                <div class="tabs-stage">
                  <div id="tab-1">
                    {!! $program->description !!}
                  </div>

                  <div id="tab-2">
                    <ul id="accordion" class="accordion">
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($devs as $dev)
                      <li class="container">         
                        <div class="link">Update #{{$i++}}<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                          <h2><strong>{{$dev->title}}</strong></h2><br><br>
                          {!! $dev->description !!}
                        </ul>
                      </li> 
                      @endforeach
                      
                    </ul>
                  </div>
                </div>

              </div>

            </div>

            <div class="col-md-4 donate">
                <p class="mt-3">{{$program->brief_explanation}}</p>

                <form action="/donasi/store/{{$program->id}}" class="fixed" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="program_id" value="{{$program->id}}">
                <div class="form-group">
                    <label>Masukan Nominal Donasi</label>
                    <input type="number" class="form-control" min="10000" step="1000" name="nominal_donasi">
                </div>

                <button class="btn btn-donasi">Donasi Sekarang</button>
                </form>
            </div>
        </div>
    </section>

@endsection


@section('script')
    <script>
            // Show the first tab by default
    $('.tabs-stage div').hide();
    $('.tabs-stage div:first').show();
    $('.tabs-nav li:first').addClass('tab-active');

    // Change tab class and display content
    $('.tabs-nav a').on('click', function(event){
    event.preventDefault();
    $('.tabs-nav li').removeClass('tab-active');
    $(this).parent().addClass('tab-active');
    $('.tabs-stage div').hide();
    $($(this).attr('href')).show();
    });

    </script>

    <script>
    $(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});

    </script>
@endsection
