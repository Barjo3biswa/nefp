@extends('layouts.front-app')
@section('css')
    <style>
        /* @import url(https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700); */
        ul {
            list-style: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
            vertical-align: middle;
            border: 0;
        }

        .profile-card {
            width: 300px;
            height: 350px;
            border-radius: 2px;
            overflow: hidden;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .2), 0 1px 5px 0 rgba(0, 0, 0, .12);
            background: rgba(255, 255, 255, 1);
            top: 50%;
        }

        .profile-card header {
            display: block;
            background: rgba(255, 255, 255, 1);
            text-align: center;
            padding: 30px 0 20px;
            z-index: 1;
            overflow: hidden;
        }

        .profile-card header:before {
            content: "";
            background: url('http://ali.shahab.pk/blur.php?img=http://ali.shahab.pk/ali-shahab.jpg&x=60') no-repeat;
            background-size: cover;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            z-index: -1;

        }

        .profile-card header:after {
            content: "";
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-image: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 1) 100%);
        }

        .profile-card header img {
            overflow: hidden;
            width: 150px;
        }

        .profile-card header h1 {
            font-weight: 400;
            font-size: 30px;
            color: #444;
            letter-spacing: 1px;
            margin: 0;
            padding: 0;
        }

        .profile-card header h2 {
            font-weight: 400;
            font-size: 14px;
            color: #666;
            letter-spacing: .5px;
            margin: 0;
            padding: 0;
        }

        .profile-card .profile-bio {
            padding: 0 30px;
            text-align: center;
            color: #888;
        }

        .profile-card .profile-social-links {
            display: table;
            width: 70%;
            margin: 20px auto;
        }

        .profile-card .profile-social-links li {
            display: table-cell;
            width: 33.3333333333333333%
        }

        .profile-card .profile-social-links li a {
            display: block;
            text-align: center;
            padding: 10px;
            margin: 0 10px;
            border-radius: 100%;
            -webkit-transition: box-shadow 0.2s;
            -moz-transition: box-shadow 0.2s;
            -o-transition: box-shadow 0.2s;
            transition: box-shadow 0.2s;
        }

        .profile-card .profile-social-links li a:hover {
            box-shadow: 0 1px 1.5px 0 rgba(0, 0, 0, .12), 0 1px 1px 0 rgba(0, 0, 0, .24);
        }

        .profile-card .profile-social-links li a:active {
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2);
        }

        .profile-card .profile-social-links li a img {
            width: 100%;
            display: block;
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                    {{-- <div class="card-body">
                        <div class="row">
                            <div class="col-md-3" style="text-align: center;">
                                <aside class="profile-card" id="printableArea">
                                    <header>
                                        <a href="http://ali.shahab.pk">
                                            <img src="assets/logo/nefo_logo.png" alt="">
                                        </a>
                                        <h1>NE Food Pro 2024</h1>
                                        <h2>B2B Meeting</h2>
                                    </header>
                                    <div class="profile-bio">
                                        <h3>Biswajit Laskar</h3>
                                        <h3>B2B-1234</h3>
                                    </div>
                                </aside>
                                </br>
                                <button class="btn btn-primary btn-xs" onclick="printDiv('printableArea')">Download</button>
                            </div>
                            <div class="col-md-3" style="text-align: center;">
                                <aside class="profile-card">
                                    <header>
                                        <a href="http://ali.shahab.pk">
                                            <img src="assets/logo/nefo_logo.png" alt="">
                                        </a>
                                        <h1>NE Food Pro 2024</h1>
                                        <h2>B2B Meeting</h2>
                                    </header>
                                    <div class="profile-bio">
                                        <h3>Biswajit Laskar</h3>
                                        <h3>B2B-1234</h3>
                                    </div>
                                </aside>
                                </br>
                                <button class="btn btn-primary btn-xs">Download</button>
                            </div>
                            <div class="col-md-3" style="text-align: center;">
                                <aside class="profile-card">
                                    <header>
                                        <a href="http://ali.shahab.pk">
                                            <img src="assets/logo/nefo_logo.png" alt="">
                                        </a>
                                        <h1>NE Food Pro 2024</h1>
                                        <h2>B2B Meeting</h2>
                                    </header>
                                    <div class="profile-bio">
                                        <h3>Biswajit Laskar</h3>
                                        <h3>B2B-1234</h3>
                                    </div>
                                </aside>
                                </br>
                                <button class="btn btn-primary btn-xs">Download</button>
                            </div>
                            <div class="col-md-3" style="text-align: center;">
                                <aside class="profile-card">
                                    <header>
                                        <a href="http://ali.shahab.pk">
                                            <img src="assets/logo/nefo_logo.png" alt="">
                                        </a>
                                        <h1>NE Food Pro 2024</h1>
                                        <h2>B2B Meeting</h2>
                                    </header>
                                    <div class="profile-bio">
                                        <h3>Biswajit Laskar</h3>
                                        <h3>B2B-1234</h3>
                                    </div>
                                </aside>
                                </br>
                                <button class="btn btn-primary btn-xs">Download</button>
                            </div>
                        </div>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
