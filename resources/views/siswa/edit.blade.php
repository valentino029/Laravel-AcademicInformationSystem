@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Student
        <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li class="active">Student Data</li>
        <li class="active">Edit</li>
    </ol>
</section>
@endsection

@section ('content')

<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Student Data</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->siswaNama}}</a>
                            <span class="users-list-date">{{$data->siswaJurusan}}</span>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <form role="form" action="/akunsiswa/update" method="POST">
                      <div class="box-body">
                          <div class="form-group">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                              <input type="hidden" class="form-control" name="siswaNis" value="{{ $data->siswaNis}}" />
                              <input type="hidden" name="_method" value="PUT"/>
                          </div>
                          <!-- text input -->
                          <div class="form-group">
                            <label>NISN</label>
                            <input type="text" class="form-control" name="siswaNisn" value="{{ $data->siswaNisn}}" placeholder="NISN">
                        </div>

                          <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" class="form-control" name="siswaNama" value="{{ $data->siswaNama}}" placeholder="Student Name">
                        </div>

                        <div class="form-group">
                          <label>Major</label>
                          <input type="text" class="form-control" name="siswaJurusan" value="{{ $data->siswaJurusan}}" placeholder="Major">
                      </div>

                      <div class="form-group">
                        <label>Gender</label>
                          <select class="form-control" name="siswaGender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>

                      </div>

                          <div class="box-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          
                        </form>
                        </div><!-- /.col -->
                      </div>
                    </div>
                  </div>
                </div>
        </div>
</section>

@endsection