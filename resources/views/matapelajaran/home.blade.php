@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
       Curriculum Data
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Curriculum Data</li>
        
    </ol>
</section>
@endsection

@section('content')
<section class="content">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Curriculum Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Curriculum Code</th>
                  <th>Curriculum</th>
                  <th>Major</th>
                  <th>Grade</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($data as $matpel)
                <tr>
                  <td>{{$matpel->mpkurKode}}</td>
                  <td>{{$matpel->mpkurNama}}</td>
                  <td>{{$matpel->mpkurJurusan}}</td>
                  <td>{{$matpel->mpkurGrade}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    
</section>
    
@endsection