@extends('frontend.layouts.master')
@section('title','| Transport')
@section('content')

<div class="px-content"> 
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Transport Table</div>
        </div>
        <div class="panel-body">

            <div class="table-primary">
                <table class="table table-striped table-bordered" id="datatables">
                    <thead>
                    <tr>
                        <th>Transport</th>
                        <th>Transpost Type</th>
                        <th>To</th>
                        <th>Counter Address</th> 
                        <th>Contact Number</th>
                        <th>AC Ticket Price</th>
                        <th>Non AC Ticket Price</th>
                    </tr>
                    </thead>
                    <tbody> 
                        @foreach($transport as $transposts)
                            <tr class="odd gradeX">
                                <td> {{$transposts->transportname}} </td>
                                <td> {{$transposts->transporttype}} </td>
                                <td>{{$transposts->to}} </td>
                                <td>{{$transposts->address}} </td>
                                <td>{{$transposts->number}} </td>
                                <td>{{$transposts->ac}} </td>
                                <td>{{$transposts->nonac}} </td>
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