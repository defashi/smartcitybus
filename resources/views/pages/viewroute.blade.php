@extends('layouts.appp')

 @section('content')
 <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h3>Tegeta to Kariakoo</h3>
      <table border = "1">
<tr>
<td><b>Plate Number</td>
<td><b>Bus Owner</td>
<td><b>Car Route</td>
</tr>
@foreach ($buses as $bus)
<tr>
<td>{{ $bus->platenumber }}</td>
<td>{{ $bus->busowner }}</td>
<td>{{ $bus->carroute }}</td>
</tr>
@endforeach
</table>
    </div>



    <div class="col-sm-6">
      <h3>Simu200 to Makumbusho</h3>
      <table border = "1">
<tr>
<td><b>Plate Number</td>
<td><b>Bus Owner</td>
<td><b>Car Route</td>
</tr>
@foreach ($makumbushos as $makumbusho)
<tr>
<td>{{ $makumbusho->platenumber }}</td>
<td>{{ $makumbusho->busowner }}</td>
<td>{{ $makumbusho->carroute }}</td>
</tr>
@endforeach
</table>
    </div>


  </div>
</body>
</div>
 @endsection