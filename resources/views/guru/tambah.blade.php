@extends('layouts.master')
@section('title')
<title>Academic Information System</title>
@endsection
 @section('content-header')
<section class="content-header">
    <h1>
        Add Teacher Data
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Teacher Data</li>
        <li class="active">Add</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add Teacher Data</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <form role="form" action="/akunguru/store" method="POST">
                        <div class="box-body">
                            <div class="form-group">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            </div>
                          <!-- text input -->
                          <div class="form-group">
                            <label>Identy Number</label>
                          <input type="text" class="form-control" name="guruNigs" value="{{ old('guruNigs')}}">

                            {{-- Validation Nya Ada Disini --}}
                            @if($errors->has('guruNigs'))
                            <div class="alert alert-danger">
                              <ul>
                                <li>{{ $errors->first('guruNigs') }}</li>
                              </ul>
                            </div>
                            @endif
                          </div>
                          <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="guruNip" placeholder="Enter ...">
                          </div>
                          <div class="form-group">
                            <label>Teacher Name</label>
                            <input type="text" class="form-control" name="guruNama" placeholder="Enter ...">
                          </div>
                          <div class="form-group">
                            <label>Curriculum</label>
                            <input type="text" class="form-control" name="guruKurikulum" placeholder="Enter ...">
                          </div>
                          <div class="form-group">
                            <label>Major</label>
                            <input type="text" class="form-control" name="guruJurusan" placeholder="Enter ...">
                          </div>
                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </form>
                      </div>
                  </div>
                </div>
        </div>
</section>

@endsection