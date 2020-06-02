@extends('layouts.master')
@section('title', '| Hotels')
@section('content') 
<div class="px-content"> 
    <div class="page-header">
        <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-ios-keypad"></i> </span>Hotel Tables</h1>
    </div>

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
                        <th>Action</th> 
                    </tr>
                    </thead>
                    <tbody> 
                        @foreach($transports as $transpost)
                            <tr class="odd gradeX">
                                <td> {{$transpost->transportname}} </td>
                                <td> {{$transpost->transporttype}} </td>
                                <td>{{$transpost->to}} </td>
                                <td>{{$transpost->address}} </td>
                                <td>{{$transpost->number}} </td>
                                <td>{{$transpost->ac}} </td>
                                <td>{{$transpost->nonac}} </td>
                                <td class="text-center">
                                    <form style="display: inline" method="post" action="{{ route('transpost.destroy', $transpost->id) }}">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                </td>
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