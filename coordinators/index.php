<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container my-5">
   
    <form action="" method="POST">
    <div class="row">
      <div class="col-sm-6">
    <div class="form-group" >
          <label for="firstname"> Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" id="name" name="name" required>
        </div>
        </div>
        </div>
<div class="row">
            <div class="col-sm-6">
        <div class="form-group">
        <label for="contact">Contact No.:</label>
        <input type="number" class="form-control" name="number" required>
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-6">
        <div class="form-group">
          <label for="category">Category:</label>
          <select class="form-control" placeholder="Enter Category" name="category">
        <option>Jewellery</option>
        <option>Mobile</option>
        <option>Cash</option>
        <option>Watch</option>
        </select>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
        <div class="form-group">
            <label for="address">Description:</label>
            <input type="textarea" placeholder="Description" name="Description" class="form-control" required>
</div>
</div>
</div>
<div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" class="form-control" name="date">
        </div>
          </div>
  