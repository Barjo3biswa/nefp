@extends('admin.layout.app')
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        .key-areas-div {
            min-height: 102px;
            max-height: 110px;
            overflow: hidden;
        }

        .products {
            text-align: left;
            font-size: 18px;
        }

        .sector {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .btn-group-xs>.btn,
        .btn-xs {
            padding: .25rem .4rem;
            font-size: .875rem;
            line-height: .5;
            border-radius: .2rem;
        }
    </style>
@endsection
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="card">
                <div class="card-header">
                    <h5></h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <button onclick="printDiv('printableArea')" class="btn btn-primary btn-sm noPrint">
                            Print Application
                        </button>&nbsp;&nbsp;
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <div class="container">
                                <div class="header">Angkor Green Investment And Development Co.,ltd.</div>
                                <div class="sector">Assam, 782426</div>
                                <div class="products">Buying Interests</div>
                                <div class="key-areas-div">
                                    <div class="btn btn-secondary btn-xs"> P. R. CHINA</div>
                                    <div class="btn btn-secondary btn-xs">VIETNAM</div>
                                    <div class="btn btn-secondary btn-xs">THAILAND</div>
                                </div>

                                <div class="products">Selling Interests</div>
                                <div class="key-areas-div">
                                    <div class="btn btn-secondary btn-xs"> P. R. CHINA</div>
                                    <div class="btn btn-secondary btn-xs">VIETNAM</div>
                                    <div class="btn btn-secondary btn-xs">THAILAND</div>
                                </div>
                                <div class="row" style="display: flex;">
                                  <i class="fas fa-heart" style="color: #f43d3d; margin-left: auto;" aria-hidden="true"></i>
                              </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        window.onload = function() {
            var elementToClick = document.getElementById('mobile-collapse');

            if (elementToClick) {
                elementToClick.click();
            }
        };
    </script>
    <script>
        function printDiv(divName) {
            // alert("ok");
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
