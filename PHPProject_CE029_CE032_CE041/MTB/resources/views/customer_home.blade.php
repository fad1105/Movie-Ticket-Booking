<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <br><br>
    <div class="row" style="margin-left: 50px;">
        @foreach($movies as $movie)
        <div class="col-sm-4" style="margin-bottom: 50px;">

            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">
                    <h4>
                        <center>{{$movie->movie_name}}</center>
                    </h4>
                </div>
                <img src={{$movie->image_url}} class="card-img-top" height="300px">
                <div class="card-body">
                    <center>{{$movie->language}}
                        <br>
                        {{$movie->genres }}
                    </center>
                </div>
                <div class="card-footer">
                    <form action="/show_movie_detail" method="post"  style="margin-left:30%;">
                        @csrf
                        <input type="hidden" name="movie_id" value={{$movie->id}} >
                        <input type="hidden" name="city_id" value={{$city_id}}>
                        <input type="submit" value="book now" class="btn btn-outline-success">
                    </form>
                    <!-- <i style="font-size:19px" class="fa mb-3">&#xf041</i> -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>
</x-app-layout>