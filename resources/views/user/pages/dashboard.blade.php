@extends('user.layouts.app')

@section('content')
 <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="" data-toggle="modal" data-id="0" data-backdrop="static" class="btn btn-pill btn-success"><i class="fa fa-plus"></i>&nbsp;Add</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(count($data) > 0)
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sets as $row)
                                        <tr id="tr{{ $row->id }}">
                                            <td>
                                                <div><strong>{{$row->name}}</strong></div>
                                            </td>
                                            <td>
                                                    @if($row->status == 0)
                                                    <div style="color:red;"><strong>Inactive</strong></div>
                                                    @else
                                                    <div style="color:green;"><strong>Active</strong></div>
                                                    @endif
                                            </td>
                                            <td>
                                                <span class="cursor"> <a href="{{ route('admin.sub_category.add', [$row->id]) }}" title="Edit"  class="btn btn-info btn-circle btn-sm m-r-5"><i class="fa fa-edit"></i></a> </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                <div class="alert alert-info">No Data found.</div>
                            @endif
                        </div>
                    </div>
                </div>
            <!-- /.col-->
            </div>
            <!-- /.row-->
        </div>
    </div>

@endsection

