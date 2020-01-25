@extends('layouts.admin-sidebar')

@section('content')
<body class="hold-transition sidebar-mini">
x    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add New Tour</h3>
            </div>

                                      {{-- @dump($country) --}}

            <!-- /.card-header -->
            <div class="card-body pad">
                 <!-- form start -->
              <form class="form-horizontal" action="{{url('admin/tour/create')}}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                  <div class="form-group row">
                    <label for="inputTourName" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="tour_name" class="form-control" id="inputTourName" placeholder="Nama Tour">
                    </div>
                  </div>
 
                  <div class="form-group row">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="inputTourPoster" class="col-sm-2 col-form-label">Schedule</label>
                        <div class="custom-file col-sm-4">
                          <input type="text" name="duration" class="form-control" placeholder="Duration (Day)" >
                        </div>
                    <div class="custom-file col-sm-6">
                        <div class="input-group date form-group" id="datepicker">
                            <input type="text" class="form-control" id="Dates" name="Dates" placeholder="Tanggal Keberangkatan" required />
                            <span class="input-group-addon"></span>
                        </div>
                  </div>
                </div>               

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="category" id="category" style="width: 100%;" data-placeholder="Select a Category">
                          <option value="" selected disabled>Select a Category</option>
                          <option value="Individual">Individual</option>
                          <option value="Group">Group</option>
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->
                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Country</label>
                      <div class="col-sm-10">
                        <select class="form-control select2bs4" name="country_id" id="country" style="width: 100%;" data-placeholder="Select a Country">

                          <option value="" hidden></option>

                          @foreach($countries as $id => $country)
                                        <option value="{{ $id }}">
                                            {{ $country }}
                                        </option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.form-group -->

                

        
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Destinasi</label>
                   <div class="col-sm-10">
                
                  <select class="select2bs4" multiple="multiple"  name="destination_id[]" id="destination" data-placeholder="Select a Destination"
                          style="width: 100%;">
        {{-- @if($errors->has('destination_id'))
            <p class="help-block">
                {{ $errors->first('destination_id') }}
            </p>
        @endif --}}
                  </select>
                </div>
                </div>
                <!-- /.form-group -->

  
                   <div class="form-group row">
                    <!-- <label for="customFile">Custom File</label> -->
                    <label for="inputTourPoster" class="col-sm-2 col-form-label">Poster</label>

                  <div class="custom-file col-sm-10">
                      <input type="file" name="img" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                


   <!-- Date range -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pricing :</label>
                    <div class="col-sm-10">
 <div class="table-responsive">
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="35%">Nama Paket</th>
                    <th width="35%">Price</th>
                    <th width="30%">Action</th>
                </tr>
               </thead>
               <tbody>

               </tbody>
       
           </table>
   </div>
                  
                  <!-- /.input group -->
                  </div>
                </div>
                <!-- /.form group -->
            </div>
    <div class="form-group row">
                    <label for="inputTourDesc" class="col-sm-2 col-form-label">Itineraries</label>
                    <div class="col-sm-10">
                <textarea id="inputTourDesc" name="itinerary" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
        
            </div>
             

            
          </div>
            <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info float-right">Simpan</button>
                  {{-- <button type="submit" class="btn btn-default float-right">Cancel</button> --}}
                </div>
                <!-- /.card-footer -->
              </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<!-- jQuery -->
<script src="{{asset('admin-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-assets/dist/js/demo.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin-assets/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Select2 -->
<script src="{{asset('admin-assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('admin-assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('admin-assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('admin-assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('admin-assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>




 <script type="text/javascript">
        $("#country").change(function(){
            $.ajax({
                url: "{{ route('admin.destination.get_by_country') }}?country_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#destination').html(data.html);
                }
            });
        });
        
    </script>

    <script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="data['+number+'][name]" class="form-control" /></td>';
        html += '<td><input type="text" name="data['+number+'][price]" class="form-control" /></td>';
        html += '<td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus"></i></button></<button>';
        html += ' &nbsp &nbsp';
        html += '<button type="button" name="remove" id="" class="btn btn-danger remove"><i class="fa fa-trash"></i></button></tr>';
        $('tbody').append(html);   
        

 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("dynamic-field.insert") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});


</script>

<script>
$(document).ready(function() {
    $('#datepicker').datepicker({
        startDate: new Date(),
        multidate: true,
        format: "dd/mm/yyyy",
        daysOfWeekHighlighted: "5,6",
        datesDisabled: ['31/08/2017'],
        language: 'en'
    }).on('changeDate', function(e) {
        // `e` here contains the extra attributes
        $(this).find('.input-group-addon .count').text(' ' + e.dates.length);
    });
});

</script>

<script>
  $(function () {
    
    //Date range picker
    $('#reservation').daterangepicker()
    // Summernote
    $('.textarea').summernote()

        //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
</script>

<script type="text/javascript">
$(document).ready(function(){
    // Get value on button click and show alert
    $("#Dates").change(function(){
        var str = $("#Dates").val();
        // alert(str);
        // console.log(str);
        $("#tgl").val(str)

    });
});
</script>
</body>
</html>
@endsection
