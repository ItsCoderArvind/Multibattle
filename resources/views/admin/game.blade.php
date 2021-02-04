@extends('layouts.admin')


@section('page_name', 'Game')
@section('content')

<div class="container">
@include('partials.flashmessages')
<button type="button" class="btn btn-block btn-primary col-lg-2 col-md-4" onclick="window.location='addgame'">
      Add Game
</button><br>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Booking's List</h3>

                <a href="{{ url('/report/bookings_list')}}" target="_blank" class="btn btn-primary float-right ml-2">
                  <i class="fas fa-print"></i>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>                    
                    <th>ID</th>
                    <th>Image</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Playstore URL</th>
                    <th>Bundle ID</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                  <tr>                    
                    <th>ID</th>
                    <th>Image</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Playstore URL</th>
                    <th>Bundle ID</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

@endsection