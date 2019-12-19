
@extends('user.layouts.app')

@push('stylesheets')
<style>
    label {
        color: #333 !important;
        font-weight: 500;
    }
    .instagram{
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fd5949 45%);
    }
    .facebook{
        background: #3B5998;
    }
    .linkedin{
        background: #0077B5;
    }
    .twitter{
        background: ;
    }
    .instagram-border{
        border-color: #fb3958 !important;
    }
    .facebook-border{
        border-color: #3B5998 !important;
    }
    .twitter-border{
        border-color: #fb3958 !important;
    }
    .linkedin-border{
        border-color: #0077B5 !important;
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
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card facebook-border">
                            <div class="card-header text-white facebook">
                                <div class="row">
                                    <div class="col-md-12"><strong>Facebook</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-facebook-square" style="font-size:20px;color:#3B5998;"></i></span>
                                            </div>
                                                    <input class="form-control" name="facebook" placeholder="Your Facebook Page Link" maxlength="100" type="text" value="{{ @$data_value->facebook }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card instagram-border">
                            <div class="card-header text-white instagram">
                                <div class="row">
                                    <div class="col-md-12"><strong>Instagram</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-instagram" style="font-size:20px;color:red;"></i></span>
                                            </div>
                                            <input class="form-control" name="instagram" placeholder="Your Instagram Page Link" maxlength="100" type="text" value="{{ @$data_value->instagram }}" required>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.col-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Twitter</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1"> <i class="fa fa-twitter" style="font-size:20px;color:#1da1f2;"></i></span>
                                                </div>
                                                <input class="form-control" name="twitter" placeholder="Your Twitter Page Link" maxlength="100" type="text" value="{{ @$data_value->twitter }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-linkedin">
                            <div class="card-header text-white linkedin">
                                <div class="row">
                                    <div class="col-md-12"><strong>LinkedIn</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-linkedin" style="font-size:20px;color:#0077B5;"></i></span>
                                                    </div>
                                                <input class="form-control" name="linkedin" placeholder="Your LinkedIn Page Link" maxlength="100" type="text" value="{{ @$data_value->linkedin }}">
                                            </div>
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
