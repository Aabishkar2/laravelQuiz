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
<script src="{{ asset ('/js/jquerychain.min.js') }}" type="text/javascript"></script>
<script>
$().ready(function() {
    $("#city").chained("#district");
    $("#area").chained("#city");
    // $("#area").chained("#series, #model");
});
</script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <form id="signupForm" method="POST" action="{{ $post_url }}" enctype="multipart/form-data" autocomplete="off" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Location Details</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Address title</label>
                                            <input class="form-control" name="address_title" maxlength="30" type="text" value="{{ @$location->address_title }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">District</label>
                                            <select class="form-control" id="district" name="district">
                                                @foreach($district as $row)
                                                <option class="form-control" value="{{ $row->id }}" <?php echo (@$location->district == $row->id) ? "selected" : '' ?>>{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">City</label>
                                            <select class="form-control" id="city" name="city">
                                                @foreach($city as $row)
                                                <option class="form-control" data-chained="{{ $row->district_id }}" value="{{ $row->id }}" <?php echo (@$location->city == $row->id) ? "selected" : '' ?> >{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Area</label>
                                            <select class="form-control" id="area" name="area">
                                                @foreach($area as $row)
                                                <option class="form-control" data-chained="{{ $row->district_id }} {{ $row->city_id }}" value="{{ $row->id }}" <?php echo (@$location->area == $row->id) ? "selected" : '' ?>>{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">House Number</label>
                                            <input class="form-control" name="house_number" type="text" maxlength="10" value="{{ @$location->house_number }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Landmark</label>
                                            <input class="form-control" name="landmark" type="text" maxlength="60" placeholder="Eg: Near by Saipal School" value="{{ @$location->landmark }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Street Adress</label>
                                            <input class="form-control" name="street_address" type="text" maxlength="30" value="{{ @$location->street_address }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">P.O. Box</label>
                                            <input class="form-control" name="po_box" type="text" maxlength="30" value="{{ @$location->po_box }}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-primary">
                                <div class="card-header text-white bg-primary">
                                    <div class="row">
                                        <div class="col-md-12"><strong>Office Contact Details</strong></div>
                                    </div>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Landline No. 1</label>
                                            <input class="form-control" name="landline_1" type="text" maxlength="9" value="{{ @$contact_detail->landline_1 }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="ccnumber">Landline No. 2</label>
                                            <input class="form-control" name="landline_2" type="text" maxlength="9" value="{{ @$contact_detail->landline_2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Email 1</label>
                                            <input class="form-control" name="email_1" type="email" value="{{ @$contact_detail->email1 }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="ccnumber">Email 2</label>
                                            <input class="form-control" name="email_2" type="email" value="{{ @$contact_detail->email2 }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Toll Free No. (if any)</label>
                                            <input class="form-control" name="toll_free" type="text" value="{{ @$contact_detail->toll_free }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label for="ccnumber">Fax (if any)</label>
                                            <input class="form-control" name="fax" type="text" value="{{ @$contact_detail->fax }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="ccnumber">Website (if any)</label>
                                            <input class="form-control" name="website" type="text" value="{{ @$contact_detail->website }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> -->
                        </div>

                    </div>
                <!-- /.col-->
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header text-white bg-primary">
                                <div class="row">
                                    <div class="col-md-12"><strong>Contact Person Details</strong></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Full Name</label>
                                            <input class="form-control" name="full_name" maxlength="50" type="text" value="{{ @$contact_person->full_name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Designation</label>
                                            <input class="form-control" name="designation" maxlength="30" type="text" value="{{ @$contact_person->designation }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Email</label>
                                            <input class="form-control" name="email" type="text" value="{{ @$contact_person->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="ccnumber">Mobile</label>
                                            <input class="form-control" name="mobile" type="text" maxlength="14" value="{{ @$contact_person->mobile }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> -->
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
