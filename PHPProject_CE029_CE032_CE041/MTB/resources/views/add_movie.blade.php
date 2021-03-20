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
            flex: 50%;
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

        input[type=text],
        select,
        input[type=date],
        input[type=time] {
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

        input[type=checkbox] {
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


    <div class="row">
        <div class="col-75">
            <div class="container">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-50">
                            <h2>Movie Info</h2>

                            <label>Movie Name</label>
                            <input type="text" name="movie_name" placeholder="bahubali 2" required>


                            <label>Language</label>
                            <select name="language" required>
                                <option value="">none </option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Gujrati">Gujrati</option>
                                <option value="Tamil">Tamil</option>
                                <option value="Panjabi">Panjabi</option>
                                <option value="Telugu">Telugu</option>
                                <option value="Kannada">Kannada</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Malayalam">Malayalam</option>
                                <option value="Bhojpuri">Bhojpuri</option>
                                <option value="Bengali">Bengali</option>
                                <option value="Urdu">Urdu</option>
                            </select>
                            <!-- <input type="text" name="language" placeholder="English"> -->

                            <label>Trailer Link</label>
                            <input type="text" name="trailer_link" placeholder="youtube link" required>

                            <label>Image Link</label>
                            <input type="text" name="image_link" placeholder="image link" required>


                            <label>Cinema Tag</label>
                            <select name="cinema_tags" required>
                                <option value=""> none </option>
                                <option value="Bollywood">Bollywood</option>
                                <option value="Hollywood">Hollywood</option>
                                <option value="Tollywood">Tollywood</option>
                                <option value="Kollywood">Kollywood</option>
                                <option value="Pollywood">Pollywood</option>
                                <option value="Mollywood">Mollywood</option>


                            </select>
                            <!-- <input type="text" name="language" placeholder="English"> -->






                        </div>

                        <div class="col-50">
                            <!-- <h3>Branch Info</h3> -->
                            <h2><br></h2>





                            <!-- <input type="text" name="language" placeholder="English"> -->

                            <label>Release date</label>
                            <input type="date" name="release_date" required>

                            <label>Duration</label>
                            <input type="time" name="duration" required>

                            <label>Genres</label>
                            <div class="row">
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Drama"> Drama
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Action"> Action

                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Comedy"> Comedy
                                </div>

                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Romance"> Romance
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Horror"> Horror
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Thriller"> Thriller

                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Adventure"> Adventure
                                </div>

                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Biography"> Biography
                                </div>

                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Crime"> Crime
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Sci-Fi"> Sci-Fi

                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="War"> War
                                </div>

                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Musical"> Musical
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Documentary"> Documentary
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Animation"> Animation

                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Sports"> Sports
                                </div>
                                <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Mystery"> Mystery
                                </div>

                            </div>


                        </div>
                    </div>

            </div>

            <input type="submit" value="Add Movie" class="btn">
            </form>
        </div>
    </div>
    </div>

</body>

</html>