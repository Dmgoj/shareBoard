<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">ShareBoard</a>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li >
        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li >
        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <?php require($view); ?>
  </div>
</div>

</body>
</html>