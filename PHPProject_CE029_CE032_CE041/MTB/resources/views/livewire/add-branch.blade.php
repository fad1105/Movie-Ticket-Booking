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
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
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
            <h3>Branch Ower Info</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  name="firstname" placeholder="John M. Doe" pincode>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" placeholder="john@example.com" pincode>
            
            <input type="hidden"  name="is_branch" value="1">


            <label for="cvv">Password</label>
                <input type="password"  name="password1" placeholder="Password" pincode>

                <label for="cvv">Conform Password</label>
                <input type="password"  name="password2" placeholder="Conform Password" required>

            
          </div>

          <div class="col-50">
            <h3>Branch Info</h3>
            
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text"  name="city" placeholder="New York" pincode>
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="address" placeholder="542 W. 15th Street" pincode>
            
            
            <label for="state">State</label>
            <input type="text" name="state" placeholder="NY" pincode>
            
            <label for="pincode">Pincode</label>
                <input type="text"  name="pincode" placeholder="10001" required>
                
           
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Create Branch" class="btn">
      </form>
    </div>
  </div>
  </div>

</body>
</html>
