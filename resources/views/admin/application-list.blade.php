@extends('admin.layout.app')
@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="card">
            <div class="card-header">
                <h5>
                    @if ($decrypted == "all")
                        all Application
                    @elseif ($decrypted == "exi")
                        Exhibition
                    @elseif ($decrypted == "b2b")
                        B2B Meetings
                    @elseif ($decrypted == "b2g")
                        B2G Meetings
                    @endif
                </h5>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover" id="dtExample">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th style="display: none;">Email</th>
                                <th style="display: none;">Mobile No</th>
                                <th>Organization</th>
                                <th style="display: none;">Designation</th>
                                <th>State</th>
                                <th style="display: none;">pin_code</th>
                                <th style="display: none;">profile_type</th>
                                <th >Exhibition</th>
                                <th >btob_meeting</th>
                                <th >btog_meeting</th>
                                <th >general</th>
                                <th style="display: none;">Products</th>

                                <td style="display: none;">Services</td>
                                <td style="display: none;">Machinary</td>
                                <td style="display: none;">Packeging </td>

                                <th style="display: none;">Turnover</th>
                                <th style="display: none;">Fssai</th>
                                <th style="display: none;">Fssai license_no</th>
                                <th style="display: none;">Import/Export Code</th>
                                <th style="display: none;">GST No</th>
                                <th style="display: none;">buying interest</th>
                                <th style="display: none;">selling interest</th>
                                <th style="display: none;">buy_raw_materials</th>
                                <th style="display: none;">buy Other raw materials</th>
                                <th style="display: none;">buy_processed</th>
                                <th style="display: none;">buy_services_checkbox</th>
                                <th style="display: none;">services_buy</th>
                                <th style="display: none;">buy_machinery_checkbox</th>
                                <th style="display: none;">machinery_buy</th>
                                <th style="display: none;">buy_packaging_checkbox</th>
                                <th style="display: none;">packaging_buy</th>
                                <th style="display: none;">sell_raw_materials</th>
                                <th style="display: none;">Sell Other raw materials</th>
                                <th style="display: none;">sell_processed</th>
                                <th style="display: none;">sell_services_checkbox</th>
                                <th style="display: none;">services_sell</th>
                                <th style="display: none;">sell_machinery_checkbox</th>
                                <th style="display: none;">machinery_sell</th>
                                <th style="display: none;">sell_packaging_checkbox</th>
                                <th style="display: none;">packaging_sell</th>
                                <th style="display: none;">domain</th>
                                <th style="display: none;">sub_of_dis</th>
                                <th style="display: none;">other_discussion</th>
                                <th style="display: none;">first</th>
                                <th style="display: none;">second</th>
                                <th style="display: none;">third</th>
                                <th style="display: none;">exi_status</th>
                                <th style="display: none;">b2b_status</th>
                                <th style="display: none;">b2g_status</th>
                                <th style="display: none;">gen_status</th>
                                <th style="display: none;">product_img</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($application as $app)
                            <tr>
                                <td>{{$app->first_name.' '.$app->mioddle_name.' '.$app->last_name}}</td>
                                <td style="display: none;">{{$app->email}}</td>
                                <td style="display: none;">{{$app->mobile_no}}</td>
                                <td>{{$app->organization}}</td>
                                <td style="display: none;">{{$app->Designation}}</td>
                                <td>{{$app->State->name}}</td>
                                <td style="display: none;">{{$app->pin_code}}</td>
                                <td style="display: none;">{{$app->profile_type}}</td>
                                <td>{{$app->Exhibition}}</td>
                                <td>{{$app->btob_meeting}}</td>
                                <td>{{$app->btog_meeting}}</td>
                                <td>{{$app->general}}</td>
                                <td style="display: none;">{{$app->product}}</td>

                                <td style="display: none;">{{$app->services_exib}}</td>
                                <td style="display: none;">{{$app->machinery_exib}}</td>
                                <td style="display: none;">{{$app->packaging_exib}}</td>

                                <td style="display: none;">{{$app->turnover}}</td>
                                <td style="display: none;">{{$app->fssai}}</td>
                                <td style="display: none;">{{$app->license_no}}</td>
                                <td style="display: none;">{{$app->imp_exp}}</td>
                                <td style="display: none;">{{$app->gst}}</td>
                                <td style="display: none;">{{$app->buying}}</td>
                                <td style="display: none;">{{$app->selling}}</td>
                                <td style="display: none;">{{$app->buy_raw_materials}}</td>
                                <td style="display: none;">{{$app->buy_other_raw_materials}}</td>
                                <td style="display: none;">{{$app->buy_processed}}</td>
                                <td style="display: none;">{{$app->buy_services_checkbox}}</td>
                                <td style="display: none;">{{$app->services_buy}}</td>
                                <td style="display: none;">{{$app->buy_machinery_checkbox}}</td>
                                <td style="display: none;">{{$app->machinery_buy}}</td>
                                <td style="display: none;">{{$app->buy_packaging_checkbox}}</td>
                                <td style="display: none;">{{$app->packaging_buy}}</td>
                                <td style="display: none;">{{$app->sell_raw_materials}}</td>
                                <td style="display: none;">{{$app->sell_other_raw_materials}}</td>
                                <td style="display: none;">{{$app->sell_processed}}</td>
                                <td style="display: none;">{{$app->sell_services_checkbox}}</td>
                                <td style="display: none;">{{$app->services_sell}}</td>
                                <td style="display: none;">{{$app->sell_machinery_checkbox}}</td>
                                <td style="display: none;">{{$app->machinery_sell}}</td>
                                <td style="display: none;">{{$app->sell_packaging_checkbox}}</td>
                                <td style="display: none;">{{$app->packaging_sell}}</td>
                                <td style="display: none;">{{$app->domain}}</td>
                                <td style="display: none;">{{$app->sub_of_dis}}</td>
                                <td style="display: none;">{{$app->other_discussion}}</td>
                                <td style="display: none;">{{$app->first}}</td>
                                <td style="display: none;">{{$app->second}}</td>
                                <td style="display: none;">{{$app->third}}</td>
                                <td style="display: none;">{{$app->exi_status}}</td>
                                <td style="display: none;">{{$app->b2b_status}}</td>
                                <td style="display: none;">{{$app->b2g_status}}</td>
                                <td style="display: none;">{{$app->gen_status}}</td>
                                <td style="display: none;">{{$app->product_img}}</td>
                                <th>
                                    <a href="{{route('view-indiv',[Crypt::encrypt($app->id)])}}" class="btn btn-primary btn-xs">View</a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    // $('#dtExample').DataTable({
    //     "pageLength": 100
    // });
    new DataTable('#dtExample', {
        layout: {
        topStart: {
                buttons: ['excel']
            }
        },
        pageLength: 100
    });
});

</script>

@endsection
