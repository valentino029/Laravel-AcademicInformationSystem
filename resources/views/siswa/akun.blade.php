@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
       Student Account Management
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Student Account Management</li>
        
    </ol>
</section>
@endsection

@section('content')
<section class="content">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Student Account Management <a href="/akunsiswa/tambah/" class="btn btn-success" title="Tambah Data"><i class="fa fa-fw fa-plus"></i></a></h3>
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
                  <th>Action</th>
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
                  <td>
                    <a href="/akunsiswa/edit/{{ $mrd->siswaNis }}">
                        <button class="btn-primary"><i class="fa fa-fw fa-edit"></i>Edit</button>
                    </a>
                    <a href="/akunsiswa/delete/{{ $mrd->siswaNis }}">
                    <button class="btn-danger"><i class="fa fa-fw fa-trash"></i>Delete</button>
                    </a>
                </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    
</section>
    
@endsection