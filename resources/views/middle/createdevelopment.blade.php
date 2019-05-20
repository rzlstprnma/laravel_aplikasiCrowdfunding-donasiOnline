@extends('layouts.middle-layouts')
@section('title')
    Buat Laporan Perkembangan
@endsection

<style>
  .my-editor{
    height: 300px;
  }
</style>

@section('content')
    
    <section class="section-1">

        <div class="box">
            <div class="container">
            <form action="/laporanperkembangan/store" method="post">
                {{ csrf_field() }}
            <input type="hidden" name="program_id" value="{{$program->id}}">
            <div class="form-group label--floating">
                <input type="text" name="title">
                <label>Judul Laporan Perkembangan</label>
            </div>

            <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            <label><p>Deskripsi Laporan Perkembangan</p></label>
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

        </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>

            </form>
            
        </div>

    </section>

@endsection