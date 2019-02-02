@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Member Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hostel.store') }}">
                        @csrf

                        

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cnic" class="col-md-4 col-form-label text-md-right">{{ __('CNIC No') }}</label>

                            <div class="col-md-6">
                                <input id="cnic" type="cnic" class="form-control{{ $errors->has('cnic') ? ' is-invalid' : '' }}" name="cnic" onkey="alert('abc')" title="Please enter CNIC e.g 12345-1234567-1" pattern="([0-9]{5}-[0-9]{7}-[0-9]{1})" value="{{ old('cnic') }}" required>

                                @if ($errors->has('cnic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobileNo" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobileNo" type="mobileNo" class="form-control{{ $errors->has('mobileNo') ? ' is-invalid' : '' }}" name="mobileNo"  value="{{ old('mobileNo') }}" required>
                                
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
                            <label for="referlCnic" class="col-md-4 col-form-label text-md-right">{{ __('Referal CNIC') }}</label>

                            <div class="col-md-6">
                                <input id="referlCnic" type="text" class="form-control{{ $errors->has('referlCnic') ? ' is-invalid' : '' }}" name="referlCnic" required>

                                @if ($errors->has('referlCnic'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('referlCnic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="transactionDetail" class="col-md-4 col-form-label text-md-right">{{ __('Transaction Detail') }}</label>

                            <div class="col-md-6">
                                <input id="transactionDetail" type="text" placeholder="Enter your transaction detail" class="form-control" name="transactionDetail" required>
                                <small id="helpBlock" class="form-text text-muted">
                                    *Easypaisa*Sender Mobile No*Transaction Id*Ammount#
                                </small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hostelRegistrationNo" class="col-md-4 col-form-label text-md-right">{{ __('Hostel Registration No') }}</label>
                            
                            <div class="col-md-6">
                                <input id="hostelRegistrationNo" type="text" placeholder="Enter your hostel registration no" class="form-control{{ $errors->has('hostelRegistrationNo') ? ' is-invalid' : '' }}" name="hostelRegistrationNo" value="{{ old('hostelRegistrationNo') }}" required autofocus>
                                <small id="helpBlock" class="form-text text-muted">
                                    NHAP-AB-123456. If don't know, Search 
                                </small>
                                @if ($errors->has('hostelRegistrationNo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('hostelRegistrationNo') }}</strong>
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

<!-- model form -->

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Find Your Hostel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <div class="row">
            <div class="col">
                   @include('injects.states')
            </div>
            <div class="col">
                <select id="city" name="city" class="form-control form-control-sm">
                    <option value=""> Select City</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <select id="area" name="area" class="form-control form-control-sm">
                    <option value=""> Select Area</option>
                </select>
            </div>
            <div class="col">
                <select id="hostel" name="hostel" class="form-control form-control-sm">
                        <option value=""> Select Hostel</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input class="form-control" id="nhapReg" >
                <small id="nhapRegText" class="form-text text-muted">If cannot find your hostel, please register first.</small>
            </div>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default " data-dismiss="modal" aria-label="Close" id="getData">Get Registration No</button>
      <a class="btn btn-default " href="{{ url('/') }}" >Register Hostel</a>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {

            $('.dynamic').change(function(){
                console.log(this.val);
            });

            $("#state").change(function(){
                var stateId = $('#state').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },              
                    url:'{{ route("getCity") }}',
                    type:'post',
                    data:{id:stateId},
                    success:function(cities){
                        var data = $("#city").html();
                        var option ='<option value=""> Select City</option>';
                        if(cities != null){
                            cities.forEach(city => {
                           option = option + "<option value="+city.id+">"+ city.name +"</option>";
                        });
                        $("#city").html(option);
                        }
                    },
                    error:function(e){
                        console.log(e);
                    }
                });
            });

            $("#city").change(function(){
                var stateId = $('#city').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },              
                    url:'{{ route("getArea") }}',
                    type:'post',
                    data:{id:stateId},
                    success:function(areas){
                        var data = $("#city").html();
                        var option ='<option value=""> Select Area</option>';
                        if(areas != null){
                            areas.forEach(area => {
                           option = option + "<option value="+area.id+">"+ area.name +"</option>";
                        });
                        $("#area").html(option);
                        }
                    },
                    error:function(e){
                        console.log(e);
                    }
                });
            });

            $("#area").change(function(){
                var stateId = $('#area').val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },              
                    url:'{{ route("getHostel") }}',
                    type:'post',
                    data:{id:stateId},
                    success:function(hostels){
                        var data = $("#city").html();
                        var option ='<option value=""> Select Hostel</option>';
                        if(hostels != null){
                            hostels.forEach(hostel => {
                           option = option + "<option value="+hostel.nhap_registration_no+">"+ hostel.name +"</option>";
                        });
                        $("#hostel").html(option);
                        }
                    },
                    error:function(e){
                        console.log(e);
                    }
                });
            });
            $('#hostel').change(function(){
                var nhapRegistrationNo = $(this).val();
                $('#nhapReg').val(nhapRegistrationNo);
            });
            $('#getData').click(function(){
                var nhapReg = $('#nhapReg').val();
                $('#hostelRegistrationNo').val(nhapReg);
            });
            $('#termsAndCondition').change(function() {
                if (($('#termsAndCondition').is(':checked'))) {
                    $('#regButton').removeAttr('disabled');
                } else {
                $('#regButton').attr('disabled', 'disabled');
                }
            });
        });
    </script>
@endsection