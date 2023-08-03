@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Operating Unit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('operating_units.index') }}"> Back</a>
            </div>
        </div>
    </div>

    

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form action="{{ route('operating_units.update', ['operating_unit' => $operatingUnits->id]) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="operating_unit_name" value="{{ $operatingUnits->operating_unit_name }}" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>General Remark:</strong>
		            <textarea class="form-control" style="height:150px" name="g_remark" placeholder="General Remark">{{ $operatingUnits->g_remark }}</textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Update</button>
		    </div>
		</div>


    </form>


@endsection