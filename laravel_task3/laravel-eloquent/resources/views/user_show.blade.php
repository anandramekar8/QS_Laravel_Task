<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <!-- Name, Email, Phone, Age, Password, Confirm Password. Address, City(dropdown), State(dropdown), Country(dropdown, from database), Pincode, image with preview -->
      <div class="container">
          <a href="user_create">Add Record</a><br><br><br>
          {{session('msg')}}
          <br><br>
          <table class="table">
              <tr>
                  <td>id</td>
                  <td>name</td>
                  <td>email</td>
                  <td>age</td>
                  <td>user_id</td>
                  <td>address</td>
                  <td>phone</td>
                  <td>city</td>
                  <td>state</td>
                  <td>country</td>
                  <td>pincode</td>
                  <td>image</td>
              </tr>
          </table>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>