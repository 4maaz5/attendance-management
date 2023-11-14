@extends('layouts.main')
@section('main')
    <div style="width:1100px;margin-left:270px;margin-top:10px;">
<h1 class="text-center" style="margin-top:-820px;margin-left:250px;">Applications Table</h1>
<table class="table table-bordered" style="margin-left: 130px;margin-top:px;font-size:20px;background-color:white;width:1250px;">
    <tr>
        <th>FirstName</th>
        <th>Jobtitle</th>
        <th>Email</th>
        <th>Reason</th>
        <th>Date</th>
        <th>Action</th>
        <th>Response</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->fname }}</td>
            <td>{{ $item->jobtitle }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->reason }}</td>
            <td>{{ $item->date }}</td>
            <td>{{ $item->action }}</td>
            <td><a href="{{ url('/accept',$item->id) }}"><button class="btn btn-success">Accept</button></a>&nbsp<a href="{{ url('/reject',$item->id) }}"><button class="btn btn-danger">Reject</button></a></td>
    @endforeach
</tr>
</table>
<div style="width: 800px;margin-left:130px;">
    {{ $data->links() }}
</div>
    </div>
@endsection

