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
                    Login
                </div>
                @if($message = Session::get('error'))
                   <div class="alert alert-danger alert-block">
                      <button class="close" type="button" data-dismiss="alert">x</button>
                      <strong> {{ $message }} </strong>
                @endif
                @if(count($errors) > 0)
                   <div class="alert alert-danger">
                       <ul>
                       @foreach($errors->all() as $error)
                         <li>{{ $error }} </li>
                       @endforeach
                       </ul>
                @endif
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post">
                           {{ csrf_field() }}
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                    <a href="#" class="form-control-label"> Forgot Password.?</a>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="customsearchbtn">&nbsp;&nbsp;&nbsp;&nbsp;LOGIN&nbsp;&nbsp;&nbsp;&nbsp;</button>
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