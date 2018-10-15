@extends('layouts.master')


@section('title')
<title>Academic Information System</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
       Teacher Account Management
        
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('/home')}}"><i class="fa fa-fw fa-home"></i> Home</a></li>
        <li class="active">Teacher Account Management</li>
        
    </ol>
</section>
@endsection

@section('content')
<section class="content">

    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Teacher Account Management <a href="/akunguru/tambah/" class="btn btn-success" title="Tambah Data"><i class="fa fa-fw fa-plus"></i></a></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Identy Number</th>
                  <th>NIP</th>
                  <th>Teacher Name</th>
                  <th>Curriculum</th>
                  <th>Major</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $peg)
                <tr>
                  <td>{{$peg->guruNigs}}</td>
                  <td>{{$peg->guruNip}}</td>
                  <td><a href="/dataguru/{{ $peg->guruNigs }}">{{$peg->guruNama}}</td>
                  <td>{{$peg->guruKurikulum}}</td>
                  <td>{{$peg->guruJurusan}}</td>
                  <td>
                    <a href="/akunguru/edit/{{ $peg->guruNigs }}">
                        <button class="btn-primary"><i class="fa fa-fw fa-edit"></i>Edit</button>
                    </a>
                    <form action="/akunguru/{{ $peg->guruNigs }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn-warning">Delete</button>
                    </form>
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