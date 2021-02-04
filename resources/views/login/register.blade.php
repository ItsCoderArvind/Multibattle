@extends('layouts.login')

@section('page_name', 'Login')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-2"></div>
            <div class="col-lg-5 col-md-4 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    Register
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                           <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control">
                            </div><div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                    <a href="#" class="form-control-label"> Already have account.?</a>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="customsearchbtn">&nbsp;&nbsp;&nbsp;&nbsp;REGISTER&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
</div>
<br><br>





@endsection