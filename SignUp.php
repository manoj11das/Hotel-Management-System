<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Sign Up</div>
        <div class="card-body">
          <form id="signupForm" action="post">
            <div class="form-group">
              <label for="Fname">First Name</label>
              <input type="text" class="form-control" id="Fname" name="Fname" required>
            </div>
            <div class="form-group">
              <label for="Lname">Last Name</label>
              <input type="text" class="form-control" id="Lname" name="Lname" required>
            </div>
            <div class="form-group">
              <label for="Uname">Username</label>
              <input type="text" class="form-control" id="Uname" name="Uname" required>
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" name="Password" required>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth</label>
              <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
        <div class="card-footer text-center">
          Already have an account? <a href="Login.php">Login here</a> <!-- Link to the login page -->
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#signupForm').on('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      var formData = {
        Fname: $('#Fname').val(),
        Lname: $('#Lname').val(),
        Uname: $('#Uname').val(),
        Password: $('#Password').val(),
        dob: $('#dob').val(),
      };

      $.ajax({
        url: 'signup_process.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          alert('Signup successful');
        },
        error: function(error) {
          alert('Error during signup');
        },
      });
    });
  });
</script>.php

</body>
</html>
