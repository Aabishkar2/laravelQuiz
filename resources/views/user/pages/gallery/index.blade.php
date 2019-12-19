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
                    <div class="col-md-4">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Image 1</strong></div>
                                </div>
                            </div>
                           <div class="card-body">
                           <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="image1">
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary">
                                <div class="card-header text-white bg-primary">
                                    <div class="row">
                                        <div class="col-md-12"><strong>Image 2</strong></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="image2">
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary">
                                <div class="card-header text-white bg-primary">
                                    <div class="row">
                                        <div class="col-md-12"><strong>Image 3</strong></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="image3">
                                    </div>
                                </div>
                                </div>
                            <hr>

                        </div>
                    </div>

                <!-- /.col-->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Image 4</strong></div>
                                </div>
                            </div>
                           <div class="card-body">
                           <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="image4">
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-primary">
                                <div class="card-header text-white bg-primary">
                                    <div class="row">
                                        <div class="col-md-12"><strong>Image 5</strong></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control" name="image5">
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
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
