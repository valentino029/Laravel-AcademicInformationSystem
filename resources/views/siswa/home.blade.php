@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
       Student Data
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Student Data</li>
        
    </ol>
</section>
@endsection

@section('content')
<section class="content">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>NISN</th>
                  <th>Student Name</th>
                  <th>Major</th>
                  <th>Gender</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($data as $mrd)
                <tr>
                  <td>{{$mrd->siswaNis}}</td>
                  <td>{{$mrd->siswaNisn}}</td>
                  <td><a href="/datasiswa/{{ $mrd->siswaNis }}">{{$mrd->siswaNama}}</td>
                  <td>{{$mrd->siswaJurusan}}</td>
                  <td>{{$mrd->siswaGender}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    
</section>
    
@endsection