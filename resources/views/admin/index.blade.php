@extends('admin.layout.app')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">

                    <!-- order-card start -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-blue order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Exhibition</h6>
                                <a href="{{route('application',[Crypt::encrypt('exi')])}}"><h2 class="text-right"><i class="ti-reload f-left"></i><span>{{$exibition}}</span>
                                </h2></a>
                                {{-- <p class="m-b-0">Registared<span class="f-right">4564</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-green order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">B2B Meetings</h6>
                                <a href="{{route('application',[Crypt::encrypt('b2b')])}}"><h2 class="text-right"><i class="ti-reload f-left"></i><span>{{$btob_meeting}}</span></h2></a>
                                {{-- <p class="m-b-0">Registared<span class="f-right">5645</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-yellow order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">B2G Meetings</h6>
                                <a href="{{route('application',[Crypt::encrypt('b2g')])}}"><h2 class="text-right"><i class="ti-reload f-left"></i><span>{{$btog_meeting}}</span>
                                </h2></a>
                                {{-- <p class="m-b-0">Registared<span class="f-right">456</span></p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card bg-c-pink order-card">
                            <div class="card-block">
                                <h6 class="m-b-20">Business Matching</h6>
                                <h2 class="text-right"><i class="ti-reload f-left"></i><span>0</span>
                                </h2>
                                {{-- <p class="m-b-0">Matched<span class="f-right">54645</span></p> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
@endsection
