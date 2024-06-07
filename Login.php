<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form id="loginForm">
            <div class="form-group">
              <label for="Uname">Username</label>
              <input type="text" class="form-control" id="Uname" name="Uname" required>
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" name="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        <div class="card-footer text-center">
          Don't have an account? <a href="SignUp.php">Sign Up here</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#loginForm').on('submit', function(event) {
      event.preventDefault(); // Prevent default form submission

      var formData = {
        Uname: $('#Uname').val(),
        Password: $('#Password').val(),
      };

      $.ajax({
        url: 'login_process.php', // Path to your PHP script
        type: 'POST',
        data: formData,
        success: function(response) {
          if (response.trim() === 'Login successful') {
            // Redirect to Home.php upon successful login
            window.location.href = 'Home.php';
          } else {
            alert('Invalid credentials'); // Handle failed login
          }
        },
        error: function() {
          alert('An error occurred during login');
        },
      });
    });
  });
</script>

</body>
</html>
