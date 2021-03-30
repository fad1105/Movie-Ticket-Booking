<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    @if(session()->has('message'))
    <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
        <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
        <p>{{ session('message') }}</p>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
            <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
    @endif
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
            -ms-flex: 10%;
            /* IE10 */
            flex: 33%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }
        .col-100 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 100%;
            font-family: Arial;

            font-size: 30px;
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 20px;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75,
        .col-100 {
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

        input[type=checkbox] {
            margin-top: 15px;
            margin-right: 8px;
            margin-bottom: 15px;
            padding: 10px;

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
                        <div class="col-100">
                      <b> <h1>Movie Info</h1></b> 
                        </div>
                        <div class="col-50">

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
                                <!-- <div class="col-25">
                                    <input type="checkbox" name="genres[]" value="Mystery"> Mystery
                                </div> -->

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
</div>