@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
      Study Resluts
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Study Resluts</li>
        
    </ol>
</section>
@endsection

@section('content')
<section class="content">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Input Value</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Semester Year</th>
                  <th>Grade</th>
                  <th>Major</th>
                  <th>Classroom Code</th>
                  <th>Classroom Name</th>
                  <th>Curriculum Code</th>
                  <th>Teacher Name</th>
                  <th>Action</th>
                </tr>
                </thead>

                <tbody>
                    
                <tr>
                  <td>20151</td>
                  <td>10</td>
                  <td>Science</td>
                  <td>10IPA-1</td>
                  <td>10 Science 1</td>
                  <td>10IPA-AGAMA</td>
                  <td>Abu Yazid, S.Ag, M.Pd</td>
                  <td>
                    <a href="#">
                        <button class="btn btn-info" type="button"><i class="fa fa-fw fa-list"></i></button>
                    </a>
                  </td>
                </tr>
               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    
</section>
    
@endsection