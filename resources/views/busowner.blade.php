@extends('layouts.busowner')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">BusOwner Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Total Amount</h3>
      <table border = "1">
<tr style="text-align: center;">
<td><b>Name</td>
<td><b>Surname</td>
<td><b>Category</td>
<td><b>Date</td>
<td><b>Amount</td>
</tr>
@foreach ($amounts as $bus)
<tr style="text-align: center;">
<td>{{ $bus->name }}</td>
<td>{{ $bus->surname }}</td>
<td>{{ $bus->category }}</td>
<td>{{ $bus->created_at }}</td>
<td>{{ $bus->amount }}</td>
</tr>
@endforeach
</table>

 Total: Tsh. <b>{{$schools}}</b>/=
                </div>
            </div>
        </div>
    </div>
</div>
@endsection