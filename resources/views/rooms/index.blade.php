@extends('layouts.master')
@section('title', '| Hotels Room')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-ios-keypad"></i> </span>Hotel Room Tables</h1>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Hotels Room Table</div>
            </div>
            <div class="panel-body">

                <div class="table-primary">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                        <tr>
                            <th>Total Single Room</th>
                            <th>Total Double Room</th>
                            <th>Availability</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rooms as $room)

                            <tr class="odd gradeX">
                                <td> {{$room->single_ac + $room->single_non_ac}}
                                </td>
                                <td>{{$room->double_ac + $room->double_non_ac}} </td>
                                <td class="center">  {{$room->availability == 0 ? 'Available' : 'Not Available'}}</td>
                                <td class="text-center">
                                    <a href="{{route('room.show', $room->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href=" {{route('room.edit', $room->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form style="display: inline" method="post" action="{{ route('room.destroy', $room->id) }}">
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