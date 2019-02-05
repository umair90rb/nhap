@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hostel Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hostel.store') }}">
                        @csrf  
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('Select State') }}</label>

                            <div class="col-md-6">
                                @include('injects/states')    
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Select City') }}</label>

                            <div class="col-md-6">
                                @include('injects/cities')    
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Select Area') }}</label>

                            <div class="col-md-6">
                                @include('injects/areas')    
                                @if ($errors->has('area'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="ownerName" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Owner Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="ownerName" type="text" class="form-control{{ $errors->has('ownerName') ? ' is-invalid' : '' }}" name="ownerName" value="{{ old('ownerName') }}"  autofocus>
    
                                    @if ($errors->has('ownerName'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ownerName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="ownerCnic" class="col-md-4 col-form-label text-md-right">{{ __('Owner CNIC No') }}</label>

                            <div class="col-md-6">
                                <input id="ownerCnic" type="cnic" class="cnic form-control{{ $errors->has('ownerCnic') ? ' is-invalid' : '' }}" name="ownerCnic"  title="Please enter CNIC e.g 12345-1234567-1" pattern="([0-9]{5}-[0-9]{7}-[0-9]{1})" value="{{ old('ownerCnic') }}" >

                                @if ($errors->has('ownerCnic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ownerCnic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobileNo" class="col-md-4 col-form-label text-md-right">{{ __('Owner Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobileNo" type="mobileNo" class="contact form-control{{ $errors->has('mobileNo') ? ' is-invalid' : '' }}" name="mobileNo"  value="{{ old('mobileNo') }}" >
                                
                                <small id="helpBlock" class="form-text text-muted">
                                    Mobile no necessary for verification.
                                </small>
                                @if ($errors->has('mobileNo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobileNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="hostelRoms" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Roms') }}</label>

                            <div class="col-md-6">
                                <input id="hostelRoms" type="text" class="form-control{{ $errors->has('hostelRoms') ? ' is-invalid' : '' }}" name="hostelRoms" >

                                @if ($errors->has('hostelRoms'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelRoms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="hostelCapacity" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Capacity') }}</label>

                            <div class="col-md-6">
                                <input id="hostelCapacity" type="text" class="form-control{{ $errors->has('hostelCapacity') ? ' is-invalid' : '' }}" name="hostelCapacity" >

                                @if ($errors->has('hostelCapacity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelCapacity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="transactionDetail" class="col-md-4 col-form-label text-md-right">{{ __('Hostel For') }}</label>

                            <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="hostelFor" id="inlineRadio1" value="boys">
                                        <label class="form-check-label" for="inlineRadio1">Boys</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="hostelFor" id="inlineRadio2" value="Girls">
                                        <label class="form-check-label" for="inlineRadio2">Girls</label>
                                    </div>
                            </div>
                        </div>


                        
                        <div class="form-group row">
                            <label for="hostelType" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Type') }}</label>
                            
                            <div class="col-md-6">
                                <select name="city" id="city" class="form-control form-control-sm">
                                    <option value="">Select Hostel Type</option>
                                    <option value="">Private Hostel</option>
                                    <option value="">Govt Hostel</option>
                                    <option value="">Community Hostel</option>
                                    <option value="">Doctors Hostel</option>
                                    <option value="">Nursing Hostel</option>
                                    <option value="">Working Women Hostel</option>
                                    <option value="">Other Hostel</option>
                                </select>
                                @if ($errors->has('hostelType'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('hostelType') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="hostelName" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Name') }}</label>

                            <div class="col-md-6">
                                <input id="hostelName" type="text" class="form-control{{ $errors->has('hostelName') ? ' is-invalid' : '' }}" name="hostelName" >

                                @if ($errors->has('hostelName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelAddress" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Address') }}</label>

                            <div class="col-md-6">
                                <input id="hostelAddress" type="text" class="form-control{{ $errors->has('hostelAddress') ? ' is-invalid' : '' }}" name="hostelAddress" >

                                @if ($errors->has('hostelAddress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelNumber" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Contact No') }}</label>

                            <div class="col-md-6">
                                <input id="hostelNumber" type="text" class="contact form-control{{ $errors->has('hostelNumber') ? ' is-invalid' : '' }}" name="hostelNumber" >

                                @if ($errors->has('hostelNumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelLandline" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Landline No') }}</label>

                            <div class="col-md-6">
                                <input id="hostelLandline" type="text" class="form-control{{ $errors->has('hostelLandline') ? ' is-invalid' : '' }}" name="hostelLandline" >

                                @if ($errors->has('hostelLandline'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelLandline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelPartner" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Partner') }}</label>

                            <div class="col-md-6">
                                <input id="hostelPartner" type="text" class="form-control{{ $errors->has('hostelPartner') ? ' is-invalid' : '' }}" name="hostelPartner" >

                                @if ($errors->has('hostelPartner'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelPartner') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="hostelPartnerAddon" style="display:none;">

                            <div class="form-group row">
                                <label for="hostelPartnerContact" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Partner Contact') }}</label>
    
                                <div class="col-md-6">
                                    <input id="hostelPartnerContact" type="text" class="contact form-control{{ $errors->has('hostelPartnerContact') ? ' is-invalid' : '' }}" name="hostelPartnerContact" >
    
                                    @if ($errors->has('hostelPartnerContact'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hostelPartnerContact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hostelPartnerCnic" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Partner CNIC') }}</label>
    
                                <div class="col-md-6">
                                    <input id="hostelPartnerCnic" type="text" class="cnic form-control{{ $errors->has('hostelPartnerCnic') ? ' is-invalid' : '' }}" name="hostelPartnerCnic" >
    
                                    @if ($errors->has('hostelPartnerCnic'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hostelPartnerCnic') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="hostelWarden" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Warden') }}</label>

                            <div class="col-md-6">
                                <input id="hostelWarden" type="text" class="form-control{{ $errors->has('hostelWarden') ? ' is-invalid' : '' }}" name="hostelWarden" >

                                @if ($errors->has('hostelWarden'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelWarden') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="hostelWardenAddon" style="display:none;">

                            <div class="form-group row">
                                <label for="hostelWardenContact" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Warden Contact') }}</label>
    
                                <div class="col-md-6">
                                    <input id="hostelWardenContact" type="text" class="contact form-control{{ $errors->has('hostelWardenContact') ? ' is-invalid' : '' }}" name="hostelWardenContact" >
    
                                    @if ($errors->has('hostelWardenContact'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hostelWardenContact') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hostelWardenCnic" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Warden CNIC') }}</label>
    
                                <div class="col-md-6">
                                    <input id="hostelWardenCnic" type="text" class="cnic form-control{{ $errors->has('hostelWardenCnic') ? ' is-invalid' : '' }}" name="hostelWardenCnic" >
    
                                    @if ($errors->has('hostelWardenCnic'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('hostelWardenCnic') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="referalCnic" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Referal CNIC') }}</label>

                            <div class="col-md-6">
                                <input id="referalCnic" type="text" class="cnic form-control{{ $errors->has('referalCnic') ? ' is-invalid' : '' }}" name="referalCnic" >

                                @if ($errors->has('referalCnic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('referalCnic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelBuilding" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Building Type') }}</label>

                            <div class="col-md-6">
                                <select name="hostelBuilding" id="hostelBuilding" class="form-control form-control-sm">
                                    <option value="">Select Hostel Type</option>
                                    <option value="">Hostel</option>
                                    <option value="">House</option>
                                    <option value="">Apartment</option>
                                    <option value="">Plaza Type</option>
                                    <option value="">Rooms for rent</option>
                                </select>
                                @if ($errors->has('hostelBuilding'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hostelBuilding') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registrationFeeScreenShot" class="col-md-4 col-form-label text-md-right">{{ __('Registrtion Fee Vochure Screenshort') }}</label>

                            <div class="col-md-6">
                                <input id="registrationFeeScreenShot" type="text" class="form-control{{ $errors->has('registrationFeeScreenShot') ? ' is-invalid' : '' }}" name="registrationFeeScreenShot" >

                                @if ($errors->has('registrationFeeScreenShot'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('registrationFeeScreenShot') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">    
                                <label for="termsAndCondition" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                                <div class="col-md-6">
                                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="termsAndCondition">
                                    <label class="custom-control-label" for="termsAndCondition">Accept Terms and Condition</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="regButton" class="btn btn-primary" disabled>
                                    {{ __('Register') }}
                                </button>
                                <a class="btn btn-link"  data-toggle="modal" data-target="#modalLoginForm">
                                        {{ __('Find your Hostel') }}
                                </a>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
@section('script')
<script src="{{ asset('js/mask.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function(){

        $('#termsAndCondition').change(function() {
            if (($('#termsAndCondition').is(':checked'))) {
                $('#regButton').removeAttr('disabled');
            } else {
                $('#regButton').attr('disabled', 'disabled');
            }
        });
        

        $('input[name=hostelPartner]').keyup(function(){
            var hostelPartner = $('input[name=hostelPartner]').val();
            if(hostelPartner.length >= 1)
            {
                $('div[id=hostelPartnerAddon]').fadeIn(500);  
            } else {
                $('div[id=hostelPartnerAddon]').fadeOut(250);
            }
        });

        $('input[name=hostelWarden]').keyup(function(){
            var hostelPartner = $('input[name=hostelWarden]').val();
            if(hostelPartner.length >= 1)
            {
                $('div[id=hostelWardenAddon]').fadeIn(500);  
            } else {
                $('div[id=hostelWardenAddon]').fadeOut(250);
            }
        });

        $('.cnic').inputmask("99999-9999999-9",{ "placeholder": "    -       - " });
        $('.contact').inputmask("+\\929999999999",{ "placeholder": "+92          " });
        
        $('form').submit(function(){

            var test = $('.contact').val();
            alert(test);
        });


    });
</script>
@endsection