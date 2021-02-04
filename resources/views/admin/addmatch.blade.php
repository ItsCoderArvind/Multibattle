@extends('layouts.admin')
@section('page_name', 'Match')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/addgame.css')}}">


<div class="container">
@include('partials.flashmessages')

<!--button type="button" class="btn btn-block btn-primary col-lg-2 col-md-4" onclick="window.location='addgame'"-->

<button class="btn btn-primary btn-sm" data-target="#addmatch" data-toggle="modal">Add Match</button><br>

<!--Meadia File Starts-->

<div class="modal" data-keyboard="false" data-backdrop="static" id="addmatch" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header" style="background-color: #63a4ff;
                        background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);">

                           <h5 class="modal-title" style="font-family:'Roboto', sans-serif;
                           color: black;"> 
                          Add Match
                            </h5>
                           <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                            <div class="modal-body">
                             
                                <form action="" method="get"> 
                                    @csrf                                 
                                    <div class="form-group row">
                                        <label for="game" class="col-sm-4 col-form-label">Select Game</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="game">
                                          <option>Pubg Banner</option>
                                          <option>Free Fire</option>
                                          <option>Call of Duty</option>
                                          <option>PUBG Mobile</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="rules" class="col-sm-4 col-form-label">Select Rules</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="rules">
                                          <option>Pubg</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="name" class="col-sm-4 col-form-label">Name</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" required>
                                      </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <label for="price" class="col-sm-4 col-form-label">Win Price</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="price" required>
                                        </div>
                                      </div>

                                      
                                    <div class="form-group row">
                                        <label for="perkill" class="col-sm-4 col-form-label">Per Kill</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="perkill" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="fee" class="col-sm-4 col-form-label">Entry Fee</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="fee" required>
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="feecoin" class="col-sm-4 col-form-label">Entry Fee Coin</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="feecoin" required>
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="type" class="col-sm-4 col-form-label">Type</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="type">
                                          <option>Solo</option>
                                          <option>Duo</option>
                                          <option>Squad</option>
                                          <option>TDM</option>
                                          <option>Tournament</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="version" class="col-sm-4 col-form-label">Version</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="version">
                                          <option>TPP</option>
                                          <option>FPP</option>                                        
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="map" class="col-sm-4 col-form-label">Map</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="map" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="detail" class="col-sm-4 col-form-label">Detail</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="detail" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="spot" class="col-sm-4 col-form-label">Total Spot</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="spot" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="time" class="col-sm-4 col-form-label">Match Time</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="time" required>
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="status" >
                                          <option>Enable</option>
                                          <option>Disable</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="price pool" class="col-sm-4 col-form-label">Add Price Pool</label>

                                        <div class="col-sm-3">
                                        <label for="price pool" class="col-sm-3 col-form-label">Rank</label>
                                        <select class="form-control" id="status" >
                                          <option>Enable</option>
                                          <option>Disable</option>
                                        </select>
                                      </div>

                                      <div class="col-sm-1">
                                        <label for="price pool" class="col-sm-1 col-form-label">Price</label>
                                        <select class="form-control" id="status" >
                                          <option>Enable</option>
                                          <option>Disable</option>
                                        </select>
                                      </div>
                                      
                                    </div>                           

                            </div>

                <!-- Modal Footer-->                          

                                <div class="modal-footer">
                                 <button class="btn btn-primary">Submit</button>        </form>
                                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    </div>

                </div>
            </div>
   <br>
   

@endsection