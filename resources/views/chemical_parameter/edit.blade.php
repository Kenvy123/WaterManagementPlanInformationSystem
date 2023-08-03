@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Chemical Parameter</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('chemical_parameter.index') }}"> Back</a>
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

    
    <form action="{{ route('chemical_parameter.update', ['chemical_parameter' => $chemicalParameters->id]) }}" method="POST">
    	@csrf
        @method('PUT')


         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Chemical Name:</strong>
		            <input type="text" name="chemical_parameter_name" value="{{ $chemicalParameters->chemical_parameter_name }}" class="form-control" placeholder="Chemical Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Usage:</strong>
		            <textarea class="form-control" style="height:150px" name="cm_usage" placeholder="Usage">{{ $chemicalParameters->cm_usage }}</textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Update</button>
		    </div>
		</div>


    </form>


@endsection