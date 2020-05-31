@extends('frontend.layouts.master')
@section('title','| Tourist')
@section('content')

<div class="px-content"> 
    <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-ios-keypad"></i> </span>Tourist Table</h1>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Tourist Table</div>
        </div>
        <div class="panel-body">

            <div class="table-primary">
                <table class="table table-striped table-bordered" id="datatables">
                    <thead>
                    <tr>
                        <th>Tourist Location</th>
                        <th>Tourist Spot</th>
                        <th>Details</th>
                       
                    </tr>
                    </thead>
                    <tbody> 
                        @foreach($tourist as $tourists)
                            <tr class="odd gradeX">
                                <td> {{$tourists->location}} </td>
                                <td> {{$tourists->touristspot}} </td>
                                <td>{{$tourists->details}}</td>
                               
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