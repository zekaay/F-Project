@extends('includes.newmaster')

@section('content')

    <div class="home-wrapper">
        <!-- Starting of login area -->
        <div class="section-padding login-area-wrapper wow fadeInUp">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-lg-offset-3 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
                        <div class="newAccount-area">
                            <h2 class="signIn-title">Create a new Vendor account</h2>
                            <hr/>

                            <p>Create your new account.</p>
                            <form action="{{route('vendor.reg.submit')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="reg_email">Email Address <span>*</span></label>
                                    <input class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Please Enter a Valid Email." name="email" id="reg_email" required>
                                </div>
                                <div class="form-group">
                                    <label for="reg_name">name <span>*</span></label>
                                    <input class="form-control" type="text" name="name" id="reg_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="reg_name2">Shop Name <span>*</span></label>
                                    <input class="form-control" type="text" name="shop_name" id="reg_name2" required>
                                </div>
                                <div class="form-group">
                                    <label for="reg_name22">Location Address <span>*</span></label>
                                    <input class="form-control" type="text" name="address" id="reg_name22" required>
                                </div>
                                <div class="form-group">
                                    <label for="reg_name23">Select Region <span>*</span></label>
                                    <select id="reg_name23" name="region" class="form-control" required>
                                        <option value="">Select Region</option>
                                        <option value="GREATER ACCRA">GREATER ACCRA</option>
                                        <option value="ASHANTI">ASHANTI</option>
                                        <option value="EASTERN">EASTERN</option>
                                        <option value="WESTERN">WESTERN</option>
                                        <option value="NORTHERN">NORTHERN</option>
                                        <option value="UPPER WEST">UPPER WEST</option>
                                        <option value="UPPER EAST">UPPER EAST</option>
                                        <option value="BRONG AHAFO">BRONG AHAFO</option>
                                        <option value="CENTRAL">CENTRAL</option>
                                        <option value="VOLTA">VOLTA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reg_Pnumber">Phone Number (format: xxxxxxxxxx)<span>*</span></label>
                                    <input class="form-control" type="tel" pattern="^\d{10}$" name="phone" title="Please enter a valid phone number" id="reg_Pnumber" required>
                                </div>
                                <div class="form-group">
                                    <label for="reg_password">Password <span>*</span></label>
                                    <input class="form-control" type="password" name="password" id="reg_password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password <span>*</span></label>
                                    <input class="form-control" type="password" name="password_confirmation" id="confirm_password" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                            <a href="{{url('vendor')}}">Already Have Account?</a>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>* {{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>* {{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>* {{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                                @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissable">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        {{ Session::get('message') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input class="btn btn-md login-btn" type="submit" value="sign up">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ending of login area -->
    </div>
@stop

@section('footer')

@stop