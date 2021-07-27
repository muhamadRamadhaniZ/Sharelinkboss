@extends('layout.main')

@section('title', 'Upload File||')

@section('container')
    <div class="container">
        <div class="row  " style=" margin-top: 0px; padding: 100px;">
           <div class="col-12">
  <form method="post" action="{{ route('kirim') }}" enctype="multipart/form-data">
  @csrf
    
    <div class="row">
      <label for="#" class="col-sm-2 col-form-label">Link</label>
      <span class="col-sm-10">ShareLink.com/{{ $data->link_short }}</span>
    </div>
    <div class="form-group row">
    <label for="UploadFile" class="col-sm-2 col-form-label">Upload Files</label>
    <input type="file" class="form-control-file col-sm-10" id="file" name="file">
  </div>
  <div class="form-group row">
    <label for="ShareText" class="col-sm-2 col-form-label">Share Text :</label>
    <textarea class="form-control col-sm-10" id="summary-ckeditor" name="data_text"></textarea>
  </div>
  <div class="form-group row">
    <label for="timelimit" class="col-sm-2 col-form-label">Time Limit :</label>
    <select class="form-control col-sm-10" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10"><span>File be automatical destroyed after 24 hours</span>
    <div class="d-flex flex-row bd-highlight my-3 p-lg-3">
      <Button class="p-2 bd-highlight btn btn-success" style="width: 150px;">Share</Button>
      <Button class="p-2 bd-highlight btn btn-outline-primary mx-lg-5" style="width: 150px;">Cancel</Button>
    </div>

    </div>
  </div>
  </div>
 
</form>
           </div>
        </div>
    </div>
   <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
   @endsection