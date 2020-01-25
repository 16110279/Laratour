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
              <h3 class="card-title">Daftar Destinasi</h3>
                  <div align="right">
      <button type="button" name="create_record" id="create_record" class="btn btn-primary btn-sm"><li class="fas fa-plus"></li> New Destination</button>
     </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <table  id="destination_table" class="table table-bordered table-striped" >
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Country</th>
                  <th>Deskripsi</th>
                  <th width="10%">Action</th>
                  {{-- <th>CSS grade</th> --}}
                </tr>
                </thead>
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


<!-- jQuery -->
<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('admin-assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-assets/dist/js/demo.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('admin-assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- page script -->

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#destination_id').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>


<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          {{-- <h4 class="modal-title">Add New Record</h4> --}}
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <input name="_method" id="_method" hidden value="POST">
             {{-- <span id="store_image"></span> --}}
    <div class="span12 text-center" id="store_image"></div>
    <br>

          <div class="form-group row">
            <label class="control-label col-md-2" > Name </label>
            <div class="col-md-10">
             <input type="text" name="name" id="name" class="form-control" />
            </div>
           </div>
 
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Country</label>
                      <div class="col-sm-10">
                                                {{-- <select class="form-control select2bs4" name="country_id" id="country" style="width: 100%;" data-placeholder="Select a Country"> --}}

                        <select class="form-control select2bs4" name="country_id" id="countryID" style="width: 100%;" data-placeholder="Select a Country">
                                                    <option value="" hidden></option>

                          @foreach ($country as $ctr)
                            <option value="{{$ctr->id }}">{{$ctr->name}}</option>                              
                          @endforeach

                        </select>
                    </div>
                </div>
                <!-- /.form-group -->
           
         
           <div class="form-group row">
            <label class="control-label col-md-2"> Desc </label>
            <div class="col-md-10">
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
             {{-- <input type="text" name="desc" id="desc" class="form-control" /> --}}
            </div>
           </div>
           <div class="form-group row">
            <label class="control-label col-md-2">Poster </label>
            <div class="col-md-10">
             <input type="file" name="image" id="image" />
            </div>
           </div>
           <br />
           <div class="form-group" align="center">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
           </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>



<script>
          $('#formModal').on('hidden.bs.modal', function () {
                // console.log("Reset Modal");
                $("#name").val('');
                $("#countryID").val('');
                $("#countryID").val('');
                $("#desc").val('');
                $("#image").val('');
                $("#img-thumbnail").val('');
            });
</script>
<script>
  $(function () {
        //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>

<script>
$(document).ready(function(){

 $('#destination_table').DataTable({
     paging: true,
      lengthChange: false,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('dst-ajax.index') }}",
  },
  columns:[
   {
    data: 'image',
    name: 'image',
    render: function(data, type, full, meta){
     return "<img src={{ URL::to('/') }}/img/destination/" + data + " width='70' class='img-thumbnail' />";
    },
    orderable: false
   },
   {
    data: 'name',
    name: 'name'
   },
   {
    data: 'countries.name',
    name: 'country'
   },
   {
    data: 'desc',
    name: 'desc'
   },
   
   {
    data: 'action',
    name: 'action',
    orderable: false
   }
  ]
 });

 $('#create_record').click(function(){
  $('.modal-title').text("Add New Record");
     $('#action_button').val("Add");
     $('#action').val("Add");
     $('#formModal').modal('show');
 });

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  if($('#action').val() == 'Add')
  {
   $.ajax({
    url:"{{ route('dst-ajax.store') }}",
    method:"POST",

    data:new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
    //  if(data.errors)
    //  {
    //   html = '<div class="alert alert-danger">';
    //   for(var count = 0; count < data.errors.length; count++)
    //   {
    //    html += '<p>' + data.errors[count] + '</p>';
    //   }
    //   html += '</div>';
    //  }
    //  if(data.success)
    //  {
    //   html = '<div class="alert alert-success">' + data.success + '</div>';
    //   $('#sample_form')[0].reset();
      $('#destination_table').DataTable().ajax.reload();
    //  }
    //  $('#form_result').html(html);

     $("#formModal").modal('hide');

    }
   })
  }

  if($('#action').val() == "Edit")
  {
   $.ajax({
    url:"{{ route('dst-ajax.update') }}",
    method:"POST",
    data:new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      $('#sample_form')[0].reset();
      $('#store_image').html('');
      $('#destination_table').DataTable().ajax.reload();
      $("#formModal").modal('hide');

     }
     $('#form_result').html(html);
    }
   });
  }
 });

 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url:"/dst-ajax/"+id+"/edit",
   dataType:"json",
   success:function(html){
    $('#name').val(html.data.name);
    $('#country').val(html.data.countries.name);
    // $("div.country select").val(html.data.countries.name);
    // $("div.country").val(html.data.countries.name).change();
      // $('div.country  option[value=.'html.data.countries.name.']').prop("selected", true);
    $('#countryID').val(html.data.countries.id).change();

    console.log(html.data)
    $('#desc').val(html.data.desc);
    $('#store_image').html("<img src={{ URL::to('/') }}/img/destination/" + html.data.image + " width='150' class='img-thumbnail' />");
    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
    $('#hidden_id').val(html.data.id);
    $('.modal-title').text("Edit New Record");
    $('#action_button').val("Update");
    $('#action').val("Edit");
    $('#formModal').modal('show');
   }
  })
 });





  //  function deleteAction(id){
  //               if(confirm("Are you sure?")){
  //                   console.log(id)
  //                   // console.log(idt)
  //                   // $.ajax({
  //                   //     url: "/api/v1/picture/"+id,
  //                   //     method: "POST",
  //                   //     data: {'id': id, '_token': "{{ csrf_token() }}", '_method': 'delete'},
  //                   //     success: function(result){
  //                   //         alert(result.message);
  //                   //         loadData(idt);
  //                   //     }
  //                   // });
  //               }

  //             }



  var destination_id;


 $(document).on('click', '.delete', function(){
  destination_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
  method: "DELETE",
  data: {'id': destination_id, '_token': "{{ csrf_token() }}", '_method': 'delete'},
  url:"/dst-ajax/destroy/"+destination_id,
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#destination_table').DataTable().ajax.reload();
    }, 2000);
   }
  })
 });

});
</script>


            
@endsection