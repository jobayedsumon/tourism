@extends('layouts.master')
@section('title', '| Hotels')
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
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($hotels as $hotel)
                            <tr class="odd gradeX">
                                <td> {{$hotel->name}}</td>
                                <td> {{$hotel->address}}
                                </td>
                                <td>{{$hotel->area}} </td>
                                <td class="center">  {{$hotel->phone}}</td>
                                <td class="text-center">
                                    <a href="{{route('hotel.show', $hotel->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href=" {{route('hotel.edit', $hotel->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form style="display: inline" method="post" action="{{ route('hotel.destroy', $hotel->id) }}">
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