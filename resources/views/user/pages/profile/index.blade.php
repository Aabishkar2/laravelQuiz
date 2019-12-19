@extends('user.layouts.app')

@push('stylesheets')
<link href="{{ asset('/css/croppie.min.css') }}" rel="stylesheet" type="text/css">
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
<script src="{{ asset ('/js/croppie.min.js') }}" type="text/javascript"></script>
<script>
$().ready(function() {
    $uploadCrop = $('#').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'circle'
        },
        boundary: {
            width: 300,
            height: 300
        }
    });
});
</script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form id="signupForm" method="POST" action="{{ $post_url }}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
                @csrf
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
                                            <label for="ccnumber">Full Name</label>
                                            <input class="form-control" name="name" maxlength="50" type="text" value="{{ @$name }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Business Tagline</label>
                                            <textarea class="form-control" maxlength="200" name="tagline"> {{ @$data_value->tagline }} </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="ccnumber">Business Category</label>
                                            <input class="form-control" name="category" type="text" value="{{ @$data_value->category }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Company Type</label>
                                            <select class="form-control" name="company_type" required>
                                                <option value="">Select</option>
                                                <option value="2" @if(@$data_value->company_type == 2) selected @endif>System User</option>
                                                <option value="3" @if(@$data_value->company_type == 3) selected @endif>Other</option>
                                            </select>
                                        </div>
                                     </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Company Size</label>
                                            <select class="form-control" name="company_size" required>
                                                <option value="">Select</option>
                                                <option value="myself" @if(@$data_value->company_size == "myself") selected @endif>Myself Only</option>
                                                <option value="2-10" @if(@$data_value->company_size == "2-10") selected @endif>2-10</option>
                                                <option value="11-50" @if(@$data_value->company_size == "11-50") selected @endif>11-50</option>
                                                <option value="51-200" @if(@$data_value->company_size == "51-200") selected @endif>51-200</option>
                                                <option value="201-500" @if(@$data_value->company_size == "201-500") selected @endif>201-500</option>
                                                <option value="501-1000" @if(@$data_value->company_size == "501-1000") selected @endif>501-1000</option>
                                                <option value="1000+" @if(@$data_value->company_size == "1000+") selected @endif>1000+</option>
                                            </select>                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Year Founded</label>
                                            <input class="form-control" name="year_founded" maxlength="4" type="number" value="{{ @$data_value->year_founded }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Organization Status</label>
                                            <select class="form-control" name="status" required>
                                                <option value="">Select</option>
                                                <option value="1" @if(@$data_value->status == 1) selected @endif>Operating</option>
                                                <option value="0" @if(@$data_value->status == 0) selected @endif>Out of Business</option>
                                                <option value="2" @if(@$data_value->status == 2) selected @endif>Temporarily Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card border-primary">
                                <div class="card-header text-white bg-primary">
                                    <div class="row">
                                        <div class="col-md-12"><strong>Brief Description</strong></div>
                                    </div>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="ccnumber">Write a breif description about your company</label>
                                                <textarea rows="11.8" class="form-control" name="description"> {{ @$data_value->description }} </textarea>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="ccnumber">Logo</label>
                                                <input type="file" class="form-control" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                        <label for="ccnumber">Cover</label>
                                                <input type="file" class="form-control" name="cover">
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
