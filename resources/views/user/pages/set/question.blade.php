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
                    <div class="col-md-12">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>{{ $title }}</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($data_value as $row)
                                    <input type="hidden" name="question_no[]" value="<?php if(@$row->question_no) { echo !$row->question_no;} else { echo $row; } ?>">
                                    <div class="question">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="ccnumber">Question <?php if(@$row->question_no) { echo @$row->question_no;} else { echo $row; } ?></label>
                                                    <input class="form-control" name="question[]" maxlength="50" type="text" value="{{ @$row->question }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- options -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> 1 </span>
                                                        </div>
                                                        <input class="form-control" name="option1[]" maxlength="50" type="text" value="{{ @$row->option_1 }}" >
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> 2 </span>
                                                        </div>
                                                        <input class="form-control" name="option2[]" maxlength="50" type="text" value="{{ @$row->option_2 }}" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> 3 </span>
                                                        </div>
                                                        <input class="form-control" name="option3[]" maxlength="50" type="text" value="{{ @$row->option_3 }}" >
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"> 4 </span>
                                                        </div>
                                                        <input class="form-control" name="option4[]" maxlength="50" type="text" value="{{ @$row->option_4 }}" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- answer radio button -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <?php $name = "answer[]"; ?>
                                                <input type="checkbox" class="" name="{{ $name }}" value="1" <?php if(@$row->answer == "1") { echo "checked"; } ?> > 1 &nbsp &nbsp &nbsp &nbsp &nbsp
                                                <input type="checkbox" class="" name="{{ $name }}" value="2" <?php if(@$row->answer == "2") { echo "checked"; } ?> > 2 &nbsp &nbsp &nbsp &nbsp &nbsp
                                                <input type="checkbox" class="" name="{{ $name }}" value="3" <?php if(@$row->answer == "3") { echo "checked"; } ?> > 3 &nbsp &nbsp &nbsp &nbsp &nbsp
                                                <input type="checkbox" class="" name="{{ $name }}" value="4" <?php if(@$row->answer == "4") { echo "checked"; } ?> > 4 &nbsp &nbsp &nbsp &nbsp &nbsp
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                @endforeach
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
