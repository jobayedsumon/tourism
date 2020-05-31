@extends('frontend.layouts.master')
@section('title','| Search Result')
@section('content')
<div class="px-content">
    <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-ios-keypad"></i> </span>Hotel Tables</h1>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Hotels Table</div>
        </div>
        <div class="panel-body">

            <div class="table-primary">
                <table class="table table-striped table-bordered" id="datatables">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Area</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($hotel as $hotels)
                            <tr class="odd gradeX">
                                <td> {{$hotels->name}}</td>
                                <td> {{$hotels->address}}
                                </td>
                                <td>{{$hotels->area}} </td>
                                <td class="center">  {{$hotels->phone}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('custom_js')
    <script>
            $('#datatables').dataTable();
            // $('#datatables_wrapper .table-caption').text('Some header text');
            $('#datatables_wrapper .dataTables_filter input').attr('placeholder', 'Search...');

    </script>
    @endpush
    @endsection