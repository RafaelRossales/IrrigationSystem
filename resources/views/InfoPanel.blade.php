@extends('template')

@section('content')
<h3>Garden Information</h3>
<table border='1'>
<td>Id</td>
<td>Type</td>
<td>Water Amount</td>
<td>Details</td>
<td>Created At</td>
@foreach($plants as $p)
<tr>
<td>{{$p->id}}</td>
<td>{{$p->type}}</td>
<td>{{$p->WaterAmount}}</td>
<td>{{$p->details}}</td>
<td>{{$p->created_at}}</td>
</tr>
@endforeach

</table>
<h3>Device Information</h3>

<table border='1'>
<td>Id</td>
<td>Localization</td>
<td>Status</td>
<td>Time Active</td>
<td>Full Time Irrigation</td>
<td>Created At</td>
@foreach($device as $d)
<tr>
<td>{{$d->id}}</td>
<td>{{$d->localization}}</td>
<td>{{$d->status}}</td>
<td>{{$d->TimeActive}}</td>
<td>{{$d->fullTimeIrrigation}}</td>
<td>{{$d->created_at}}</td>
</tr>
@endforeach
</table>

<h3>Garden Information</h3>
<table border='1'>
<td>Id</td>
<td>Plants_id</td>
<td>Devices_id</td>
<td>Local</td>
<td>Humid</td>
<td>Created At</td>
@foreach($garden as $g)
<tr>
<td>{{$g->id}}</td>
<td>{{$g->plants_id}}</td>
<td>{{$g->devices_id}}</td>
<td>{{$g->local}}</td>
<td>{{$g->humid}}</td>
<td>{{$g->created_at}}</td>
</tr>
@endforeach


@endsection