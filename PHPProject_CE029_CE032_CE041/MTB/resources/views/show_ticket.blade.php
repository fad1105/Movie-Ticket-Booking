<x-app-layout>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;
      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 40%;
    }

    .col-75 {
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: #f2f2f2;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: #4CAF50;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #45a049;
    }

    a {
      color: #2196F3;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: black;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>
  <title>Ticket</title>
</head>

<body>

  
  <div class="row">
    <div class="container" style="float: 50%; width : 100% ;margin-bottom : -10px; ">
      <center>
        <h3>Movie Ticket</h3>
      </center>
    </div>

  </div>
  <div class="row">

    <div class="container" style="float: 50%; width : 34% ; ">

      <h4>Seat Number <span class="price" style="color:black"></h4><hr>
      <div style="margin-right: 20px;">
        @foreach($seat as $s)
        {{$s}} ,
        @endforeach
      </div>
      </span></p>
      <br>

<hr>  
      <h4>Cart <span class="price" style="color:black"></h4><hr>


      <p>total seat <span class="price">{{$count}}</span></p>
      <p>per seat price <span class="price">{{$show[0]->price}}</span></p>


      <hr>
      <p>Total <span class="price" style="color:black"><b>{{number_format($count * $show[0]->price)}}</b></span></p>

    </div>

    <div class="container" style="float: 50%; width : 33% ">




      <h4>Address <span class="price" style="color:black"></h4><hr>
      <p>{{$city[0]->address}}</p>
      <p> {{$city[0]->city_name}}, </p>
      <p>{{$city[0]->state}}
                                -{{$city[0]->pincode}}</p>
                                <br>
      <hr>
      <h4>date and time <span class="price" style="color:black"></h4><hr>

      <p>Date <span class="price">{{$show[0]->show_date}}</span> </p>
      <p>Time<span class="price">{{$show[0]->show_time}}</span> </p>

     
     
    </div>


    <div class="container" style="float: 50%; width : 33% ">

      <h4>movie detail <span class="price" style="color:black"></h4><hr>
      
      <p>Movie name <span class="price">{{$movies[0]->movie_name}}</span> </p>
      <p>Release Date : <span class="price">{{$movies[0]->release_date}}</span> </p>
      <p>Duration : <span class="price"> {{$movies[0]->duration}}</span> </p>
      <p>Language : <span class="price"> {{$movies[0]->language}}</span> </p>
      <p>Genres : <span class="price">{{$movies[0]->cinema_tags}}</span> </p>
      <p> Cinema : <span class="price">{{$movies[0]->genres }}</span> </p>


    </div>



  </div>
  <div class="row">
    <div class="container" style="float: 50%; width : 100% ;margin-bottom : -10px; ">
      <center><h3>Have Nice Day !!!</h3></center>
    </div>



</body>

</html>
</x-app-layout>