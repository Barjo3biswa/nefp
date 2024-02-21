@extends('layouts.front-app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        th,
        td {
            white-space: pre-wrap !important;
        }

        @media print {
            .noPrint {
                display: none;
            }
        }

        <style>body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .profile-container {
            /* max-width: 800px;
            margin: 0 auto; */
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */

            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;
        }

        a{
            color: #fff;
        }
        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 0;
            background-color: #1a4133;
            color: #fff;
            border-radius: 4px;
        }
        .product-box{
            text-align: left;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            /* border: 1px solid #ccc; */
        }

        .card {
            border: 1px solid rgb(197 197 197 / 13%);
            border-radius: 0.25rem;
            margin-bottom: 4rem;
        }

        .key-areas-div {
            /* min-height: 102px; */
            min-height: 70px;
            /* max-height: 110px; */
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .products {
            text-align: left;
            font-size: 18px;
        }

        .sector {
            text-align: left;
            font-size: 18px;
            margin-top: 6px;
        }

        .btn-group-xs>.btn,
        .btn-xs {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }
        .b2b-btn{
            background: var(--color-primary);
        }


        .heart-icon {

            padding: 5px; /* Adjust padding to control the space between the heart and the border */
        }









    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="alert alert-success" role="alert">
                            <h1>Welcome to your login page. Your business match will appear here.
                                Your email id is your username.
                            </h1>
                        </div> --}}
                        <div class="row" style="text-align: center;">
                            {{-- <div class="form-group col-md-6" style="margin:auto;"> --}}
                                @if($flag=='exi')
                                <h1>Exhibitor Profile</h1>
                                @else
                                <h1>B2B/B2G Profile</h1>
                                @endif

                            {{-- </div> --}}
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6" style="margin:auto;">
                                <input type="text" id="Search" class="form-control" onkeyup="myFunction()" placeholder="Type here to search" title="Type in a name">
                            </div>
                        </div>

                        <div class="row">
                            @foreach ($matched as $mat)
                            <div class="col-md-4 mt-2 target">
                                <div class="profile-container">
                                    <a href="{{route('view-profile',Crypt::encrypt($mat->id))}}"><div class="header">{{$mat->organization}}</div></a>
                                    <div class="sector">{{$mat->State->name}}, {{$mat->pin_code}}</div>
                                    @if($flag=='exi')
                                    <div class="product-box">
                                        <div class="products">Products for Exibition</div>
                                        <div class="key-areas-div">
                                            @php
                                                $product = json_decode($mat->product);
                                            @endphp
                                            @if ($product)
                                                @foreach ($product as $product)
                                                    <div class="btn btn-warning btn-xs">{{$product}}</div>
                                                @endforeach
                                            @endif
                                            @if ($mat->services_exib)
                                                <div class="btn btn-warning btn-xs">{{$mat->services_exib}}</div>
                                            @endif
                                            @if ($mat->machinery_exib)
                                                <div class="btn btn-warning btn-xs">{{$mat->machinery_exib}}</div>
                                            @endif
                                            @if ($mat->packaging_exib)
                                                <div class="btn btn-warning btn-xs">{{$mat->packaging_exib}}</div>
                                            @endif
                                        </div>
                                    </div>
                                    @endif

                                    @if($flag=='bto')
                                    <div class="product-box">
                                        <div class="products">Buying Interests</div>
                                        <div class="key-areas-div">
                                            @php
                                                $buying_product = json_decode($mat->buy_raw_materials);
                                                $buying_productii = json_decode($mat->buy_processed);
                                            @endphp
                                            @if ($buying_product)
                                                @foreach ($buying_product as $product)
                                                    <div class="btn btn-warning btn-xs">{{$product}}</div>
                                                @endforeach
                                            @endif
                                            @if ($buying_productii)
                                                @foreach ($buying_productii as $product)
                                                    <div class="btn btn-warning btn-xs">{{$product}}</div>
                                                @endforeach
                                            @endif
                                            @if ($mat->buy_other_raw_materials)
                                                <div class="btn btn-warning btn-xs">{{$mat->buy_other_raw_materials}}</div>
                                            @endif
                                            @if ($mat->buy_services_checkbox)
                                                <div class="btn btn-warning btn-xs">Service</div>
                                            @endif
                                            @if ($mat->buy_machinery_checkbox)
                                                <div class="btn btn-warning btn-xs">Machinery</div>
                                            @endif
                                            @if ($mat->buy_packaging_checkbox)
                                                <div class="btn btn-warning btn-xs">Packeging</div>
                                            @endif


                                        </div>
                                    </div>

                                    <div class="product-box">
                                        <div class="products">Selling Interests</div>
                                        <div class="key-areas-div">
                                            @php
                                                $selling_product = json_decode($mat->sell_raw_materials);
                                                $selling_productii = json_decode($mat->sell_processed);
                                            @endphp
                                            @if ($selling_product)
                                                @foreach ($selling_product as $product)
                                                    <div class="btn btn-warning btn-xs">{{$product}}</div>
                                                @endforeach
                                            @endif
                                            @if ($selling_productii)
                                                @foreach ($selling_productii as $product)
                                                    <div class="btn btn-warning btn-xs">{{$product}}</div>
                                                @endforeach
                                            @endif
                                            @if ($mat->sell_other_raw_materials)
                                                <div class="btn btn-warning btn-xs">{{$mat->sell_other_raw_materials}}</div>
                                            @endif
                                            @if ($mat->sell_services_checkbox)
                                                <div class="btn btn-warning btn-xs">Service</div>
                                            @endif
                                            @if ($mat->sell_machinery_checkbox)
                                                <div class="btn btn-warning btn-xs">Machinery</div>
                                            @endif
                                            @if ($mat->sell_packaging_checkbox)
                                                <div class="btn btn-warning btn-xs">Packeging</div>
                                            @endif

                                        </div>
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if($mat->Exhibition=='yes')
                                               <div class="btn btn-success btn-xs b2b-btn">Exibitor</div>
                                            @endif
                                            @if($mat->btob_meeting=='yes')
                                               <div class="btn btn-success btn-xs b2b-btn">B 2 B</div>
                                            @endif
                                            @if($mat->btog_meeting=='yes')
                                                <div class="btn btn-success btn-xs b2b-btn">B 2 G</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>

    // function callAjax(id){
    //     // alert(id);
    //     $.ajax({
    //         url : "{{route('make-favourite')}}",
    //         data : {'id' : id},
    //         type : 'GET',
    //         success:function(success){
    //                 console.log(success.data);
    //                 $("#heart_section"+id).empty();
    //                 if(success.data == 'Active'){
    //                     $("#heart_section"+id).append(`<i class="fas fa-heart" style="color: #f43d3d; margin-left: auto;" aria-hidden="true"></i>`);
    //                 }else if(success.data == 'Deactive'){
    //                     $("#heart_section"+id).append(`<i class="fa-regular fa-heart"></i>`);
    //                 }
    //             },
    //     });
    // }

    function myFunction() {
        var input = document.getElementById("Search");
        var filter = input.value.toLowerCase();
        var nodes = document.getElementsByClassName('target');

        for (i = 0; i < nodes.length; i++) {
            if (nodes[i].innerText.toLowerCase().includes(filter)) {
            nodes[i].style.display = "block";
            } else {
            nodes[i].style.display = "none";
            }
        }
    }

</script>
@endsection