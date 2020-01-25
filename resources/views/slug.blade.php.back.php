{{-- {{ $tour->name }} <br>
{{ $tour->category }} --}}

{{-- if($) --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="country">{{ trans('global.office.fields.country') }}</label>
        <select name="country_id" id="country" class="form-control">
            @foreach($countries as $id => $country)
                <option value="{{ $id }}">
                    {{ $country }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group {{ $errors->has('city_id') ? 'has-error' : '' }}">
        <label for="city">{{ trans('global.office.fields.city') }}</label>
        <select name="city_id" id="city" class="form-control">
            <option value="">{{ trans('global.pleaseSelect') }}</option>
        </select>
        @if($errors->has('city_id'))
            <p class="help-block">
                {{ $errors->first('city_id') }}
            </p>
        @endif
    </div>

<br>
<br>
<br>
<br>
    
    {{ $tour->name }}

        <h1> Schedule </h1>
    @foreach ($schedule as $sdl)
        {{ $sdl->date_start }} - {{ $sdl->date_end }} <br>
    @endforeach
    {{-- @dump($itineraries) --}}

    <h1> Destinasi </h1>

    @foreach ($tour->destination as $dst)
    {{ $dst->name }} <br>
        
    @endforeach

    <h1> Harga </h1>

    @foreach ($price as $prc)
        {{ $prc->name }} - Rp. {{ $prc->price }} <br>
    @endforeach

    <h1> Itineraries </h1>
    @foreach ($itineraries as $itn)
        {{ $itn->title }} - {{ $itn->content }} <br>
    @endforeach

    <h1> Order Sekarang </h1>

    <form>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Pilih Tanggal</label>
    <select class="form-control" id="exampleFormControlSelect1">
        @foreach ($schedule as $sdlopt)
                  <option>{{$sdlopt->date_start}} Sampai {{$sdlopt->date_end}}</option>
        @endforeach
    </select>
  </div>
        <br> 
    {{-- <label for="exampleFormControlInput1"> {{ $prc->name }} - Rp. {{ $prc->price }}</label> --}}

         <div class="form-group">
        
        @foreach ($price as $prc)

         <input type="number" name="id[]" class="id" value="{{$prc->id}}">
         <input type="number" name="harga[]" class="harga" value="{{$prc->price}}">
         <input type="number" name="qty[]" class="qty">
         <br>

        @endforeach

            

  </div>
        
        <br> 
    </form>



</body>
</html>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
    </script>

<script>

$(document).ready(function(){
   $(".harga").blur(function() {
           var sum = 0;
    $(".harga").each(function() {

        sum += Number($(this).val());

            });
            console.log(sum)
   })
});

  

</script>

 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "display.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});

</script>


 <script type="text/javascript">
        $("#country").change(function(){
            $.ajax({
                url: "{{ route('admin.destination.get_by_country') }}?country_id=" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#city').html(data.html);
                }
            });
        });
    </script>