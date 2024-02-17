@extends('admin.layout.app')
@section('css')


<style>
th, td{
    white-space: pre-wrap !important;
}
@media print {
            .noPrint{
                display:none;
            }
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
                <br/>
                @include('admin.common.application-show')

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    window.onload = function () {
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

