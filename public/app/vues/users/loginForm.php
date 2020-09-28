<?php
/*
./app/vues/users/loinForm.php
 */
?>
<div class="">
  <h2>Connexion au backoffice</h2>
  <form class="" action="users/login/submit" method="post">
  <div class="form-group">
    <label for="login">Email address</label>
    <input type="text" name="login" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login">
    <small id="loginHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
