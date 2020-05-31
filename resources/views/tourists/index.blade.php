@extends('layouts.master')
@section('title', '| Tourist')
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
                        <th>Action</th> 
                    </tr>
                    </thead>
                    <tbody> 
                        @foreach($tourists as $tourist)
                            <tr class="odd gradeX">
                                <td> {{$tourist->location}} </td>
                                <td> {{$tourist->touristspot}} </td>
                                <td>{{$tourist->details}}</td>
                                <td class="text-center">
                                    <form style="display: inline" method="post" action="{{ route('tourist.destroy', $tourist->id) }}">
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