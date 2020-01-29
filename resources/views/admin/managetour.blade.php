@extends('layouts.admin-sidebar')
@section('content')
    <body class="hold-transition sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <br>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Daftar Tour</h3>
                  <div align="right">
<a href="{{url('admin/tour/create')}}"><button type="button" class="btn btn-primary btn-sm"><li class="fas fa-plus"></li> New Tour Packet</button></a>
     </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table  id="destination_table" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>No</th>
                  <th>Poster</th>
                  <th>Name</th>
                  <th>Country</th>
                  <th>Category</th>
                  <th width="10%">Action</th>
                  {{-- <th>CSS grade</th> --}}
                </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                        @foreach($tour as $tr)
                    <tr>

                    <td>{{$no++}}</td>
                    <td><img src="{{url('/img/tour/'.$tr->img)}}" width="40"/></td>
                    <td>{{$tr->name}}</td>
                    <td>{{$tr->country->name}}</td>
                    <td>{{$tr->category}}</td>
                    <td><a href="{{url('/admin/tour/'.$tr->id.'/edit')}}"><button type="button" class="btn btn-block btn-success"><li class="fas fa-pencil-alt"></li></button></a>
                    </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>

                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection