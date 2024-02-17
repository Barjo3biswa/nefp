<div class="row" id="printableArea">
    <table class="table table-bordered">
            <tr>
                <th style="text-align: center; white-space: nowrap !important;" >
                    <h3>NORTH EAST FOOD PROCESSING SUMMIT - 2024</h3>
                </th>
            </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{$application->first_name.' '.$application->mioddle_name.' '.$application->last_name}}</td>
            <th>Email</th>
            <td >{{$application->email}}</td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td >{{$application->mobile_no}}</td>
            <th>Organization</th>
            <td>{{$application->organization}}</td>
        </tr>
        <tr>
            <th>Designation</th>
            <td >{{$application->Designation}}</td>
            <th>State</th>
            <td>{{$application->State->name}}</td>
        </tr>
        <tr>
            <th>pin_code</th>
            <td >{{$application->pin_code}}</td>
            <th>profile_type</th>
            <td >{{$application->profile_type}}</td>
        </tr>
    </table>
    <table class="table table-bordered">
        <tr>
            <th>Exhibition</th>
            <td>{{$application->Exhibition=='yes'?'Applied':''}}</td>
            <th>btob_meeting</th>
            <td>{{$application->btob_meeting=='yes'?'Applied':''}}</td>
            <th>btog_meeting</th>
            <td>{{$application->btog_meeting=='yes'?'Applied':''}}</td>
            <th>general</th>
            <td>{{$application->general=='yes'?'Applied':''}}</td>
        </tr>
    </table>
    @if ($application->Exhibition=='yes')
    <label for=""><strong><u><h3>For Exhibition:</h3></u></strong></label>
    <table class="table table-bordered">
        @php
            $producttt = json_decode($application->product)??[];
        @endphp
        <tr>
            <th>Products</th>
            <td >@foreach ($producttt as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
            <th>Services</th>
            <td >{{$application->services_exib}}</td>
        </tr>
        <tr>
            <th>Machinary</th>
            <td >{{$application->machinery_exib}}</td>
            <th>Packeging </th>
            <td >{{$application->packaging_exib}}</td>
        </tr>
        <tr>
            <th>Turnover</th>
            <td >{{$application->turnover}}</td>
            <th>Fssai</th>
            <td >{{$application->fssai}}</td>
        </tr>
        <tr>
            <th>Fssai license_no</th>
            <td >{{$application->license_no}}</td>
            <th>Import/Export Code</th>
            <td >{{$application->imp_exp}}</td>
        </tr>
        <tr>
            <th>GST No</th>
            <td >{{$application->gst}}</td>
            <th></th>
            <td></td>
        </tr>
    </table>
    @endif
    @if ($application->btob_meeting=='yes')
    <label for=""><strong><u><h3>For B2B Meetings:</h3></u></strong></label>
    <table class="table table-bordered">
        <tr>
            <th>buying interest</th>
            <td >{{$application->buying}}</td>
            <th>selling interest</th>
            <td >{{$application->selling}}</td>
        </tr>
        <tr>
            @php
                $raw_materialsi = json_decode($application->buy_raw_materials)??[];
                $raw_materialsii = json_decode($application->sell_raw_materials)??[];
            @endphp
            <th>buy_raw_materials</th>
            <td >@foreach ($raw_materialsi as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
            <th>sell_raw_materials</th>
            <td >@foreach ($raw_materialsii as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
        </tr>
        <tr>
            <th>buy Other raw materials</th>
            <td >{{$application->buy_other_raw_materials}}</td>
            <th>Sell Other raw materials</th>
            <td >{{$application->sell_other_raw_materials}}</td>
        </tr>
        <tr>
            @php
                $buy_processedi = json_decode($application->buy_processed)??[];
                $buy_processedii = json_decode($application->sell_processed)??[];
            @endphp
            <th>buy_processed</th>
            <td >@foreach ($buy_processedi as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
            <th>sell_processed</th>
            <td >@foreach ($buy_processedii as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
        </tr>
        <tr>
            <th>buy_services_checkbox</th>
            <td >{{$application->buy_services_checkbox}}</td>
            <th>sell_services_checkbox</th>
            <td >{{$application->sell_services_checkbox}}</td>
        </tr>
        <tr>
            <th>services_buy</th>
            <td >{{$application->services_buy}}</td>
            <th>services_sell</th>
            <td >{{$application->services_sell}}</td>
        </tr>
        <tr>
            <th>buy_machinery_checkbox</th>
            <td >{{$application->buy_machinery_checkbox}}</td>
            <th>sell_machinery_checkbox</th>
            <td >{{$application->sell_machinery_checkbox}}</td>
        </tr>
        <tr>
            <th>machinery_buy</th>
            <td >{{$application->machinery_buy}}</td>
            <th>machinery_sell</th>
            <td >{{$application->machinery_sell}}</td>
        </tr>
        <tr>
            <th>buy_packaging_checkbox</th>
            <td >{{$application->buy_packaging_checkbox}}</td>
            <th>sell_machinery_checkbox</th>
            <td >{{$application->sell_machinery_checkbox}}</td>
        </tr>
        <tr>
            <th>packaging_buy</th>
            <td >{{$application->packaging_buy}}</td>
            <th>packaging_sell</th>
            <td >{{$application->packaging_sell}}</td>
        </tr>
    </table>
    @endif
    @if ($application->btog_meeting=='yes')
    <label for=""><strong><u><h3>For B2G Meetings:</h3></u></strong></label>
    <table class="table table-bordered">
        @php
            $domain = json_decode($application->domain)??[];
            $sub_of_dis = json_decode($application->sub_of_dis)??[];
        @endphp
        <tr>
            <th>domain</th>
            <td >@foreach ($domain as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
            <th>sub_of_dis</th>
            <td >@foreach ($sub_of_dis as $mat)<span class="badge badge-secondary" >{{$mat}}</span> &nbsp;@endforeach</td>
        </tr>
        <tr>
            <th>other_discussion</th>
            <td >{{$application->other_discussion}}</td>
            <th></th>
            <td></td>
        </tr>
    </table>
    @endif




    <table class="table table-bordered">
        <tr>
            <td><input type="checkbox" id="first" name="first" {{$application->first=='yes'?'checked':''}} disabled="disabled"></td>
            <th>Technical Seminars: Enhancing food processing sector through value chain interventions of major agri-horti commodities of NE India</th>
        </tr>
        <tr>
            <td><input type="checkbox" id="first" name="first" {{$application->first=='yes'?'checked':''}} disabled="disabled"></td>
            <th>Technical Seminars: Enabling Environment of MSME development and avenues for enhancing exports from NE region to South East Asian Market</th>
        </tr>
        <tr>
            <td><input type="checkbox" id="first" name="first" {{$application->first=='yes'?'checked':''}} disabled="disabled"></td>
            <th>Start-up Interaction: Food Start Up- Entrepreneurial journeys of NE Soil</th>
        </tr>
        @if ($application->product_img)
        <tr>
            <th colspan=2><a href="{{ asset('/')}}{{$application->product_img}}" target="_blank">Download Product Brochure/Product: Photo Compilation</a></th>
        </tr>
        @endif
    </table>
</div>
