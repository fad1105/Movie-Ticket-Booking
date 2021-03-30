<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>seat Book</title>
    <style>
        input[type=checkbox] {
            margin-top: 15px;
            margin-right: 1px;
            margin-bottom: 20px;
            padding: 20px;

            border: 1px solid #ccc;
            border-radius: 3px;
        }



        .col-10 {
            padding: 0 16px;
        }

        .col-10 {
            -ms-flex: 10%;
            /* IE10 */
            flex: 5%;
        }
    </style>
    <style>


    </style>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        img {
            border-radius: 50%;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: 100%;
            width: 60%;
            margin-bottom: 15px;
            margin-left: 80px;
            margin-right: 80px;
            margin-top: 10px;
            padding: 0 10px;
        }


        .column1 {
            float: 100%;
            width: 50%;
            margin-bottom: 15px;
            margin-left: 80px;
            margin-right: 80px;
            margin-top: 10px;
            padding: 0 10px;
        }



        .card {
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
            margin: 0px;
            background-color: rgb(240, 244, 245);
        }

        .card1 {
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.2);
            margin: 0px;
            background-color: rgb(240, 244, 245);
        }

        .about-section {
            padding: 10px;
            text-align: center;
            background-color: #474efd;
            color: white;
        }

        .container {
            padding: 0 16px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }


        .title {
            color: grey;
        }



        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>

    <div class="row">
        <center>
            <br>
            <div class="column">
                <div class="card">
                    <div class="row1">
                        <center>
                            <div class="column1">
                                <br>
                                <div class="card" style="background-color: white;">
                                    <h4>screen here</h4>
                                </div>
                                <br>
                            </div>
                        </center>
                    </div>
                    <form action="/booking" method="post" >
                        @csrf
                        @for ($j = 0; $j < 1; $j++)
                         @for ($i=0; $i < 10; $i++) 
                         
                         
                         <label for="chackbox">
                         @if(in_array(number_format(($j*10) + ($i+1) ), $booked_seat)) 
                            <input type="checkbox" name="seat[]" value={{$i+1}} disabled="disabled"  style="background-color: black;">
                            @else
                            <input type="checkbox" name="seat[]" value={{$i+1}} >
                            @endif
                            <label style=" margin-right:30px;">
                                {{number_format(($j*10) + ($i+1) )}}
                            </label>
                            </label>
                            @endfor
                            
                            <br>
                            @endfor
                            @for ($j = 1; $j < 10; $j++) 
                            
                            @for ($i=0; $i < 10; $i++)
                          
                             <label for="chackbox">
                             @if(in_array(number_format(($j*10) + ($i+1) ), $booked_seat)) 
                                <input type="checkbox" name="seat[]" value={{number_format(($j*10) + ($i+1) )}}  disabled="disabled">
                            @else
                            <input type="checkbox" name="seat[]" value={{number_format(($j*10) + ($i+1) )}} >
                            @endif
                                <label style=" margin-right:21px;" >
                                    {{number_format(($j*10) + ($i+1) )}}
                                </label>
                                </label>
                                @endfor
                                
                                <br>
                                @endfor
                                <br>
                                <input type="hidden" name="show_id" value={{$show_id}} >

                                <input type="submit" value="book now" class="btn btn-outline-success">
                                <br>
                    </form>
<br>
                </div>
            </div>
            <br>
        </center>
        <br>
    </div>
    <!-- disabled="disabled" -->
</body>

</html>