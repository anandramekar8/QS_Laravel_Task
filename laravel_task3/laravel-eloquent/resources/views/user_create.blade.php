<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
  </head>
  <body>
      <div class="container">
          <a href="user_show">Back</a><br><br><br>
         
          <!-- Name, Email, Age, Password, Confirm Password. Address, City(dropdown), State(dropdown), Country(dropdown, from database), Pincode, image-->
<!-- id, user_id, age, address, city, state, country, pincode, image -->
          <form action="user_submit" method="post">
            @csrf
           <div class="container">
             <div class="form-group">
                  <label for="name" class="form-label">name</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="email" class="form-label">email</label>
                  <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="age" class="form-label">age</label>
                  <input type="number" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <div class="form-group">
                  <label for="address" class="form-label">address</label>
                  <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <br><br>
             <div class="dropdown">
               <button class="dropbtn">Select City</button>
                    <div class="dropdown-content">
                          <a href="#">pune</a>
                          <a href="#">mumbai</a>
                          <a href="#">banglore</a>
                    </div>
             </div>
             <br><br>
             <div class="dropdown">
               <button class="dropbtn">Select State</button>
                    <div class="dropdown-content">
                          <a href="#">maharashatra</a>
                          <a href="#">telangana</a>
                          <a href="#">karnataka</a>
                    </div>
             </div>
             <br><br>
             <div class="dropdown">
               <button class="dropbtn">Select Country</button>
                    <div class="dropdown-content">
                          <a href="#">India</a>
                          <a href="#">United Kingdom</a>
                          <a href="#">Ukrain</a>
                    </div>
             </div>
             <br><br>
             <div class="form-group">
                  <label for="pincode" class="form-label">pincode</label>
                  <input type="number" name="pincode" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <!-- <small id="helpId" class="text-muted">Help text</small> -->
             </div>
             <br><br>
             <div class="form-group">
                        <label for="">choose image :</label>
                       <input type="file" name="fileToUpload" id="fileToUpload">
                       <input type="submit" value="Upload Image" name="submit">
             </div>
             <br><br><br>
              <button class="btn btn-primary">
                  Submit
              </button>
            </div>
           </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>