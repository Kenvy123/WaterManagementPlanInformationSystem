@extends('layouts.app')


@section('content')
<style>

    hr {
        border: 2px dashed green;
    }
</style>


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h1>Add New Form</h1>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mill_form.index') }}"> Back</a>
        </div>
    </div>
</div>


@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('mill_form.store') }}" method="POST"><br />
    @csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group mb-3">
                <h3>Mill</h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Year: </strong>
                        <input type="number" min="1990" max="2099" id="mill_form_year" name="mill_form_year">
                    </div>
                    <div class="form-group">
                        <label for="operating_unit_id">Operating Unit</label>
                        <select name="id" id="id" class="form-control">
                            <option value="">Select an operating unit</option>
                            @foreach($operatingUnits as $ou)
                                <option value="{{ $ou->id }}">{{ $ou->operating_unit_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <strong>Operating Unit Name:</strong>
                            <input type="text" name="mill_unit_name" class="form-control"
                                placeholder="Enter the operating units' name...">
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <strong>Mill Commissioning Info: </strong>
                            <input type="text" name="mill_commission_info" class="form-control" placeholder="1971...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <strong>Mill Throughput (mt/ hours):</strong>
                            <input  type="number" step=any name="mill_throughput" class="form-control"
                                placeholder="60mt/hours...">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <h3>Total Occupancy</h3>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Staff & Executive:</strong>
                            <input type="int" name="mill_staff_exe" class="form-control" placeholder="E.g: 26">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Staff & Executive Dependants:</strong>
                            <input type="int" name="mill_staff_exed" class="form-control" placeholder="E.g: 55">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Workers:</strong>
                            <input type="int" name="mill_workers" class="form-control" placeholder="E.g: 102">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Workers Dependants:</strong>
                            <input type="int" name="mill_worker_dep" class="form-control" placeholder="E.g: 102">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Total Housing (All):</strong>
                            <input type="int" name="mill_total_housing" class="form-control" placeholder="E.g: 100">
                        </div>
                    </div>
                    <h3>Rainfall Data (mm)</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <table class="table table-bordered text-center" id="table_mill_rainfall">
                                <thead>
                                    <tr>
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>May</th>
                                        <th>Jun</th>
                                        <th>Jul</th>
                                        <th>Aug</th>
                                        <th>Sep</th>
                                        <th>Oct</th>
                                        <th>Nov</th>
                                        <th>Dec</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td><input class="form-control" , name="mill_Jan"></td>
                                    <td><input class="form-control" , name="mill_Feb"></td>
                                    <td><input class="form-control" , name="mill_Mar"></td>
                                    <td><input class="form-control" , name="mill_Apr"></td>
                                    <td><input class="form-control" , name="mill_May"></td>
                                    <td><input class="form-control" , name="mill_Jun"></td>
                                    <td><input class="form-control" , name="mill_Jul"></td>
                                    <td><input class="form-control" , name="mill_Aug"></td>
                                    <td><input class="form-control" , name="mill_Sep"></td>
                                    <td><input class="form-control" , name="mill_Oct"></td>
                                    <td><input class="form-control" , name="mill_Nov"></td>
                                    <td><input class="form-control" , name="mill_Dec"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Remark:</strong>
                            <textarea class="form-control" rows="4" name="mill_general_remark"
                                placeholder="Other remarks..."></textarea>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!---------------------------------Operation------------------------------------------------->
                    <h2>Operation</h2>
                    <h3>Source of Water</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3 mb-3">
                            <strong>River Water (Name): </strong>
                            <input class="form-control" name="mill_operation_river_water_name"
                                placeholder="Enter the name of river...">
                        </div>

                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_river_water_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_river_water_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_river_water_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_river_water_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_river_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Ground Water (Name): </strong>
                            <input class="form-control" name="mill_operation_ground_water_name"
                                placeholder="Enter the name of ground water...">
                        </div>

                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_ground_water_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_ground_water_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_ground_water_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_ground_water_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_ground_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Reservoir (Name): </strong>
                            <input class="form-control" name="mill_operation_reservoir_name"
                                placeholder="Enter the name of reservoir...">
                        </div>

                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_reservoir_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_reservoir_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_reservoir_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_reservoir_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_reservoir_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Natural Pond (Name): </strong>
                            <input class="form-control" name="mill_operation_natural_pond_name"
                                placeholder="Enter the name of natural pond...">
                        </div>

                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_natural_pond_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_natural_pond_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_natural_pond_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_natural_pond_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_natural_pond_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Local Authority (Jabatan Air): </strong>
                            <input class="form-control" name="mill_operation_local_authority_name"
                                placeholder="Enter the name of local authority...">
                        </div>

                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_local_authority_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_local_authority_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_local_authority_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_local_authority_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_local_authority_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Rain Water Harvesting: </strong>
                        </div>
                        <div class="form-group mb-3">
                            <strong>Abstraction: </strong><br>
                            {!! Form::radio('mill_operation_rain_water_harvesting_abstraction', 'yes') !!}
                            {!! Form::label('mill_operation_rain_water_harvesting_abstraction', 'Yes') !!}<br>
                            {!! Form::radio('mill_operation_rain_water_harvesting_abstraction', 'no') !!}
                            {!! Form::label('mill_operation_rain_water_harvesting_abstraction', 'No') !!}
                        </div>

                        <div class="form-group mb-3">
                            <strong>Use of Water : </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_use_of_harvesting_water"
                                placeholder="Use of water..."></textarea>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group mb-3">
                                <strong>Other (Specify if any): </strong>
                                <input class="form-control" name="mill_operation_other_name"
                                    placeholder="Enter the name of other source...">
                            </div>

                            <div class="form-group mb-3">
                                <strong>Abstraction: </strong><br>
                                {!! Form::radio('mill_operation_other_abstraction', 'yes') !!}
                                {!! Form::label('mill_operation_other_abstraction', 'Yes') !!}<br>
                                {!! Form::radio('mill_operation_other_abstraction', 'no') !!}
                                {!! Form::label('mill_operation_other_abstraction', 'No') !!}
                            </div>

                            <div class="form-group mb-3">
                                <strong>Use of Water : </strong>
                                <textarea class="form-control" rows="2" name="mill_operation_use_of_other_water"
                                    placeholder="Use of water..."></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Operation</h3>
                    <h4>FFB Process</h4>
                    <strong>Selected Year Record (MT/ Year)</strong>
                    <input class="form-control" name="mill_operation_o_record"  type="number" step=any placeholder="102493.51..."
                        required>
                    <br>
                    <hr>
                    <br>
                    <h3>Water Consumption (Total Liter/Year)</h3>
                    <h4>Field Operation: </h4>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Processing FFB: </strong>
                            <input class="form-control" name="mill_operation_processing_ffb_wc"  type="number" step=any
                                placeholder="Enter the water comsumption by processing ffb..." required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Workshop: </strong>
                            <input class="form-control" name="mill_operation_workshop_wc"  type="number" step=any
                                placeholder="Enter the water comsumption by workshop..." required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Laboratory: </strong>
                            <input class="form-control" name="mill_operation_lab_wc"  type="number" step=any
                                placeholder="Enter the water comsumption by Laboratory..." required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Other (Specify): </strong>
                            <input class="form-control" name="mill_operation_other_wc_name"
                                placeholder="Enter the name of other operation..."><br />
                            <input class="form-control" name="mill_operation_other_wc"  type="number" step=any
                                placeholder="Enter the water comsumption by housing...">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Total Flow Meter Installed</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Boiler Station:</strong>
                            <input class="form-control" name="mill_operation_bs_fm" placeholder="0">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Workshop:</strong>
                            <input class="form-control" name="mill_operation_ws_fm" placeholder="0">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Store:</strong>
                            <input class="form-control" name="mill_operation_store_fm" placeholder="0">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Pumping/ Flow Rate (Litre/hour)</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>River to Reservoir (litre/hour):</strong>
                            <input class="form-control" name="mill_operation_rnr_pfr" placeholder="0">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Reservoir to Water Treatment Plant (litre/hour):</strong>
                            <input class="form-control" name="mill_operation_rwtp_pfr" placeholder="0">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>Water Treatment Plant to Hosing& Office (litre/hour):</strong>
                            <input class="form-control" name="mill_operation_wtps_pfr" placeholder="0">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Water Monitoring</h3>
                    <h4>Water Quality Monitoring </h4>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <strong>River (Upstream & Downstream): </strong>
                            <label><strong>Parameter (NWQS) :</strong></label><br />
                            <input type="checkbox" id="mill_operation_wqm_ph" name="mill_operation_wqm_ph" value="ph">
                            <label for="ph">pH</label><br>
                            <input type="checkbox" id="mill_operation_wqm_do" name="mill_operation_wqm_do" value="do">
                            <label for="do">Dissolved Oxygen (DO)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_bod" name="mill_operation_wqm_bod"
                                value="bod">
                            <label for="bod">Biological Oxygen Demand (BOD)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_cod" name="mill_operation_wqm_cod"
                                value="cod">
                            <label for="cod">Chemical Oxygen Demand (COD)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_tss" name="mill_operation_wqm_tss"
                                value="tss">
                            <label for="tss">Total Suspended Solid (TSS)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_an" name="mill_operation_wqm_an" value="an">
                            <label for="an">Ammoniacal Nitrogen (AN)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_ong" name="mill_operation_wqm_ong"
                                value="ong">
                            <label for="ong">Oil and Grease (O&G)</label><br>
                            <input type="checkbox" id="mill_operation_wqm_turbidity" name="mill_operation_wqm_turbidity"
                                value="turbidity">
                            <label for="turbidity">Turbidity</label><br>

                            <br><label><strong>Other (specify): </strong></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="mill_operation_other_parameter_value">
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="mill_other_parameter_name">
                            </div>
                            <br>
                            <strong>Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_rw_qmf"
                                placeholder="Quality Monitoring Frequency..."></textarea><br>
                            <strong>Ground Water (Borewell / Tubewell): </strong>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="mill_gw_parameter_value">
                                    </div>
                                </div>
                                <br>
                                <input type="text" class="form-control" name="mill_gw_parameter_name">
                            </div>
                            <strong>Quality Monitoring Frequency (Refer Environment Compliance Report - EIA): </strong>
                            <textarea class="form-control" rows="2" name="mill_operation_gw_qmf"
                                placeholder="Quality Monitoring Frequency..."></textarea><br>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Waste Water Monitoring</h3><br />
                <h4>Parameter of POME</h4>
                <strong>Biochemical Oxygen Demand (BOD) (100 mg/l)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_bod_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_bod_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Chemical Oxygen Demand (COD)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_cod_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_cod_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Total Solid</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_ts_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_ts_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Suspended Solid (400 mg/l)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_ss_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_ss_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Oil and Grease (50 mg/l)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_ong_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_ong_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Ammoniacal Nitrogen (150 mg/l)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_an_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_an_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>Total Nitrogen (200 mg/l)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_tn_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_tn_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />

                <strong>pH (5.0 - 9.0)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_ph_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_ph_mf"
                    placeholder="Monitoring Frequency..."></textarea><br />
                   
                <strong>Temperature (45⁰C)</strong><br />
                <strong>Limit Discharge: </strong><br />
                <input class="form-control" name="mill_operation_wwm_temp_limit_discharge">
                <strong>Monitoring Frequency: </strong>
                <textarea class="form-control" rows="2" name="mill_operation_wwm_temp_mf"
                    placeholder="Monitoring Frequency..."></textarea><br/>

                <h3>Retention Time of Effluent Pond</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <table class="table table-bordered text-center" id="table_mill_operation_wwm">
                            <thead>
                                <tr>
                                    <th>Pond Name</th>
                                    <th>Size</th>
                                    <th>Capacity (cu.m)</th>
                                    <th>Retention Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-control" name="mill_operation_wwm_pond_name[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_size[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_capacity[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_r_time[]"></td>
                                    <td><button type="button" class="btn btn-danger"
                                            onclick="deletePondInfoRow(this)">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" onclick="addNewPondInfoRow()">Add New Row</button>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Protection of Natural Water Sources</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <table class="table table-bordered text-center" id="table_mill_pnws">
                            <thead>
                                <tr>
                                    <th>Location of Riparian (Phase / DIV/ Block No.)</th>
                                    <th>Riparian Reserve (width in m)</th>
                                    <th>Monitoring Frequency</th>
                                    <th>PIC</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-control" name="mill_operation_pwns_location_riparian[]"></td>
                                    <td><input class="form-control" name="mill_operation_pwns_riparian_reserve[]"></td>
                                    <td><input class="form-control" name="mill_operation_pwns_mf[]"></td>
                                    <td><input class="form-control" name="mill_operation_pwns_pic[]"></td>
                                    <td><button type="button" class="btn btn-danger"
                                            onclick="deleteWaterSourcesRow(this)">Delete</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" onclick="addNewWaterSourcesRow()">Add New
                            Row</button>
                    </div>
                </div>
                <br>
                <hr>
                <br>
            <!---------------------------------Domestic------------------------------------------------->
            <h2>Domestic</h2>
            <h3>Source of Water</h3>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3 mb-3">
                    <strong>River Water (Name): </strong>
                    <input class="form-control" name="mill_domestic_river_water_name"
                        placeholder="Enter the name of river...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_river_water_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_river_water_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_river_water_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_river_water_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_river_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Ground Water (Name): </strong>
                    <input class="form-control" name="mill_domestic_ground_water_name"
                        placeholder="Enter the name of ground water...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_ground_water_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_ground_water_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_ground_water_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_ground_water_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_ground_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Reservoir (Name): </strong>
                    <input class="form-control" name="mill_domestic_reservoir_name"
                        placeholder="Enter the name of reservoir...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_reservoir_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_reservoir_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_reservoir_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_reservoir_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_reservoir_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Natural Pond (Name): </strong>
                    <input class="form-control" name="mill_domestic_natural_pond_name"
                        placeholder="Enter the name of natural pond...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_natural_pond_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_natural_pond_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_natural_pond_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_natural_pond_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_natural_pond_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Local Authority (Jabatan Air): </strong>
                    <input class="form-control" name="mill_domestic_local_authority_name"
                        placeholder="Enter the name of local authority...">
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_local_authority_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_local_authority_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_local_authority_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_local_authority_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_local_authority_water"
                        placeholder="Use of water..."></textarea>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group mb-3">
                    <strong>Rain Water Harvesting: </strong>
                </div>

                <div class="form-group mb-3">
                    <strong>Abstraction: </strong><br>
                    {!! Form::radio('mill_domestic_rain_water_harvesting_abstraction', 'yes') !!}
                    {!! Form::label('mill_domestic_rain_water_harvesting_abstraction', 'Yes') !!}<br>
                    {!! Form::radio('mill_domestic_rain_water_harvesting_abstraction', 'no') !!}
                    {!! Form::label('mill_domestic_rain_water_harvesting_abstraction', 'No') !!}
                </div>

                <div class="form-group mb-3">
                    <strong>Use of Water : </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_use_of_harvesting_water"
                        placeholder="Use of water..."></textarea>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Other (Specify if any): </strong>
                        <input class="form-control" name="mill_domestic_other_name"
                            placeholder="Enter the name of other source...">
                    </div>

                    <div class="form-group mb-3">
                        <strong>Abstraction: </strong><br>
                        {!! Form::radio('mill_domestic_other_abstraction', 'yes') !!}
                        {!! Form::label('mill_domestic_other_abstraction', 'Yes') !!}<br>
                        {!! Form::radio('mill_domestic_other_abstraction', 'no') !!}
                        {!! Form::label('mill_domestic_other_abstraction', 'No') !!}
                    </div>

                    <div class="form-group mb-3">
                        <strong>Use of Water : </strong>
                        <textarea class="form-control" rows="2" name="mill_domestic_use_of_other_water"
                            placeholder="Use of water..."></textarea>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Water Consumption (Total Liter/Year)</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Housing: </strong>
                        <input class="form-control" name="mill_domestic_housing_wc"  type="number" step=any
                            placeholder="Enter the water comsumption by housing..." required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Office Building: </strong>
                        <input class="form-control" name="mill_domestic_office_building_wc"  type="number" step=any
                            placeholder="Enter the water comsumption by office building..." required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Other (Specify): </strong>
                        <input class="form-control" name="mill_domestic_other_wc_name"
                            placeholder="Enter the name of other sources..."><br />
                        <input class="form-control" name="mill_domestic_other_wc"  type="number" step=any
                            placeholder="Enter the water comsumption by housing...">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Storage Tank Capacity</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Water Treatment Plant Storage Tank: </strong>
                        <input class="form-control" name="mill_domestic_wtpst_stc"  type="number" step=any
                            placeholder="Enter the storage tank capacity of water treatment plant storage tank..."
                            required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Housing: </strong>
                        <input class="form-control" name="mill_domestic_housing_stc"  type="number" step=any
                            placeholder="Enter the storage tank capacity of housing..." required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Office: </strong>
                        <input class="form-control" name="mill_domestic_office_stc"  type="number" step=any
                            placeholder="Enter the storage tank capacity of office..." required>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Total Flow Meter Installed</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Housing Area:</strong>
                        <input class="form-control" name="mill_domestic_ha_fm" placeholder="0"  type="number">
                        <strong>Remark:</strong>
                        <input class="form-control" name="mill_domestic_ha_remark" placeholder="other remark....">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Offiice Area:</strong>
                        <input class="form-control" name="mill_domestic_oa_fm" placeholder="0" type="number">
                        <strong>Remark:</strong>
                        <input class="form-control" name="mill_domestic_oa_remark" placeholder="other remark....">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Other:</strong>
                        <input class="form-control" name="mill_domestic_otr_fm" placeholder="0" type="number">
                        <strong>Remark:</strong>
                        <input class="form-control" name="mill_domestic_otr_remark" placeholder="other remark....">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Pumping/ Flow Rate</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>River to Reservoir (litre/hour):</strong>
                        <input class="form-control" name="mill_domestic_rnr_pfr" placeholder="0">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Reservoir to Water Treatment Plant (litre/hour):</strong>
                        <input class="form-control" name="mill_domestic_rwtp_pfr" placeholder="0">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group mb-3">
                        <strong>Water Treatment Plant to Hosing& Office (litre/hour):</strong>
                        <input class="form-control" name="mill_domestic_wtps_pfr" placeholder="0">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h3>Water Treatment Plant</h3>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>pH Adjustment:</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_pha_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_pha_chemi_dosage">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>Coagulant:</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_coagulant_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_coagulant_chemi_dosage">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>Flocculent:</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_flocculent_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_flocculent_chemi_dosage">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>Filter:</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_filter_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_filter_chemi_dosage">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>Chlorine:</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_chlorine_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_chlorine_chemi_dosage">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h4>Other (Specify):</h4>
                        <strong>Type of Chemical Used (If Any): </strong>
                        <input class="form-control" name="mill_domestic_wtp_other_chemi">
                        <strong>Dosage: </strong>
                        <input class="form-control" name="mill_domestic_wtp_other_chemi_dosage">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                    <div class="form-group mb-3">
                        <h3>Water Quality Monitoring:</h3>
                        <h4>Before Treatment: </h4>
                        <strong>River/ Reservoir/ Pond/ Groundwater</strong><br />
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <label><strong>Parameter (NWQS) :</strong></label><br />
                            <input type="checkbox" id="mill_domestic_bf_ph" name="mill_domestic_bf_ph" value="ph">
                            <label for="ph">pH</label><br>
                            <input type="checkbox" id="mill_domestic_bf_do" name="mill_domestic_bf_do" value="do">
                            <label for="do">Dissolved Oxygen (DO)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_bod" name="mill_domestic_bf_bod" value="bod">
                            <label for="bod">Biological Oxygen Demand (BOD)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_cod" name="mill_domestic_bf_cod" value="cod">
                            <label for="cod">Chemical Oxygen Demand (COD)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_tss" name="mill_domestic_bf_tss" value="tss">
                            <label for="tss">Total Suspended Solid (TSS)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_an" name="mill_domestic_bf_an" value="an">
                            <label for="an">Ammoniacal Nitrogen (AN)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_ong" name="mill_domestic_bf_ong" value="ong">
                            <label for="ong">Oil and Grease (O&G)</label><br>
                            <input type="checkbox" id="mill_domestic_bf_turbidity" name="mill_domestic_bf_turbidity"
                                value="turbidity">
                            <label for="turbidity">Turbidity</label><br>

                            <br><label><strong>Other (specify): </strong></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="mill_domestic_bf_other_parameter_value">
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="mill_domestic_bf_other_parameter_name">
                            </div>
                            <br>
                            <strong>Quality Monitoring Frequency: </strong>
                            <textarea class="form-control" rows="2" name="mill_domestic_wqm_bf_qmf"
                                placeholder="Quality Monitoring Frequency..."></textarea><br>
                            <h4>After Treatment</h4>
                            <strong>Water Treatment Storage Tank/ Tap Water/ Rain Water</strong>
                            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                                <label><strong>MOH Parameter (NSTWQ) :</strong></label><br />
                                <input type="checkbox" id="mill_domestic_af_tc" name="mill_domestic_af_tc" value="tc">
                                <label for="ph">Total Coliform</label><br>
                                <input type="checkbox" id="mill_domestic_af_ecoli" name="mill_domestic_af_ecoli"
                                    value="ecoli">
                                <label for="do">E.Coli</label><br>
                                <input type="checkbox" id="mill_domestic_af_turbidity" name="mill_domestic_af_turbidity"
                                    value="turbidity">
                                <label for="bod">Turbidity</label><br>
                                <input type="checkbox" id="mill_domestic_af_ph" name="mill_domestic_af_ph" value="ph">
                                <label for="cod">pH</label><br>
                                <input type="checkbox" id="mill_domestic_af_frc" name="mill_domestic_af_frc"
                                    value="frc">
                                <label for="tss">Free Residual Chlorine</label><br>
                                <input type="checkbox" id="mill_domestic_af_iron" name="mill_domestic_af_iron"
                                    value="iron">
                                <label for="an">Iron</label><br>
                                <input type="checkbox" id="mill_domestic_af_manganese" name="mill_domestic_af_manganese"
                                    value="manganese">
                                <label for="ong">Manganese</label><br>

                                <br><label><strong>Other (specify): </strong></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="mill_domestic_af_other_parameter_value">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        name="mill_domestic_af_other_parameter_name">
                                </div>
                                <strong>Quality Monitoring Frequency: </strong>
                                <textarea class="form-control" rows="2" name="mill_domestic_wqm_af_qmf"
                                    placeholder="Quality Monitoring Frequency..."></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Waste Water Monitoring</h3><br />
                    <h4>Sewage System</h4>
                    <textarea class="form-control" rows="2" name="mill_domestic_wwm_ss"
                        placeholder="Eg: Weekly house inspection,..."></textarea><br />
                    <h4>Drainage</h4>
                    <textarea class="form-control" rows="2" name="mill_domestic_wwm_d"
                        placeholder="Eg: Weekly house inspection,..."></textarea>
                    <br>
                    <hr>
                    <br>
                    <h3>Water Access To Local Community</h3>
                    <strong>List of Satkeholder: </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_watlc_list_stake"
                        placeholder="List of stakeholder..."></textarea>
                    <strong>Stakeholder Feedback (Regarding to Water Access): </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_watlc_feedback_stake"
                        placeholder="Feedback..."></textarea>
                    <strong>Continual Improvement Plan (If Any): </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_watlc_infoplan_stake"
                        placeholder="Plan..."></textarea>
                    <br>
                    <hr>
                    <br>
                    <h3>Emergency Response Plan</h3>
                    <strong>Drought Seasons Plan: </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_erp_dsp"
                        placeholder="Plan..."></textarea>
                    <strong>Distruption of water supply from Jabatan Air: </strong>
                    <textarea class="form-control" rows="2" name="mill_domestic_erp_dwsja" placeholder="..."></textarea>
                    <br>
                    <hr>
                    <br>
                    <h3>Awareness & Education</h3>
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                        <div class="form-group mb-3">
                            <table class="table table-bordered text-center" id="table_mill_ae">
                                <thead>
                                    <tr>
                                        <th>Name of Program</th>
                                        <th>Availability of Program</th>
                                        <th>Plan</th>
                                        <th>Actual</th>
                                        <th>PIC</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input class="form-control" name="mill_domestic_ae_np[]"></td>
                                        <td><select class="custom-select" name="mill_domestic_ae_aop[]">
                                                <option selected value="available">Available</option>
                                                <option value="notavailable">Not Available</option>
                                            </select>
                                        </td>
                                        <td> <select class="custom-select" name="mill_domestic_ae_plan[]">
                                                <option selected>Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </td>
                                        <td><select class="custom-select" name="mill_domestic_ae_actual[]">
                                                <option selected>Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select></td>
                                        <td><input class="form-control" name="mill_domestic_ae_pic[]"></td>
                                        <td><button type="button" class="btn btn-danger"
                                                onclick="deleteAwarenessEducationRow(this)">Delete</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary" onclick="addNewAwarenessEducationRow()">Add
                                New Row</button>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <h3>Maps (Include GPS Coordinate)</h3>
                    <strong>Mill Area</strong>
                    <input class="form-control" name="mill_domestic_map_mill_area"><br />
                    <strong>Office & Housing Area</strong>
                    <input class="form-control" name="mill_domestic_map_oh_area"><br />
                    <strong>Water Sources</strong>
                    <input class="form-control" name="mill_domestic_map_ws_area"><br />
                    <strong>Water Treatment Plant</strong>
                    <input class="form-control" name="mill_domestic_map_wtp_area"><br />
                    <strong>Riparian Zone</strong>
                    <input class="form-control" name="mill_domestic_map_rz_area"><br />
                    <strong>Stakeholder Settlement</strong>
                    <input class="form-control" name="mill_domestic_map_ss_area"><br />
                    <strong>Topo Map</strong>
                    <input type="file" class="form-control-file" name="mill_domestic_map_topo_map">
                    <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
</form>
<script>
    function addNewPondInfoRow(){
        $('#table_mill_operation_wwm tbody').append(`<tr>
                                    <td><input class="form-control" name="mill_operation_wwm_pond_name[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_size[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_capacity[]"></td>
                                    <td><input class="form-control" name="mill_operation_wwm_r_time[]"></td>
                                    <td><button type="button" class="btn btn-danger" onclick="deletePondInfoRow(this)">Delete</button></td>
                                </tr>`);
    }
    function deletePondInfoRow(el) {
        if ($("#table_mill_operation_wwm tbody tr").length > 1) {
            $(el).closest("tr").remove()
        }
    }
</script>
<script>
    function addNewWaterSourcesRow(){
        $('#table_mill_pnws tbody').append(`<tr>
                            <td><input class="form-control" name="mill_operation_pwns_location_riparian[]"></td>
                            <td><input class="form-control" name="mill_operation_pwns_riparian_reserve[]"></td>
                            <td><input class="form-control" name="mill_operation_pwns_mf[]"></td>
                            <td><input class="form-control" name="mill_operation_pwns_pic[]"></td>
                            <td><button type="button" class="btn btn-danger" onclick="deleteWaterSourcesRow(this)">Delete</button></td>
                        </tr>`);
    }
    function deleteWaterSourcesRow(el) {
        if ($("#table_mill_pnws tbody tr").length > 1) {
            $(el).closest("tr").remove()
        }
    }
</script>
<script>
    function addNewAwarenessEducationRow(){
        $('#table_mill_ae tbody').append(`<tr>
            <td><input class="form-control" name="mill_domestic_ae_np[]"></td>
                            <td><select class="custom-select" name="mill_domestic_ae_aop[]">
                                    <option selected value="available">Available</option>
                                    <option value="notavailable">Not Available</option>
                                </select>
                            </td>
                            <td> <select class="custom-select" name="mill_domestic_ae_plan[]">
                                    <option selected>Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </td>
                            <td><select class="custom-select" name="mill_domestic_ae_actual[]">
                                <option selected>Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select></td>
                            <td><input class="form-control" name="mill_domestic_ae_pic[]"></td>
                            <td><button type="button" class="btn btn-danger"
                                    onclick="deleteAwarenessEducationRow(this)">Delete</button></td>
                        </tr>`);
    }
    function deleteAwarenessEducationRow(el) {
        if ($("#table_mill_ae tbody tr").length > 1) {
            $(el).closest("tr").remove()
        }
    }
</script>
@endsection