@extends('layout.main')

@section('title', 'Share Link Boss||')

@section('container')
    <div class="container">
        <div class="row d-flex flex-row-reverse" style=" margin-top: 0px; padding: 100px;">
        <div class="col-md-6">
                    <img src="{!! asset('assets/img/bg1.svg') !!}" width= 100% style="margin-top: 20px;" >
            </div>
            <div class="col-md-6">
                <img src="{!! asset('assets/img/shareLogo.png') !!}" width= 100% style="margin-top: 20px;" >
                <div class="container">
                <form action="{{ route('upload') }}" method="post">
                  @csrf
                    <div class="row g-2 align-items-center">
                        <div class="col-1">
                            <label for="inputLink" class="col-form-label">Link</label>
                        </div>
                        <div class="col-11">
                            <input type="text" class="form-control" id="link_short" name="link_short" class="form-control" aria-describedby="">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-outline-info btn-lg btn-block">Create</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
 