@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Teacher
        <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-fw fa-home"></i>Home</a></li>
        <li class="active">Teacher Data</li>
        <li class="active">Profile</li>
    </ol>
</section>
@endsection

@section ('content')

<section class="content">
        <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border">
                      <h3 class="box-title">Teacher Data</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar5.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->guruNama}}</a>
                            <span class="users-list-date">{{$data->guruKurikulum}}</span>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <table id="#" class="table table-bordered table-hover">                    
                          <tbody>
                          
                            <tr>
                              <td>Identy Number</td> 
                              <td>{{ $data->guruNigs}}</td>
                            </tr>
                            <tr>
                              <td>NIP</td> 
                              <td>{{$data->guruNip}}</td> 
                            </tr>
                            <tr>
                              <td>Name</td> 
                              <td>{{$data->guruNama}}</td>                        
                            </tr>
                            <tr>
                                <td>Curriculum</td> 
                                <td>{{$data->guruKurikulum}}</td>                        
                            </tr>
                            <tr>
                                <td>Major</td> 
                                <td>{{$data->guruJurusan}}</td>                        
                            </tr>
                        </tbody>
                        </table>
                        </div><!-- /.col -->
                      </div>
                    </div>
                  </div>
                </div>
        </div>
</section>

@endsection