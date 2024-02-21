@extends('layouts.front-app')
@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" /> --}}
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
        body, tr, td {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
        }
        th h3 {margin-bottom: 0;padding: 8px 0;}
        .table-bordered>:not(caption)>*>* {line-height: 26px;
            padding-bottom: 2px;padding-top: 2px;}
    input {min-height: auto!important}
    footer {margin-top:2rem;}
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{-- <div class="row"> --}}
                            @include('admin.common.application-show')
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
</script>
@endsection
