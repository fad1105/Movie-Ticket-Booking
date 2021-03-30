<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<style>
    body {
      background-image: url('cool-background1.png');
      background-repeat: no-repeat;
      background-attachment: fixed;  
      background-size: cover;
    } 
    </style>
    <style>
            
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        body {
            background-image: url('cool-background1.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Float four columns side by side */
        .column {
            float: 50%;
            width: 25%;
            padding: 0 10px;
        }

        /* Remove extra left and right margins, due to padding */
        .row {
            margin: 0 -5px;
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

        .col-100a,
        .col-100 {
            padding: 0 16px;
        }

        .col-100,
        .col-100a {
            -ms-flex: 30%;
            /* IE10 */
            flex: 25%;
            font-family: Arial;


        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
        }

        /* Style the counter cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
            flex: 25%;
        }
    </style>
</head>

<body>
    <center>
        <h4>select your City</h4>
        <div class="card">
            <!-- <div class="col-100"> -->
            <div class="row">

                <br>

                @foreach($cities as $city)
                </br>
                <form action="/home" method="post">
                    @csrf
                    <input type="hidden" name="city_id" value={{$city->id}}>
                    <input type="submit" style="margin-right: 20px;" value={{$city->city_name}} class="btn btn-success">
                </form>
                <br>
                @endforeach

                <br>
                <br>


            </div>
        </div>
        </div>
    </center>
</body>

</html>