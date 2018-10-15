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
                      <h3 class="box-title">Student Data</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                      <div class="row">
                        <div class="col-md-3">
                          <p align="center">
                            <img src="/dist/img/avatar5.png" alt="User Image">
                            <a class="users-list-name" href="#">{{ $data->siswaNama}}</a>
                            <span class="users-list-date">{{$data->siswaJurusan}}</span>
                          </p>
                        </div><!-- /.col -->
                        <div class="col-md-8">
                         <table id="#" class="table table-bordered table-hover">                    
                          <tbody>
                          
                            <tr>
                              <td>NIS</td> 
                              <td>{{ $data->siswaNis}}</td>
                            </tr>
                            <tr>
                              <td>NISN</td> 
                              <td>{{$data->siswaNisn}}</td> 
                            </tr>
                            <tr>
                              <td>Student Name</td> 
                              <td>{{$data->siswaNama}}</td>                        
                            </tr>
                            <tr>
                                <td>Major</td> 
                                <td>{{$data->siswaJurusan}}</td>                        
                            </tr>
                            <tr>
                                <td>Gender</td> 
                                <td>{{$data->siswaGender}}</td>                        
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