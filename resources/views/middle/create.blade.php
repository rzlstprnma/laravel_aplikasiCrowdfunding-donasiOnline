@extends('layouts.middle-layouts')

@section('title')
    Tambah Program
@endsection
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="{{asset('middle-assets/css/file.css')}}">
<style>
textarea{
  height: 250px;
}

input, select, textarea{
  border: 1px solid #CDD3DB !important;
}

[type="date"] {
  background: url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  99% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

[type="date"] {
  border: 1px solid #CDD3DB;
  border-radius: 3px;
  background-color: #fff;
  height: 42px;
  padding: 3px 5px;
}

.small{
      color: #09264A;
}
</style>

@section('content')
    
    <div class="box">
        <div class="box-header">
          <h3>Tambah Data</h3>
        </div>
        <div class="box-body">
      <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" name="users_id" value="{{Auth::user()->id}}">

        <div class="form-group"><label>Kategori</label><select name="category_id">
            <option disabled selected>-- Pilih Kategori --</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
          </select></div>

        <div class="form-group label--floating"><input type="text" name="title"><label>Judul Program</label></div>

        <div class="file-upload-wrapper" data-text="Tambahkan Gambar">
          <input type="file" name="photo" class="file-upload-field">
        </div>
  
        <div class="form-group label--floating mt-2">
          <input type="text" name="brief_explanation" placeholder=""><label>Kalimat Ajakan</label></div>

        <div class="form-group label--floating"><input type="text" class="{{ $errors->has('donation_target') ? ' is-invalid' : '' }}" name="donation_target" value="{{ old('donation_target') }}"><label>Target Donasi</label></div>

        @if ($errors->has('donation_target'))
             <span class="invalid-feedback" role="alert">
                <div class="alert alert--dismissible">
                    <p><span>Target Donasi Harus Berupa Angka</span></p>
                    <div class="alert-dismiss"><button class="btn btn-icon"><i class="la la-times"></i></button></div>
                </div>
             </span>
        @endif

        <div class="form-group">
            <label for="time_is_up">Donasi Berakhir</label>
            <input type="date" name="time_is_up" id="time_is_up">
        </div>

        <div class="form-group label--floating">
            <input type="text" name="shelter_account_number"><label>Nomor Rekening Penampungan</label>
        </div>

        <label><small class="small">Deskripsi Program</small></label><br>
        <div class="alert alert--info alert--dismissible">
            <p><span>Isi Deskripsi Program dengan Selengkap-lengkapnya, Boleh Memasukan Gambar atau Foto</span></p>
            <div class="alert-dismiss"><button class="btn btn-icon"><i class="la la-times"></i></button></div>
        </div>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <textarea name="description" class="form-control my-editor"></textarea>
        <script>
          var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
              "advlist autolink lists link image charmap print preview hr anchor pagebreak",
              "searchreplace wordcount visualblocks visualchars fullscreen",
              "insertdatetime media nonbreaking save table contextmenu directionality",
              "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
              var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
              var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        
              var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
              if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
              } else {
                cmsURL = cmsURL + "&type=Files";
              }
        
              tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
              });
            }
          };
        
          tinymce.init(editor_config);
        </script>


        <div class="mt-4 box-footer"><button class="btn btn-md btn-primary">Submit</button></div>
    
      </form>
      </div>

@endsection
@section('script')  
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script>

  $("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});
</script>
@endsection
