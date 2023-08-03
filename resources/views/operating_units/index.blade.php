@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Operating Units</h2>
        </div>
        <div class="pull-right">
            @can('ou-create')
            <a class="btn btn-success" href="{{ route('operating_units.create') }}"> Add New Operating Unit</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>General Remarks</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($operatingUnits as $ou)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $ou->operating_unit_name }}</td>
        <td>{{ $ou->g_remark }}</td>
        <td>
            @can('ou-edit')
            <a class="btn btn-primary" href="{{ route('operating_units.edit',$ou->id) }}">Edit</a>
            @endcan
            @can('ou-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['operating_units.destroy', $ou->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
        </td>
    </tr>
    @endforeach
</table>


{!! $operatingUnits->links() !!}


@endsection