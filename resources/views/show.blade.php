@extends('layout.main')

@section('title', 'Data Shared')
<h1 class="mt-lg-5 ml-lg-3">SHARELINK</h1>
@section('container')

<div class="container">
  <div class="row justify-content-center">
<div class="card w-75 text-center p-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Shared File</h5>
    <p class="card-text">www.sharelinkboss/id/example</p>
    <embed type="application/pdf" src="data_file/{{$file->file}}" width="100%" height="700px"></embed>
    <p>{{$file->file}}</p>

    <a href="#" class="btn btn-primary">Download</a>
    <h5 class="card-title mt-lg-2">Shared Text</h5>
     <textarea  class="form-control col-sm-10 " id="summary-ckeditor" name="data_text" disabled>{{ $file->data_text }}</textarea>
    <a href="#" class="btn btn-primary">Copy</a>
    
  </div>
</div>
</div>
</div>
 <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@endsection