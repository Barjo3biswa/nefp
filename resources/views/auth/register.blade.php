@extends('layouts.front-app')
@section('css')
    <style>
        .select2-container {
            width: 100% !important;
        }
       .card-body label, select, option, textarea {
            font-size: .9em;
            font-family: "Arial", sans-serif;
        }

        .card-body input {
            font-size: .9em;
            font-family: "Arial", sans-serif;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="font-size: 16px;">
                    <div class="card-header">{{ __('Registration') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" onsubmit="return validateForm()" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="name"><strong> First Name</strong></label>
                                    <input id="f_name" type="text"
                                        class="form-control @error('f_name') is-invalid @enderror" name="f_name"
                                        value="{{ old('f_name') }}" autocomplete="name" autofocus>
                                </div>
                                <div class="col-md-4">
                                    <label for="name"><strong>Middle Name</strong></label>
                                    <input id="m_name" type="text"
                                        class="form-control @error('m_name') is-invalid @enderror" name="m_name"
                                        value="{{ old('m_name') }}" autocomplete="name" autofocus>

                                </div>
                                <div class="col-md-4">
                                    <label for="name"><strong>Last Name</strong></label>
                                    <input id="l_name" type="text"
                                        class="form-control @error('l_name') is-invalid @enderror" name="l_name"
                                        value="{{ old('l_name') }}" autocomplete="name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="email" class="col-md-4 col-form-label text-md-right"><strong>Email</strong></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile_no" class="col-md-4 col-form-label text-md-right"><strong>Mobile No</strong></label>
                                    <input id="mobile_no" type="number"
                                        class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no"
                                        value="{{ old('mobile_no') }}" autocomplete="mobile_no">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="organization" class="col-md-12 col-form-label text-md-right"><strong>Organization
                                        Name</strong></label>
                                    <input id="organization" type="text"
                                        class="form-control @error('organization') is-invalid @enderror" name="organization"
                                        value="{{ old('organization') }}" autocomplete="organization">
                                </div>
                                <div class="col-md-6">
                                    <label for="Designation"
                                        class="col-md-12 col-form-label text-md-right"><strong>Designation</strong></label>
                                    <input id="Designation" type="text"
                                        class="form-control @error('Designation') is-invalid @enderror" name="Designation"
                                        value="{{ old('Designation') }}" autocomplete="Designation">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="state" class="col-md-12 col-form-label text-md-right"><strong>Organization
                                        State</strong></label>
                                    <select id="state" name="state" type="text"
                                        class="form-control @error('state') is-invalid @enderror">
                                        <option value="">--Select--</option>
                                        @foreach ($states as $st)
                                            <option value="{{ $st->id }}"
                                                {{ $st->id == old('state') ? 'selected' : '' }}>
                                                {{ $st->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="pin_code" class="col-md-12 col-form-label text-md-right"><strong>Pin Code</strong></label>
                                    <input id="pin_code" type="text"
                                        class="form-control @error('pin_code') is-invalid @enderror" name="pin_code"
                                        value="{{ old('pin_code') }}" autocomplete="pin_code">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="profile_type" class="col-md-12 col-form-label text-md-right"><strong>Type of
                                        Profile </strong></label>
                                    <select id="profile_type"
                                        class="form-control @error('profile_type') is-invalid @enderror" name="profile_type"
                                        value="{{ old('profile_type') }}">
                                        <option value="">--select--</option>
                                        @foreach ($profile_type as $types)
                                            <option value="{{ $types->name }}"
                                                {{ $types->name == old('profile_type') ? 'selected' : '' }}>
                                                {{ $types->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            </br>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for=""><strong>Please Chose the category of Participation</strong></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-1">
                                    <input type="checkbox" id="Exhibition" name="Exhibition" value="yes"
                                        class="parti_cat" {{ old('Exhibition') == 'yes' ? 'checked' : '' }}
                                        style="float:right">
                                </div>
                                <div class="col-md-6">
                                    <label for="Exhibition" style="margin-top: 10px;"> Exhibition</label><br>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-1">
                                    <input type="checkbox" id="btob_meeting" name="btob_meeting" value="yes"
                                        class="parti_cat" {{ old('btob_meeting') == 'yes' ? 'checked' : '' }}
                                        style="float:right">
                                </div>
                                <div class="col-md-6">
                                    <label for="btob_meeting" style="margin-top: 10px;"> B2B Meetings</label><br>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-1">
                                    <input type="checkbox" id="btog_meeting" name="btog_meeting" value="yes"
                                        class="parti_cat" {{ old('btog_meeting') == 'yes' ? 'checked' : '' }}
                                        style="float:right">
                                </div>
                                <div class="col-md-6">
                                    <label for="btog_meeting" style="margin-top: 10px;"> B2G Meetings</label><br>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-1">
                                    <input type="checkbox" id="general" name="general" value="yes"
                                        class="parti_cat" {{ old('general') == 'yes' ? 'checked' : '' }}
                                        style="float:right">
                                </div>
                                <div class="col-md-6">
                                    <label for="general" style="margin-top: 10px;"> General
                                        Participation/Visitor</label><br>
                                </div>
                            </div>

                            </br>
                            <div id="exhibition_form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">For Exhibition</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="product" class="col-md-12 col-form-label text-md-right"><strong> Products
                                        </strong></label>
                                        <select id="product"
                                            class="js-example-basic-multiple  @error('product') is-invalid @enderror"
                                            name="product[]" multiple="multiple">
                                            <option value="">--select--</option>
                                            @foreach ($product as $type)
                                                <option value="{{ $type->name }}"
                                                    @if (is_array(old('product')) && in_array($type->name, old('product'))) selected @endif>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="product" class="col-md-12 col-form-label text-md-right"><strong> Last Year
                                            Turnover </strong></label>
                                        <select id="turnover"
                                            class="form-control @error('turnover') is-invalid @enderror" name="turnover"
                                            value="{{ old('turnover') }}">
                                            <option value="">--select--</option>
                                            @foreach ($turnover as $types)
                                                <option value="{{ $types->name }}"
                                                    {{ $types->name == old('turnover') ? 'selected' : '' }}>
                                                    {{ $types->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="fssai" class="col-md-12 col-form-label text-md-right"><strong> Whether you
                                            have an FSSAI License </strong></label>
                                        <select id="fssai" class="form-control @error('fssai') is-invalid @enderror"
                                            name="fssai">
                                            <option value="">--select--</option>
                                            <option value="Yes" {{ old('fssai') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No" {{ old('fssai') == 'No' ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" id="fssai_no">
                                        <label for="license_no">FSSAI License No</strong></label>
                                        <input id="license_no" type="text"
                                            class="form-control @error('license_no') is-invalid @enderror"
                                            name="license_no" value="{{ old('license_no') }}" autocomplete="name"
                                            autofocus>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="imp_exp" class="col-md-12 col-form-label text-md-right"><strong>Whether you
                                            have an Import/Export Code </strong></label>
                                        <select id="imp_exp"
                                            class="form-control @error('imp_exp') is-invalid @enderror" name="imp_exp">
                                            <option value="">--select--</option>
                                            <option value="Yes" {{ old('imp_exp') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No" {{ old('imp_exp') == 'No' ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="gst" class="col-md-12 col-form-label text-md-right"><strong>Whether you
                                            have a GST No </strong></label>
                                        <select id="gst" class="form-control @error('gst') is-invalid @enderror"
                                            name="gst">
                                            <option value="">--select--</option>
                                            <option value="Yes" {{ old('gst') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                            <option value="No" {{ old('gst') == 'No' ? 'selected' : '' }}>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            </br>
                            <div id="btob_form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">For B2B Meetings</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="" style="margin-top: 10px;"><strong>Are You interested in</strong></label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" id="buying" name="buying" value="yes"
                                            {{ old('buying') == 'yes' ? 'checked' : '' }} style="float:right">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="buying" style="margin-top: 10px;"> Buying</strong></label><br>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" id="selling" name="selling" value="yes"
                                            {{ old('selling') == 'yes' ? 'checked' : '' }} style="float:right">
                                    </div>
                                    <div class="col-md-1">
                                        <label for="selling" style="margin-top: 10px;"> Selling</strong></label><br>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6" >
                                        <div id="buying_section">
                                            <div class="form-group row">
                                                <label for="buy_raw_materials" class="col-md-12 col-form-label text-md-right"><strong>
                                                    Raw materials </strong></label>
                                                    <select id="buy_raw_materials"
                                                        class="js-example-basic-multiple  @error('buy_raw_materials') is-invalid @enderror"
                                                        name="buy_raw_materials[]" multiple="multiple">
                                                        <option value="">--select--</option>
                                                        @foreach ($raw_materials  as $type)
                                                            <option value="{{ $type->name }}"
                                                                @if (is_array(old('buy_raw_materials')) && in_array($type->name, old('buy_raw_materials'))) selected @endif>
                                                                {{ $type->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                {{-- <select id="buy_raw_materials"
                                                    class="form-control @error('buy_raw_materials') is-invalid @enderror"
                                                    name="buy_raw_materials">
                                                    <option value="">--select--</option>
                                                    <option value="Yes"
                                                        {{ old('buy_raw_materials') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="No" {{ old('buy_raw_materials') == 'No' ? 'selected' : '' }}>
                                                        No</option>
                                                </select> --}}
                                            </div>
                                            <div class="form-group row">
                                                <label for="buy_processed"
                                                    class="col-md-12 col-form-label text-md-right"><strong>Processed food products
                                                </strong></label>
                                                {{-- <select id="buy_processed"
                                                    class="form-control @error('buy_processed') is-invalid @enderror"
                                                    name="buy_processed">
                                                    <option value="">--select--</option>
                                                    <option value="Yes" {{ old('buy_processed') == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No" {{ old('buy_processed') == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select> --}}
                                                <select id="buy_processed"
                                                    class="js-example-basic-multiple  @error('buy_processed') is-invalid @enderror"
                                                    name="buy_processed[]" multiple="multiple">
                                                    <option value="">--select--</option>
                                                    @foreach ($buy_processed as $type)
                                                        <option value="{{ $type->name }}"
                                                            @if (is_array(old('buy_processed')) && in_array($type->name, old('buy_processed'))) selected @endif>
                                                            {{ $type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="buy_services_checkbox" name="buy_services_checkbox"
                                                        value="yes"
                                                        {{ old('buy_services_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Services</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="services_buy" id="services_buy" value="{{ old('services_buy')}}">
                                                </div>
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="buy_machinery_checkbox" name="buy_machinery_checkbox"
                                                        value="yes"
                                                        {{ old('buy_machinery_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Machinery</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="machinery_buy" id="machinery_buy" value="{{ old('machinery_buy')}}">
                                                </div>
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="buy_packaging_checkbox" name="buy_packaging_checkbox"
                                                        value="yes"
                                                        {{ old('buy_packaging_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Packaging</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="packaging_buy" id="packaging_buy" value="{{ old('packaging_buy')}}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6" >
                                        <div id="selling_section">
                                            <div class="form-group row">
                                                <label for="sell_raw_materials" class="col-md-12 col-form-label text-md-right"><strong>
                                                    Raw materials </strong></label>
                                                    <select id="sell_raw_materials"
                                                        class="js-example-basic-multiple  @error('sell_raw_materials') is-invalid @enderror"
                                                        name="sell_raw_materials[]" multiple="multiple">
                                                        <option value="">--select--</option>
                                                        @foreach ($raw_materials  as $type)
                                                            <option value="{{ $type->name }}"
                                                                @if (is_array(old('sell_raw_materials')) && in_array($type->name, old('sell_raw_materials'))) selected @endif>
                                                                {{ $type->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                {{-- <select id="sell_raw_materials"
                                                    class="form-control @error('sell_raw_materials') is-invalid @enderror"
                                                    name="sell_raw_materials">
                                                    <option value="">--select--</option>
                                                    <option value="Yes"
                                                        {{ old('sell_raw_materials') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                    <option value="No" {{ old('sell_raw_materials') == 'No' ? 'selected' : '' }}>
                                                        No</option>
                                                </select> --}}
                                            </div>
                                            <div class="form-group row">
                                                <label for="sell_processed"
                                                    class="col-md-12 col-form-label text-md-right"><strong>Processed food products
                                                </strong></label>
                                                <select id="sell_processed"
                                                    class="js-example-basic-multiple  @error('sell_processed') is-invalid @enderror"
                                                    name="sell_processed[]" multiple="multiple">
                                                    <option value="">--select--</option>
                                                    @foreach ($buy_processed as $type)
                                                        <option value="{{ $type->name }}"
                                                            @if (is_array(old('sell_processed')) && in_array($type->name, old('sell_processed'))) selected @endif>
                                                            {{ $type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                {{-- <select id="sell_processed"
                                                    class="form-control @error('sell_processed') is-invalid @enderror"
                                                    name="sell_processed">
                                                    <option value="">--select--</option>
                                                    <option value="Yes" {{ old('sell_processed') == 'Yes' ? 'selected' : '' }}>Yes
                                                    </option>
                                                    <option value="No" {{ old('sell_processed') == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                </select> --}}
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="sell_services_checkbox" name="sell_services_checkbox"
                                                        value="yes"
                                                        {{ old('sell_services_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Services</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="services_sell" id="services_sell" value="{{ old('services_sell')}}">
                                                </div>
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="sell_machinery_checkbox" name="sell_machinery_checkbox"
                                                        value="yes"
                                                        {{ old('sell_machinery_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Machinery</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="machinery_sell" id="machinery_sell" value="{{ old('machinery_sell')}}">
                                                </div>
                                            </div><br />
                                            <div class="form-group row">
                                                <div class="col-md-1">
                                                    <input type="checkbox" id="sell_packaging_checkbox" name="sell_packaging_checkbox"
                                                        value="yes"
                                                        {{ old('sell_packaging_checkbox') == 'yes' ? 'checked' : '' }}
                                                        style="float:right">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="" style="margin-top: 10px;"><strong>Packaging</strong></label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="packaging_sell" id="packaging_sell" value="{{ old('packaging_sell')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="btog_form">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">For B2G Meetings</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="domain" class="col-md-12 col-form-label text-md-right"><strong>Domain of
                                            interest </strong></label>
                                        <select id="domain"
                                            class="js-example-basic-multiple  @error('domain') is-invalid @enderror"
                                            name="domain[]" multiple="multiple">
                                            <option value="">--select--</option>
                                            @foreach ($domain as $type)
                                                <option value="{{ $type->name }}"
                                                    @if (is_array(old('domain')) && in_array($type->name, old('domain'))) selected @endif>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sub_of_dis" class="col-md-12 col-form-label text-md-right"><strong>Preferred
                                            subject for discussion </strong></label>
                                        {{-- <select id="sub_of_dis"
                                            class="form-control @error('sub_of_dis') is-invalid @enderror"
                                            name="sub_of_dis" value="{{ old('sub_of_dis') }}">
                                            <option value="">--select--</option>
                                            @foreach ($sub_of_discuss as $sub)
                                                <option val="{{ $sub->name }}">{{ $sub->name }}</option>
                                            @endforeach
                                        </select> --}}
                                        <select id="sub_of_dis"
                                            class="js-example-basic-multiple  @error('sub_of_dis') is-invalid @enderror"
                                            name="sub_of_dis[]" multiple="multiple">
                                            <option value="">--select--</option>
                                            @foreach ($sub_of_discuss as $type)
                                                <option value="{{ $type->name }}"
                                                    @if (is_array(old('sub_of_dis')) && in_array($type->name, old('sub_of_dis'))) selected @endif>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Other subject for discussion</strong></label>
                                        <input id="other_discussion" type="text"
                                            class="form-control @error('other_discussion') is-invalid @enderror"
                                            name="other_discussion" value="{{ old('other_discussion') }}"
                                            autocomplete="name" autofocus>
                                        @error('other_discussion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for=""><strong>Are you also interested in the following events</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-md-6" >
                                        <label for="" stryle="margin-left:10px;"><strong>Technical Seminars:</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                        <input type="checkbox" id="first" name="first" value="yes"
                                            class="@error('first') is-invalid @enderror"
                                            {{ old('first') == 'yes' ? 'checked' : '' }} style="float:right">
                                    </div>
                                    <div class="col-md-11">
                                        <label for="first" style="margin-top: 10px;"> Enhancing food processing sector
                                            through value chain interventions of major agri-horti commodities of NE
                                            India</strong></label><br>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                        <input type="checkbox" id="second" name="second" value="yes"
                                            class="@error('second') is-invalid @enderror"
                                            {{ old('second') == 'yes' ? 'checked' : '' }} style="float:right">
                                    </div>
                                    <div class="col-md-11">
                                        <label for="second" style="margin-top: 10px;"> Enabling Environment of MSME
                                            development and avenues for enhancing exports from NE region to South East Asian
                                            Market</strong></label><br>
                                    </div>
                                </div>
                                <div class="form-group row" >
                                    <div class="col-md-6" stryle="margin-left:10px;" >
                                        <label for=""><strong>Start-up Interaction:</strong></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-1">
                                        <input type="checkbox" id="third" name="third" value="yes"
                                            class="@error('third') is-invalid @enderror"
                                            {{ old('third') == 'yes' ? 'checked' : '' }} style="float:right">
                                    </div>
                                    <div class="col-md-11">
                                        <label for="third" style="margin-top: 10px;"> Food Start Up- Entrepreneurial
                                            journeys of NE Soil</strong></label><br>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="product_img" class="col-md-12 col-form-label text-md-right"><strong>Kindly
                                            upload your Product Brochure/Product: Photo Compilation (only PDF) </strong></label>
                                        <input id="product_img" type="file"
                                            class="form-control @error('product_img') is-invalid @enderror"
                                            name="product_img" value="{{ old('product_img') }}" autocomplete="name"
                                            autofocus>

                                        @error('product_img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="Password" class="col-md-12 col-form-label text-md-right"><strong>Create Password </strong></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><strong>{{ __('Confirm Password') }}</strong></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2">
                                    </br>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $("#exhibition_form").hide();
        $("#btob_form").hide();
        $("#btog_form").hide();
        $("#fssai_no").hide();

        $("#fssai").change(function() {
            var val = $(this).val();
            if (val == "Yes") {
                $("#fssai_no").show();
            } else {
                $("#fssai_no").hide();
            }
        })

        var b2b = $("#btob_meeting").prop("checked");
        var b2g = $("#btog_meeting").prop("checked");
        var exi = $("#Exhibition").prop("checked");
        var fssai_flag = $("#fssai").val();
        // alert(fssai_flag);
        if (b2b == true) {
            $("#btob_form").show();
        }
        if (b2g == true) {
            $("#btog_form").show();
        }
        if (exi == true) {
            $("#exhibition_form").show();
        }
        if (fssai_flag == 'Yes') {
            $("#fssai_no").show();
        }

        $("#btob_meeting").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#btob_form").show();
            } else {
                $("#btob_form").hide();
            }
        })
        $("#btog_meeting").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#btog_form").show();
            } else {
                $("#btog_form").hide();
            }
        })
        $("#Exhibition").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#exhibition_form").show();
            } else {
                $("#exhibition_form").hide();
            };
        })
    </script>
    <script>
        function validateForm() {
            var checkboxes = document.querySelectorAll('.parti_cat');
            var isChecked = false;

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    isChecked = true;
                }
            });

            if (!isChecked) {
                alert("Please select at least one participation category.");
                return false;
            }
            if($("#selling").prop("checked")==true){
                var rawMaterialsCheckbox = document.getElementById("sell_raw_materials").value;
                var processedCheckbox = document.getElementById("sell_processed").value;
                var servicesCheckbox = document.getElementById("sell_services_checkbox").checked;
                var machineryCheckbox = document.getElementById("sell_machinery_checkbox").checked;
                var packagingCheckbox = document.getElementById("sell_packaging_checkbox").checked;

                if (rawMaterialsCheckbox === "" && processedCheckbox === "" && !servicesCheckbox && !machineryCheckbox && !packagingCheckbox) {
                    alert("Please select at least one Selling option.");
                    return false;
                }
            }

            if($("#buying").prop("checked")==true){
                var rawMaterialsCheckbox = document.getElementById("buy_raw_materials").value;
                var processedCheckbox = document.getElementById("buy_processed").value;
                var servicesCheckbox = document.getElementById("buy_services_checkbox").checked;
                var machineryCheckbox = document.getElementById("buy_machinery_checkbox").checked;
                var packagingCheckbox = document.getElementById("buy_packaging_checkbox").checked;

                if (rawMaterialsCheckbox === "" && processedCheckbox === "" && !servicesCheckbox && !machineryCheckbox && !packagingCheckbox) {
                    alert("Please select at least one Buying option.");
                    return false;
                }
            }


                return true;
            }
    </script>
    <script>
        // services_buy  machinery_buy  packaging_buy
        $("#services_buy").hide();
        $("#machinery_buy").hide();
        $("#packaging_buy").hide();

        $("#buy_services_checkbox").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#services_buy").show();
            } else {
                $("#services_buy").hide();
            }
        })
        $("#buy_machinery_checkbox").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#machinery_buy").show();
            } else {
                $("#machinery_buy").hide();
            }
        })
        $("#buy_packaging_checkbox").click(function() {
            var isChecked = $(this).prop("checked");
            if (isChecked) {
                $("#packaging_buy").show();
            } else {
                $("#packaging_buy").hide();
            }
        })

        var ser_buy = $("#buy_services_checkbox").prop("checked");
        var mac_buy = $("#buy_machinery_checkbox").prop("checked");
        var pac_buy = $("#buy_packaging_checkbox").prop("checked");
        if (ser_buy == true) {
            $("#services_buy").show();
        }
        if (mac_buy == true) {
            $("#machinery_buy").show();
        }
        if (pac_buy == true) {
            $("#packaging_buy").show();
        }
    </script>

<script>
    // services_buy  machinery_buy  packaging_buy
    $("#services_sell").hide();
    $("#machinery_sell").hide();
    $("#packaging_sell").hide();

    $("#sell_services_checkbox").click(function() {
        var isChecked = $(this).prop("checked");
        if (isChecked) {
            $("#services_sell").show();
        } else {
            $("#services_sell").hide();
        }
    })
    $("#sell_machinery_checkbox").click(function() {
        var isChecked = $(this).prop("checked");
        if (isChecked) {
            $("#machinery_sell").show();
        } else {
            $("#machinery_sell").hide();
        }
    })
    $("#sell_packaging_checkbox").click(function() {
        var isChecked = $(this).prop("checked");
        if (isChecked) {
            $("#packaging_sell").show();
        } else {
            $("#packaging_sell").hide();
        }
    })

    var ser_sell = $("#sell_services_checkbox").prop("checked");
    var mac_sell = $("#sell_machinery_checkbox").prop("checked");
    var pac_sell = $("#sell_packaging_checkbox").prop("checked");
    if (ser_sell == true) {
        $("#services_sell").show();
    }
    if (mac_sell == true) {
        $("#machinery_sell").show();
    }
    if (pac_sell == true) {
        $("#packaging_sell").show();
    }
</script>

<script>
    $("#selling_section").hide();
    $("#buying_section").hide();
    $("#selling").click(function() {
        var isChecked = $(this).prop("checked");
        if (isChecked) {
            $("#selling_section").show();
        } else {
            $("#selling_section").hide();
        }
    })
    $("#buying").click(function() {
        var isChecked = $(this).prop("checked");
        if (isChecked) {
            $("#buying_section").show();
        } else {
            $("#buying_section").hide();
        }
    })

    var buy_sec = $("#buying").prop("checked");
    var sell_sec = $("#selling").prop("checked");
    if (buy_sec == true) {
        $("#buying_section").show();
    }
    if (sell_sec == true) {
        $("#selling_section").show();
    }
</script>
@endsection
