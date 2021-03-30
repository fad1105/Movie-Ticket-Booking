<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
  @if(session()->has('message'))
  <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{show: true}" x-show="show">
    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
    </svg>
    <p>{{ session('message') }}</p>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
      <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <title>Close</title>
        <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
      </svg>
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
        -ms-flex: 75%;
        /* IE10 */
        flex: 75%;
      }

      .col-25,
      .col-50,
      .col-75 ,
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
    <div class="row">
      @if(session()->has('errors'))
      <div style="color: red"> {{$errors}}</div>
      @endif
    </div>

    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="" method="POST">
            @csrf

            <div class="row">
              
              <div class="col-50">
              <div class="col-50a"><b><h3>Branch Ower Info</h3></b></div>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" name="firstname" placeholder="John M. Doe" pincode>
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" name="email" placeholder="john@example.com" pincode>

                <input type="hidden" name="is_branch" value="1">


                <label for="cvv">Password</label>
                <input type="password" name="password1" placeholder="Password" pincode>

                <label for="cvv">Conform Password</label>
                <input type="password" name="password2" placeholder="Conform Password" required>


              </div>

              <div class="col-50">
                <div class="col-50a"><b><h3>Branch Info</h3></b></div>
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" name="city" placeholder="New York" pincode>

                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" name="address" placeholder="542 W. 15th Street" pincode>


                <label for="state">State</label>
                <input type="text" name="state" placeholder="NY" pincode>

                <label for="pincode">Pincode</label>
                <input type="text" name="pincode" placeholder="10001" required>
              </div>
            </div>

            <input type="submit" value="Create Branch" class="btn">
          </form>
        </div>
      </div>
    </div>

  </body>

  </html>
</div>