@extends('layouts.master')
@section('title', '| Hotels')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <h1><span class="text-muted font-weight-light"><i class="page-header-icon ion-ios-keypad"></i> </span>Hotel Tables</h1>
        </div>

        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Booking Table</div>
            </div>
            <div class="panel-body">

                <div class="table-primary">
                    <table class="table table-striped table-bordered" id="datatables">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Check in Date</th>
                            <th>Check out Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($books as $book)
                            <tr class="odd gradeX">
                                <td> {{$book->name}}</td>
                                <td> {{$book->phone}}
                                </td>
                                <td>{{$book->check_in}} </td>
                                <td>{{$book->check_out}} </td>
                                <td class="text-center">
                                    <a href="{{route('book.show', $book->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href=" {{route('book.edit', $book->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <form style="display: inline" method="post" action="{{ route('hotel.destroy', $book->id) }}">
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