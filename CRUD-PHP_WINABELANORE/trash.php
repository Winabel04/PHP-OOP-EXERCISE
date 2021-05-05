<?php
include 'function2.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<style>
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}

table.table tr th:first-child {
    width: 160px;
}

#action{
    /* float:right; */
    margin-left:500px;
}
/* #restore{
    float:right;
} */

</style>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="30" height="30" alt="logo">
    Work Plan Done
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="logo2.png" width="40" height="40" class="rounded-circle"> List - IT! Do IT!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="create.php"><i class="fa fa-sticky-note-o" style="font-size:30px"></i>  Create</a>
          <a class="dropdown-item" href="index.php"><i class="fa fa-edit" style="font-size:30px"></i>  Update</a>
          <a class="dropdown-item" href="index.php"><i class="fa fa-eraser" style="font-size:30px;"></i>  Delete</a>
          <a class="dropdown-item" href="index.php"><i class="fa fa-undo" style="font-size:30px;"></i>  Retrieve</a>
          <a class="dropdown-item" href="trash.php"><i class="fa fa-trash" style="font-size:30px;"></i> Trash</a>
        </div>
      </li> 
      <li class = "home m-2" id = "home"><a class="nav-link" href="index.php">Home</a></li>  
    </ul>
  </div>
  <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
    <div class="header_search">
      <div class="header_search_content">
        <div class="header_search_form_container">
          <form class="header_search_form clearfix"> 
            <input type="search" required="required" class="header_search_input rounded-lg " style = "padding:5px; float:right;" placeholder="Search for to do list...">
            <div class="custom_dropdown" style="display: none;">
            </div> 
              <button type="submit" class="header_search_button rounded-lg" value="Submit" style = " float:right; margin-right: 5px; margin-top:5px;">
                <a href="#"><i class="fa fa-search" style="font-size:20px;color:black;"></i></a>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>


<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Deleted Data </h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-primary add-new"><a href = "create.php" style="text-decoration:none; color:white;"><i class="fa fa-plus"></i> Add New</a></button>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th class = "w-75">List</th>
                        <th colspan ="2" >Actions</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $conn = new mysqli ("localhost", "root", "", "to-do-list");
                        $result = $conn->query("SELECT * FROM trash");
                        while ($getData = $result->fetch_assoc()):
                    ?>
                        <tr>
                        <!-- <td><input type="checkbox" id = "checkbox" name = "checkbox" class = "checkbox"></td> -->
                        <td><?php echo $getData['list-to-do']?></td>
                        <td ><a type = "submit" name = "restore" href = "trash.php?restore=<?php echo $getData['id'] ?>"><i class='fa fa-window-restore' style='font-size:16px;color:blue'></i></a></td>
                        <td><a type = "submit" name = "delete" href = "trash.php?deleteTask=<?php echo $getData['id'] ?>"><i class='fa fa-trash-o' style='font-size:16px;color:red'></i></a></td>
                        </tr>         
                    <?php
                    endwhile;
                    ?>     
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>