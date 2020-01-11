<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<table id="penjualan" class="table table-responsive table-hover">
    <thead>
        <tr><th>Produk</th><th>Jumlah</th><th>Harga</th>
            <th align="center"><span id="amount" class="amount">Subtotal</span> </th></tr>
        </thead>
        <tfoot>
            <tr><td colspan="2"></td>
                <td align="right">
                    <h3><span id="total" class="total text-success">Grand Total</span></h3>
                </td>
            </tr>
        </tfoot>
        <tbody>

            @foreach ($price as $prc)
                 <tr><td>{{ $prc->name }}</td>
                <td>
                    {{-- <select value="" name="qty" class="qty form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> --}}

                    <input type="number" min="0" name="qty" class="qty form-control" id="">
                </td>
                <td>
                    <input type="text" value="{{ $prc->price }}" class="price form-control" disabled="true">
                </td>
                <td align="center">
                    <h4><span id="amount" class="amount">Rp. 0</span></h4>
                </td>
            </tr>
            @endforeach

          

        <form action="{{url('tour/booking')}}" method="POST">
            @csrf
               @foreach ($price as $prc)
        <input type="text" name="id[]" value="{{$prc->id}}">
        <input type="text" name="price[]" value="{{$prc->price}}">
        <input type="text" name="qty[]" value="">
                <br>

        @endforeach
        <button type="submit">d</button>
        </form>

        </tbody>
        </table>
    
</body>
</html>

 <SCRIPT>
            $(document).ready(function(){
                total();
                $('.qty').change(function() {
                    total();
                });
                $('.amount').change(function() {
                    total();
                });               
            });

            function total()
            {
                var sum = 0;
                $('#penjualan > tbody  > tr').each(function() {
                    // var qty = $(this).find('option:selected').val();
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    var amount = (qty*price)
                    sum+=amount;
                    $(this).find('.amount').text(''+amount);
                });
                $('.total').text(sum);
            }
        </SCRIPT>