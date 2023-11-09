<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
  body{
    background-color: beige;
  }
</style>

<br><br>
<div class="text-center">
<div class="container">
  <h2>Spinners</h2>
  <p>To create a spinner/loader, use the <code>.spinner-border</code> class:</p>

  <div class="text-center">
  <div class="spinner-border text-danger"></div>
</div>
</div>
</div>
<br><br>


<div class="text-center">
  <div class="container">
    <h2>Growing Spinners</h2>
    <p>Use the <code>.spinner-grow</code> class if you want the spinner/loader to grow instead of "spin":</p>

    <div class="text-center">
    <div class="spinner-grow text-muted"></div>
    <div class="spinner-grow text-primary"></div>
    <div class="spinner-grow text-success"></div>
    <div class="spinner-grow text-info"></div>
    <div class="spinner-grow text-warning"></div>
    <div class="spinner-grow text-danger"></div>
    <div class="spinner-grow text-secondary"></div>
    <div class="spinner-grow text-dark"></div>
    <div class="spinner-grow text-light"></div>
    </div>
  </div>
</div>
<br><br>


<div class="text-center">
  <div class="container">
    <h2>Colored Spinners</h2>
    <p>Use any <strong>text color utilites</strong> to add a color to the spinner:</p>
    <div class="text-center">
    <div class="spinner-border text-muted"></div>
    <div class="spinner-border text-primary"></div>
    <div class="spinner-border text-success"></div>
    <div class="spinner-border text-info"></div>
    <div class="spinner-border text-warning"></div>
    <div class="spinner-border text-danger"></div>
    <div class="spinner-border text-secondary"></div>
    <div class="spinner-border text-dark"></div>
    <div class="spinner-border text-light"></div>
    </div>
  </div>
</div>
<br><br>


<div class="text-center">
  <div class="container">
    <h2>Spinner Buttons</h2>
    <p>Add spinners to buttons:</p>

    <button class="btn btn-danger">
      <span class="spinner-border spinner-border-sm"></span>
    </button>

    <button class="btn btn-primary">
      <span class="spinner-border spinner-border-sm"></span>
      Loading..
    </button>

    <button class="btn btn-dark" disabled>
      <span class="spinner-border spinner-border-sm"></span>
      Loading..
    </button>

    <button class="btn btn-outline-danger" disabled>
      <span class="spinner-grow spinner-grow-sm"></span>
      Loading..
    </button>
  </div>
</div>

</body>
</html>
