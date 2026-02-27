<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Subject Information System - Add Subject</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container bg-primary" style="padding-left: 20px; padding-right: 20px">
      <h1 style="text-align: center; font-weight: 20px; padding-top: 10px">Subject Information System</h1>
      <hr>
      <ol class="breadcrumb bg-primary">
          <li><a href="home.html">Home</a></li>
          <li class="active">Add Subject</li>
          <li><a href="#">View Subjects</a></li>
      </ol>
      <hr>
      <h3 style="text-align: center; text-decoration: underline;">Add New Subject</h3>
      <br>
        <form class="form-horizontal">
            <div class="form-group">
            <label for="ccode" class="col-sm-2 control-label">Course Code:*</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="ccode" placeholder="Type the Course Code Here">
            </div>
            </div>
            
            <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Descriptive Title:*</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Type the Course Descriptive Title Here">
            </div>
            </div>

            <div class="form-group">
            <label for="units" class="col-sm-2 control-label">Number of Units:*</label>
            <div class="col-sm-10">
            <select class="form-control" name="units">
             <option>3</option>
             <option>2/1</option>
             <option>2</option>
             <option>6</option>
             </select>
            </div>
            </div>

            <div class="form-group">
            <label for="prereq" class="col-sm-2 control-label">Pre - requisite:</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="prereq" placeholder="Type the Pre - Requisitie Here">
            </div>
            </div>

            <br>
            <p style="color: beige; text-align: center;">Note: * - required fields</p>

            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add Subject</button>
            </div>
            </div>
        </form>
    </div>
    



  </body>
</html>