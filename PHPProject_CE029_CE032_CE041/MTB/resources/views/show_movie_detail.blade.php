<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>{{$movies_name[0]->movie_name}}</title>

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

        .col-50a {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
            font-family: Arial;

            font-size: 30px;
            margin-left: -15px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 60%;
            /* IE10 */
            flex: 60%;
        }

        .col-25,
        .col-50,
        .col-75,
        .col-50a {
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

        input[type=password] {
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
            color: grey;
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

</head>

<body>
    <br><br>
    <center>
        <div class="card text-dark bg-light mb-10" style="max-width: 70rem;">
            <div class="card-header">
                <h4>
                    <center>{{$movies_name[0]->movie_name}}</center>
                </h4>
            </div>
            <br><br>
            <div class="row">



                <div class="col-75" style="margin-left: 25px;">
                    <iframe width="700" height="485" src={{$movies_name[0]->trailer_link}}>
                    </iframe>
                </div>


                <div class="col-25" st>

                    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;" style="margin-left: -20px;">

                        <img src={{$movies_name[0]->image_url}} class="card-img-top" height="300px">
                        <div class="card-body" style="text-align: left;">
                            Release Date : {{$movies_name[0]->release_date}}
                            <br>
                            Duration : {{$movies_name[0]->duration}}
                            <br>
                            Language : {{$movies_name[0]->language}}
                            <br>
                            Cinema : {{$movies_name[0]->cinema_tags}}
                            <br>
                            Genres : {{$movies_name[0]->genres }}

                        </div>



                        <!-- <i style="font-size:19px" class="fa mb-3">&#xf041</i> -->
                    </div>
                </div>
            </div>
        </div>

        </div>
    </center>
</body>

</html>
</x-app-layout>