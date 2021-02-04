@extends('layouts.admin')


@section('page_name', 'Notification')
@section('content')

<div class="container">
@include('partials.flashmessages')
<button type="button" class="btn btn-block btn-primary col-lg-2 col-md-4" onclick="window.location='add-booking'">
      Add Game
</button><br>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking's List</h3>

                <a href="#" target="_blank" class="btn btn-primary float-right ml-2">
                  <i class="fas fa-print"></i>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                                  
              
              </div>
              <!-- /.card-body -->
            </div>
</div>

@endsection