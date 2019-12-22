@extends('user.layouts.app')

@push('stylesheets')
<style>
    label {
        color: #333 !important;
        font-weight: 500;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset ('/coreui/plugins/validate/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/coreui/plugins/validate/validation.js') }}" type="text/javascript"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form id="signupForm" method="POST" action="{{ $post_url }}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
            {{ csrf_field() }}                
            <div class="row">
                    <div class="col-md-5">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>{{ $title }}</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Name</label>
                                            <input class="form-control" name="name" maxlength="50" type="text" value="{{ @$data_value->name }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Total Question</label>
                                            <input class="form-control" name="total_question" maxlength="50" type="number" value="{{ @$data_value->total_question }}" required>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Hour</label>
                                            <select class="form-control" name="hour" required>
                                                @for($i=0; $i<=24; $i++)
                                                    <option value="{{ $i }}" @if(@$data_value->hour == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Minute</label>
                                           <select class="form-control" name="minute" required>
                                                @for($i=0; $i<=60; $i++)
                                                    <option value="{{ $i }}" @if(@$data_value->minute == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Status</label>
                                                <select class="form-control" name="status" required>
                                                    <option value="1" @if(@$data_value->status == 1) selected @endif>Active</option>
                                                    <option value="0" @if(@$data_value->status == 0) selected @endif>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>  
                <!-- /.col-->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            <!-- /.row-->
            </form>
        </div>
    </div>
    <hr>
@endsection
