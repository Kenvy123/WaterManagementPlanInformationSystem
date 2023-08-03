<?php

namespace App\Http\Controllers;

use App\Models\MillForm;
use App\Models\MillOperationWSource;
use App\Models\MillOperationffb;
use App\Models\MillOperationWConsumption;
use App\Models\MillOperationFlowMeter;
use App\Models\MillOperationPFRate;
use App\Models\MillOperationWMonitoring;
use App\Models\MillOperationWasteWMonitoring;
use App\Models\MillOperationProtectionwns;
use App\Models\MillDomesticWSource;
use App\Models\MillDomesticWConsumptions;
use App\Models\MillDomesticSTCapacity;
use App\Models\MillDomesticFlowMeter;
use App\Models\MillDomesticPFRate;
use App\Models\MillDomesticWTPlant;
use App\Models\MillDomesticWMonitoring;
use App\Models\MillDomesticWasteWMonitoring;
use App\Models\MillDomesticWATLCommunity;
use App\Models\MillDomesticERPlan;
use App\Models\MillDomesticAEducation;
use App\Models\MillDomesticMap;
use App\Models\OperatingUnits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MillFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:millform-list|millform-create|millform-edit|millform-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:millform-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:millform-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:millform-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $millform = MillForm::latest()->paginate(10);
        return view('mill_form.index', compact('millform'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        $form = MillForm::all();
        $operatingUnits = OperatingUnits::all();
        return view('mill_form.create', ['form' => $form], ['operatingUnits' => $operatingUnits]);
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'mill_form_year' => 'required',
            'mill_unit_name' => 'required',
            'mill_commission_info' => 'required',
            'mill_throughput' => 'required',
            'mill_staff_exe' => 'required',
            'mill_staff_exed' => 'required',
            'mill_workers' => 'required',
            'mill_worker_dep' => 'required',
            'mill_total_housing' => 'required',
            'mill_Jan' => 'required',
            'mill_Feb' => 'required',
            'mill_Mar' => 'required',
            'mill_Apr' => 'required',
            'mill_May' => 'required',
            'mill_Jun' => 'required',
            'mill_Jul' => 'required',
            'mill_Aug' => 'required',
            'mill_Sep' => 'required',
            'mill_Oct' => 'required',
            'mill_Nov' => 'required',
            'mill_Dec' => 'required',
            'mill_operation_river_water_name' => 'required',
            'mill_operation_river_water_abstraction' => 'required',
            'mill_operation_ground_water_name' => 'required',
            'mill_operation_ground_water_abstraction' => 'required',
            'mill_operation_reservoir_name' => 'required',
            'mill_operation_reservoir_abstraction' => 'required',
            'mill_operation_natural_pond_name' => 'required',
            'mill_operation_natural_pond_abstraction' => 'required',
            'mill_operation_local_authority_name' => 'required',
            'mill_operation_local_authority_abstraction' => 'required',
            'mill_operation_rain_water_harvesting_abstraction' => 'required',
            'mill_operation_o_record' => 'required',
            'mill_operation_processing_ffb_wc' => 'required',
            'mill_operation_workshop_wc' => 'required',
            'mill_operation_lab_wc' => 'required',
            'mill_operation_bs_fm' => 'required',
            'mill_operation_ws_fm' => 'required',
            'mill_operation_store_fm' => 'required',
            'mill_operation_rnr_pfr' => 'required',
            'mill_operation_rwtp_pfr' => 'required',
            'mill_operation_wtps_pfr' => 'required',
            'mill_operation_wwm_bod_limit_discharge' => 'required',
            'mill_operation_wwm_cod_limit_discharge' => 'required',
            'mill_operation_wwm_ts_limit_discharge' => 'required',
            'mill_operation_wwm_ss_limit_discharge' => 'required',
            'mill_operation_wwm_ong_limit_discharge' => 'required',
            'mill_operation_wwm_an_limit_discharge' => 'required',
            'mill_operation_wwm_tn_limit_discharge' => 'required',
            'mill_operation_wwm_ph_limit_discharge' => 'required',
            'mill_operation_wwm_temp_limit_discharge' => 'required',
            'mill_operation_wwm_pond_name' => 'required',
            'mill_operation_wwm_size' => 'required',
            'mill_operation_wwm_capacity' => 'required',
            'mill_operation_wwm_r_time' => 'required',
            'mill_operation_pwns_location_riparian' => 'required',
            'mill_operation_pwns_riparian_reserve' => 'required',
            'mill_operation_pwns_pic' => 'required',
            'mill_domestic_river_water_name' => 'required',
            'mill_domestic_river_water_abstraction' => 'required',
            'mill_domestic_ground_water_name' => 'required',
            'mill_domestic_ground_water_abstraction' => 'required',
            'mill_domestic_reservoir_name' => 'required',
            'mill_domestic_reservoir_abstraction' => 'required',
            'mill_domestic_natural_pond_name' => 'required',
            'mill_domestic_natural_pond_abstraction' => 'required',
            'mill_domestic_local_authority_name' => 'required',
            'mill_domestic_local_authority_abstraction' => 'required',
            'mill_domestic_rain_water_harvesting_abstraction' => 'required',
            'mill_domestic_housing_wc' => 'required',
            'mill_domestic_office_building_wc' => 'required',
            'mill_domestic_wtpst_stc' => 'required',
            'mill_domestic_housing_stc' => 'required',
            'mill_domestic_office_stc' => 'required',
            'mill_domestic_ha_fm' => 'required',
            'mill_domestic_oa_fm' => 'required',
            'mill_domestic_otr_fm' => 'required',
            'mill_domestic_rnr_pfr' => 'required',
            'mill_domestic_rwtp_pfr' => 'required',
            'mill_domestic_wtps_pfr' => 'required',
            'mill_domestic_wwm_ss' => 'required',
            'mill_domestic_wwm_d' => 'required',
            'mill_domestic_watlc_list_stake' => 'required',
            'mill_domestic_watlc_feedback_stake' => 'required',
            'mill_domestic_erp_dsp' => 'required',
            'mill_domestic_erp_dwsja' => 'required',
            'mill_domestic_ae_np' => 'required',
            'mill_domestic_ae_aop' => 'required',
            'mill_domestic_ae_plan' => 'required',
            'mill_domestic_ae_actual' => 'required',
            'mill_domestic_ae_pic' => 'required',
            'mill_domestic_map_mill_area' => 'required',
            'mill_domestic_map_oh_area' => 'required',
            'mill_domestic_map_ws_area' => 'required',
            'mill_domestic_map_wtp_area' => 'required',
            'mill_domestic_map_rz_area' => 'required',
            'mill_domestic_map_ss_area' => 'required',
            'mill_domestic_map_topo_map' => 'required',
        ]);

        $input=$request->all();
        // dd($input);
        $millform = MillForm::create($input);
        $input['mill_form_id'] = $millform->id;
        $mill_operation_ws = MillOperationWSource::create($input);
        $mill_operation_ffb = MillOperationffb::create($input);
        $mill_operation_wc = MillOperationWConsumption::create($input);
        $mill_operation_fm = MillOperationFlowMeter::create($input);
        $mill_operation_pfr = MillOperationPFRate::create($input);
        $mill_operation_wm = MillOperationWMonitoring::create($input);

        $input['mill_operation_wwm_pond_name'] = json_encode($input['mill_operation_wwm_pond_name']);
        $input['mill_operation_wwm_size'] = json_encode($input['mill_operation_wwm_size']);
        $input['mill_operation_wwm_capacity'] = json_encode($input['mill_operation_wwm_capacity']);
        $input['mill_operation_wwm_r_time'] = json_encode($input['mill_operation_wwm_r_time']);

        $mill_operation_wwm = MillOperationWasteWMonitoring::create($input);

        $input['mill_operation_pwns_location_riparian'] = json_encode($input['mill_operation_pwns_location_riparian']);
        $input['mill_operation_pwns_riparian_reserve'] = json_encode($input['mill_operation_pwns_riparian_reserve']);
        $input['mill_operation_pwns_mf'] = json_encode($input['mill_operation_pwns_mf']);
        $input['mill_operation_pwns_pic'] = json_encode($input['mill_operation_pwns_pic']);

        $mill_operation_pwns = MillOperationProtectionwns::create($input);
        $mill_domestic_ws = MillDomesticWSource::create($input);
        $mill_domestic_wc = MillDomesticWConsumptions::create($input);
        $mill_domestic_stc = MillDomesticSTCapacity::create($input);
        $mill_domestic_fm = MillDomesticFlowMeter::create($input);
        $mill_domestic_pfr = MillDomesticPFRate::create($input);
        $mill_domestic_wtp = MillDomesticWTPlant::create($input);
        $mill_domestic_wm = MillDomesticWMonitoring::create($input);


        $mill_domestic_wwm = MillDomesticWasteWMonitoring::create($input);
        $mill_domestic_watlc = MillDomesticWATLCommunity::create($input);
        $mill_domestic_erp = MillDomesticERPlan::create($input);

        $input['mill_domestic_ae_np'] = json_encode($input['mill_domestic_ae_np']);
        $input['mill_domestic_ae_aop'] = json_encode($input['mill_domestic_ae_aop']);
        $input['mill_domestic_ae_plan'] = json_encode($input['mill_domestic_ae_plan']);
        $input['mill_domestic_ae_actual'] = json_encode($input['mill_domestic_ae_actual']);
        $input['mill_domestic_ae_pic'] = json_encode($input['mill_domestic_ae_pic']);


        $mill_domestic_ae = MillDomesticAEducation::create($input);
        $mill_domestic_map = MillDomesticMap::create($input);
        return redirect()->route('mill_form.index')
            ->with('success', 'form created successfully.');
    }


    public function show(MillForm $millform)
    {
        return view('mill_form.show', compact('millform'));
    }


    public function edit($id)
    {
        $millform = MillForm::find($id);
        $mill_operation_ws = MillOperationWSource::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_ffb = MillOperationffb::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_wc = MillOperationWConsumption::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_fm = MillOperationFlowMeter::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_pfr = MillOperationPFRate::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_wm = MillOperationWMonitoring::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_wwm = MillOperationWasteWMonitoring::firstWhere('mill_form_id', $id)->toArray();
        $mill_operation_pwns = MillOperationProtectionwns::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_ws = MillDomesticWSource::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_wc = MillDomesticWConsumptions::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_stc = MillDomesticSTCapacity::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_fm = MillDomesticFlowMeter::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_pfr = MillDomesticPFRate::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_wtp = MillDomesticWTPlant::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_wm = MillDomesticWMonitoring::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_wwm = MillDomesticWasteWMonitoring::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_watlc= MillDomesticWATLCommunity::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_erp = MillDomesticERPlan::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_ae = millDomesticAEducation::firstWhere('mill_form_id', $id)->toArray();
        $mill_domestic_map = millDomesticMap::firstWhere('mill_form_id', $id)->toArray();
        return view('mill_form.edit', compact('millform','mill_operation_ws'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'mill_form_year' => 'required',
            'mill_unit_name' => 'required',
            'mill_commission_info' => 'required',
            'mill_throughput' => 'required',
            'mill_staff_exe' => 'required',
            'mill_staff_exed' => 'required',
            'mill_workers' => 'required',
            'mill_worker_dep' => 'required',
            'mill_total_housing' => 'required',
            'mill_Jan' => 'required',
            'mill_Feb' => 'required',
            'mill_Mar' => 'required',
            'mill_Apr' => 'required',
            'mill_May' => 'required',
            'mill_Jun' => 'required',
            'mill_Jul' => 'required',
            'mill_Aug' => 'required',
            'mill_Sep' => 'required',
            'mill_Oct' => 'required',
            'mill_Nov' => 'required',
            'mill_Dec' => 'required',
            'mill_operation_river_water_name' => 'required',
            'mill_operation_river_water_abstraction' => 'required',
            'mill_operation_ground_water_name' => 'required',
            'mill_operation_ground_water_abstraction' => 'required',
            'mill_operation_reservoir_name' => 'required',
            'mill_operation_reservoir_abstraction' => 'required',
            'mill_operation_natural_pond_name' => 'required',
            'mill_operation_natural_pond_abstraction' => 'required',
            'mill_operation_local_authority_name' => 'required',
            'mill_operation_local_authority_abstraction' => 'required',
            'mill_operation_rain_water_harvesting_abstraction' => 'required',
            'mill_operation_o_record' => 'required',
            'mill_operation_processing_ffb_wc' => 'required',
            'mill_operation_workshop_wc' => 'required',
            'mill_operation_lab_wc' => 'required',
            'mill_operation_bs_fm' => 'required',
            'mill_operation_ws_fm' => 'required',
            'mill_operation_store_fm' => 'required',
            'mill_operation_rnr_pfr' => 'required',
            'mill_operation_rwtp_pfr' => 'required',
            'mill_operation_wtps_pfr' => 'required',
            'mill_operation_wwm_bod_limit_discharge' => 'required',
            'mill_operation_wwm_cod_limit_discharge' => 'required',
            'mill_operation_wwm_ts_limit_discharge' => 'required',
            'mill_operation_wwm_ss_limit_discharge' => 'required',
            'mill_operation_wwm_ong_limit_discharge' => 'required',
            'mill_operation_wwm_an_limit_discharge' => 'required',
            'mill_operation_wwm_tn_limit_discharge' => 'required',
            'mill_operation_wwm_ph_limit_discharge' => 'required',
            'mill_operation_wwm_temp_limit_discharge' => 'required',
            'mill_operation_wwm_pond_name' => 'required',
            'mill_operation_wwm_size' => 'required',
            'mill_operation_wwm_capacity' => 'required',
            'mill_operation_pwns_location_riparian' => 'required',
            'mill_operation_pwns_riparian_reserve' => 'required',
            'mill_operation_pwns_pic' => 'required',
            'mill_domestic_river_water_name' => 'required',
            'mill_domestic_river_water_abstraction' => 'required',
            'mill_domestic_ground_water_name' => 'required',
            'mill_domestic_ground_water_abstraction' => 'required',
            'mill_domestic_reservoir_name' => 'required',
            'mill_domestic_reservoir_abstraction' => 'required',
            'mill_domestic_natural_pond_name' => 'required',
            'mill_domestic_natural_pond_abstraction' => 'required',
            'mill_domestic_local_authority_name' => 'required',
            'mill_domestic_local_authority_abstraction' => 'required',
            'mill_domestic_rain_water_harvesting_abstraction' => 'required',
            'mill_domestic_housing_wc' => 'required',
            'mill_domestic_office_building_wc' => 'required',
            'mill_domestic_wtpst_stc' => 'required',
            'mill_domestic_housing_stc' => 'required',
            'mill_domestic_office_stc' => 'required',
            'mill_domestic_ha_fm' => 'required',
            'mill_domestic_oa_fm' => 'required',
            'mill_domestic_otr_fm' => 'required',
            'mill_domestic_rnr_pfr' => 'required',
            'mill_domestic_rwtp_pfr' => 'required',
            'mill_domestic_wtps_pfr' => 'required',
            'mill_domestic_wwm_ss' => 'required',
            'mill_domestic_wwm_d' => 'required',
            'mill_domestic_watlc_list_stake' => 'required',
            'mill_domestic_watlc_feedback_stake' => 'required',
            'mill_domestic_erp_dsp' => 'required',
            'mill_domestic_erp_dwsja' => 'required',
            'mill_domestic_ae_np' => 'required',
            'mill_domestic_ae_aop' => 'required',
            'mill_domestic_ae_plan' => 'required',
            'mill_domestic_ae_actual' => 'required',
            'mill_domestic_ae_pic' => 'required',
            'mill_domestic_map_mill_area' => 'required',
            'mill_domestic_map_oh_area' => 'required',
            'mill_domestic_map_ws_area' => 'required',
            'mill_domestic_map_wtp_area' => 'required',
            'mill_domestic_map_rz_area' => 'required',
            'mill_domestic_map_ss_area' => 'required',
            'mill_domestic_map_topo_map' => 'required',
        ]);

        $input = $request->all();

        $millform = MillForm::find($id);
        $millform->update($input);


        return redirect()->route('mill_form.index')
            ->with('success', 'Form updated successfully');
    }

    public function destroy(MillForm $millform)
    {
        $millform->delete();

        return redirect()->route('mill_form.index')
            ->with('success', 'form deleted successfully');
    }
}