
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Custom css file-->

    <link rel="stylesheet" href="./css/addgame.css">


</head>
<body>
    <link rel="stylesheet" href="{{asset('assets/css/addgame.css')}}">

<body>
             <button class="btn btn-primary btn-sm" data-target="#addgame" data-toggle="modal">Add Game</button>

            <!--Modal for add game Starts-->
            <div class="modal" data-keyboard="false" data-backdrop="static" id="addgame" tabindex="-1">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                    <div class="modal-header" style="background-color: #63a4ff;
                        background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);">

                           <h5 class="modal-title" style="font-family:'Roboto', sans-serif;
                           color: black;"> 
                           Add Game
                            </h5>
                           <button class="close" data-dismiss="modal">&times;</button>
                        </div>

                            <div class="modal-body">
                             
                                <form action="" method="get"> 
                                    @csrf                                 
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="type">
                                          <option>Game</option>
                                          <option>Banner</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="form-group row">
                                      <label for="title" class="col-sm-3 col-form-label">Title</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" id="title" required>
                                      </div>
                                    </div>
                                    

                                    <div class="form-group row">
                                        <label for="Bannerurl" class="col-sm-3 col-form-label">Playstore Or Banner Url</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="Bannerurl" required>
                                        </div>
                                      </div>

                                      
                                    <div class="form-group row">
                                        <label for="Bundleid" class="col-sm-3 col-form-label">Bundle id</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control" id="Bundleid" required>
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                        <select class="form-control" id="status" >
                                          <option>Enable</option>
                                          <option>Disable</option>
                                        </select>
                                      </div>
                                    </div>

                                 
                                      <div class="form-group row">
                                            <label for="image" class="col-sm-3 col-form-label">Image</label>
                                          <div class="col-sm-7">
                                          <input type="file" class="form-control-file" id="Image" required>
                                          <img src="" alt="" class="img-thumbnail">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label for="icon" class="col-sm-3 col-form-label">Icon</label>
                                      <div class="col-sm-7">
                                      <input type="file" class="form-control-file" id="icon" required>
                                      <img src="" alt="" class="img-thumbnail">
                                    </div>
                                </div>
                               

                          
                            </div>
                                <div class="modal-footer">
                                 <button class="btn btn-primary">Submit</button>        </form>
                                 <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                    </div>

                </div>
            </div>
</body>
</html>
