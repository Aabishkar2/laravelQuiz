
@extends('user.layouts.app')

@push('stylesheets')
<style>
    label {
        color: #333 !important;
        font-weight: 500;
    }
</style>
<link href="{{ asset('/css/jquery.timepicker.css') }}" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
<script src="{{ asset ('/coreui/plugins/validate/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/coreui/plugins/validate/validation.js') }}" type="text/javascript"></script>
<script src="{{ asset ('/js/jquery.timepicker.js') }}" type="text/javascript"></script>
<script>
$().ready(function() {
    $('#sun_o_time').timepicker();
    $('#mon_o_time').timepicker();
    $('#tue_o_time').timepicker();
    $('#wed_o_time').timepicker();
    $('#thu_o_time').timepicker();
    $('#fri_o_time').timepicker();
    $('#sat_o_time').timepicker();
    $('#sun_c_time').timepicker();
    $('#mon_c_time').timepicker();
    $('#tue_c_time').timepicker();
    $('#wed_c_time').timepicker();
    $('#thu_c_time').timepicker();
    $('#fri_c_time').timepicker();
    $('#sat_c_time').timepicker();
});
</script>
<script>
    $().ready(function() {
        if($('input.suncheck').prop("checked") == true){
            $("#sun_c_time").hide();
            $("#sun_o_time").hide();
        }
        $('input.suncheck').on('change', function() {
            $('input.suncheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#sun_c_time").val('');
                $("#sun_o_time").val('');
                $("#sun_c_time").hide();
                $("#sun_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#sun_c_time").show();
                $("#sun_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.moncheck').prop("checked") == true){
            $("#mon_c_time").hide();
            $("#mon_o_time").hide();
        }
        $('input.moncheck').on('change', function() {
            $('input.moncheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#mon_c_time").val('');
                $("#mon_o_time").val('');
                $("#mon_c_time").hide();
                $("#mon_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#mon_c_time").show();
                $("#mon_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.tuecheck').prop("checked") == true){
            $("#tue_c_time").hide();
            $("#tue_o_time").hide();
        }
        $('input.tuecheck').on('change', function() {
            $('input.tuecheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#tue_c_time").val('');
                $("#tue_o_time").val('');
                $("#tue_c_time").hide();
                $("#tue_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#tue_c_time").show();
                $("#tue_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.wedcheck').prop("checked") == true){
            $("#wed_c_time").hide();
            $("#wed_o_time").hide();
        }
        $('input.wedcheck').on('change', function() {
            $('input.wedcheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#wed_c_time").val('');
                $("#wed_o_time").val('');
                $("#wed_c_time").hide();
                $("#wed_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#wed_c_time").show();
                $("#wed_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.thucheck').prop("checked") == true){
            $("#thu_c_time").hide();
            $("#thu_o_time").hide();
        }
        $('input.thucheck').on('change', function() {
            $('input.thucheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#thu_c_time").val('');
                $("#thu_o_time").val('');
                $("#thu_c_time").hide();
                $("#thu_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#thu_c_time").show();
                $("#thu_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.fricheck').prop("checked") == true){
            $("#fri_c_time").hide();
            $("#fri_o_time").hide();
        }
        $('input.fricheck').on('change', function() {
            $('input.fricheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#fri_c_time").val('');
                $("#fri_o_time").val('');
                $("#fri_c_time").hide();
                $("#fri_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#fri_c_time").show();
                $("#fri_o_time").show();
            }
        });
    });
</script>
<script>
    $().ready(function() {
        if($('input.satcheck').prop("checked") == true){
            $("#sat_c_time").hide();
            $("#sat_o_time").hide();
        }
        $('input.satcheck').on('change', function() {
            $('input.satcheck').not(this).prop('checked', false);
            if($(this).prop("checked") == true){
                $("#sat_c_time").val('');
                $("#sat_o_time").val('');
                $("#sat_c_time").hide();
                $("#sat_o_time").hide();
            }
            else if($(this). prop("checked") == false)
            {
                $("#sat_c_time").show();
                $("#sat_o_time").show();
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

                    <div class="col-md-8">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Working Hours</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table  width="100%"  class="table table-bordered table-striped">
                                            <tr>
                                                <th width="25%">Day</th>
                                                <th width="25%">Opening Time</th>
                                                <th width="25%">Closing Time</th>
                                                <th width="25%">Extra</th>
                                            </tr>
                                            <tr>
                                                <th>Sunday</th>
                                                <th><input type="text" class="form-control" id="sun_o_time" name="open_sunday" value="{{ @$data_value->sunday_open }}"></th>
                                                <th><input type="text" class="form-control" id="sun_c_time" name="close_sunday" value="{{ @$data_value->sunday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="suncheck" name="sun_check"  <?php if($data_value->sun_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="suncheck" name="sun_check" <?php if($data_value->sun_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Monday</th>
                                                <th><input type="text" class="form-control" id="mon_o_time" name="open_monday" value="{{ @$data_value->monday_open }}"></th>
                                                <th><input type="text" class="form-control" id="mon_c_time" name="close_monday" value="{{ @$data_value->monday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="moncheck" name="mon_check" <?php if($data_value->mon_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="moncheck" name="mon_check" <?php if($data_value->mon_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Tuesday</th>
                                                <th><input type="text" class="form-control" id="tue_o_time" name="open_tuesday" value="{{ @$data_value->tuesday_open }}"></th>
                                                <th><input type="text" class="form-control" id="tue_c_time" name="close_tuesday" value="{{ @$data_value->tuesday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="tuecheck" name="tue_check" <?php if($data_value->tue_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="tuecheck" name="tue_check" <?php if($data_value->tue_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Wednesday</th>
                                                <th><input type="text" class="form-control" id="wed_o_time" name="open_wednesday" value="{{ @$data_value->wednesday_open }}"></th>
                                                <th><input type="text" class="form-control" id="wed_c_time" name="close_wednesday" value="{{ @$data_value->wednesday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="wedcheck" name="wed_check" <?php if($data_value->wed_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="wedcheck" name="wed_check" <?php if($data_value->wed_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Thursday</th>
                                                <th><input type="text" class="form-control" id="thu_o_time" name="open_thursday" value="{{ @$data_value->thursday_open }}"></th>
                                                <th><input type="text" class="form-control" id="thu_c_time" name="close_thursday" value="{{ @$data_value->thursday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="thucheck" name="thu_check" <?php if($data_value->thu_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="thucheck" name="thu_check" <?php if($data_value->thu_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Friday</th>
                                                <th><input type="text" class="form-control" id="fri_o_time" name="open_friday" value="{{ @$data_value->friday_open }}"></th>
                                                <th><input type="text" class="form-control" id="fri_c_time" name="close_friday" value="{{ @$data_value->friday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="fricheck" name="fri_check" <?php if($data_value->fri_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="fricheck" name="fri_check" <?php if($data_value->fri_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Saturday</th>
                                                <th><input type="text" class="form-control" id="sat_o_time" name="open_saturday" value="{{ @$data_value->saturday_open }}"></th>
                                                <th><input type="text" class="form-control" id="sat_c_time" name="close_saturday" value="{{ @$data_value->saturday_close }}"></th>
                                                <th>
                                                    <label><input type="checkbox" class="satcheck" name="sat_check" <?php if($data_value->sat_radio == 1){ echo("checked"); }?> value="1">&nbsp Holiday</label> <br>
                                                    <label><input type="checkbox" class="satcheck" name="sat_check" <?php if($data_value->sat_radio == 2){ echo("checked"); }?> value="2">&nbsp 24 hour available</label>
                                                </th>
                                            </tr>
                                        </table>
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
