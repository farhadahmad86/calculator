<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- ======= Top Bar ======= -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Login</h2>
      </div>
    </div>


    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-12 mt-5 mt-lg-0">
    <form action="submit.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required class="form-control">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required class="form-control">
        <button type="submit" class="btn btn-success mt-2">Login</button>
    </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
