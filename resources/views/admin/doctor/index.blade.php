@extends('admin.inc.master')


@section('title')
  doctor
@endsection



@section('doctor')

<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">doctor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Doctors</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Major</th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse ($doctor as $doctor)
                  <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->name}}</td>
                    <td><img src="{{ asset('AdminAssets') }}/dist/img/{{$doctor->image}}" style="width: 80px;height: 80px;"></td>
                  
                    
                      
                    {{-- {{$major[2]->title}} --}}
                    
                      <td> {{ $major[1]->title }} </td>
                      
                      
                      
                      
                  
                    
                    
                     <td>
                      <a class="btn btn-primary" href="{{ route('doctor.edit', $doctor->id) }}">edit</a>
                      <a class="btn btn-danger" href="{{ route('doctor.delete', $doctor->id) }}">delete</a>
                  </td> 
              </tr>
          @empty
              <tr>
                  <td colspan="3">No doctors</td>
              </tr>
          @endforelse
          @if (session()->has('success'))
              <div class="alert alert-success">
                  {{ session()->get('success') }}
              </div>
          @endif
                  
                
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
</div>


@endsection