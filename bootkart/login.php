<?php include 'templates/header.php' ?>
 <div class="container">
    <h1 class="text-center">Log In</h1>
    
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username">
     </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <button onclick="login()" type="submit" class="btn btn-primary">Log In</button>


 </div>

<?php include 'templates/footer.php' ?>