@extends('layouts.admin')


@section('page_name', 'Dashboard')
@section('content')

<div class="container">
@include('partials.flashmessages')
<button type="button" class="btn btn-block btn-primary col-lg-2 col-md-4" onclick="window.location='add-booking'">
      Add Match
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>                    
                    <th>ID</th>
                    <th>Name</th>
                    <th>Win Price</th>
                    <th>Per Kill</th>
                    <th>Entry Fee</th>
                    <th>Entry Fee Coin</th>
                    <th>Type</th>
                    <th>Version</th>
                    <th>Map</th>
                    <th>Detail</th>
                    <th>Status</th>
                    <th>Total Spot</th>
                    <th>Count</th>
                    <th>Match Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  </tbody>
                  <tfoot>
                  <tr>                    
                    <th>ID</th>
                    <th>Name</th>
                    <th>Win Price</th>
                    <th>Per Kill</th>
                    <th>Entry Fee</th>
                    <th>Entry Fee Coin</th>
                    <th>Type</th>
                    <th>Version</th>
                    <th>Map</th>
                    <th>Detail</th>
                    <th>Status</th>
                    <th>Total Spot</th>
                    <th>Count</th>
                    <th>Match Time</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>

@endsection