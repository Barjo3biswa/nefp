@extends('layouts.front-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success" role="alert">
                        <h1>Welcome to your login page. Your business match will appear here.
                            Your email id is your username.
                        </h1>
                      </div>

                    {{-- <form id="logoutform" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="logout" >
                    </form> --}}
                    {{-- <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="javascript:void(0)"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
