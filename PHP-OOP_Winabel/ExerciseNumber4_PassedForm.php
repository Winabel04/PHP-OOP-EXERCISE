<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>

<style>

.container{
    width:100%;
	margin-left:40%;
    margin-top:10%;
	max-width:525px;
	min-height:600px;
	position:relative;
    
}


</style>
<body class = "bg-secondary">
    <div class="jumbotron text-center">
    <h1>𝐏𝐚𝐬𝐬𝐞𝐝 𝐅𝐨𝐫𝐦</h1>
    </div>
    <div class="container">
        <form method = "POST">
        <div class="form-group">
            <label><h4>Name:</h4></label>
            <input type="text" class="form-control w-50" id="name" placeholder="Enter your name..." name="name">
        </div>
        <div class="form-group">
            <label><h4>Address:</h4></label>
            <input type="text" class="form-control w-50" id="name" placeholder="Enter your name..." name="address">
        </div>
        <div class="form-group">
            <label><h4>Age:</h4></label>
            <input type="number" class="form-control w-50" id="name" placeholder="Enter your name..." name="age">
        </div>
        <div class="form-group">
            <label><h4>Contact Number:</h4></label>
            <input type="number" class="form-control w-50" id="name" placeholder="Enter your name..." name="contactNum">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>   
    <center>
    
    <div class="card" style="margin:10px; width:50%; ;">
        <div class="card-header text-center"><h4>Data From the User Input</h4></div>
        <div class="card-body">
        <h5>
        <?php
        class passedForm{
                public $name;
                public $address;
                public $age;
                public $contactNum;

                public function check(){
                    if(isset($_POST['submit'])){
                        $name=$_POST['name'];
                        $address=$_POST['address'];
                        $age=$_POST['age'];
                        $contactNum=$_POST['contactNum'];
                        if(!empty($name) && (!empty($address)) && (!empty($age)) && (!empty($contactNum))){
                            echo "Username: ".$name;
                            echo "<br>Address: ".$address;
                            echo "<br>Age: ".$age;
                            echo "<br>Contact Number: ".$contactNum;
                        } 
                    }
                }
            } 
            $form=new passedForm();
            $form->check();       

            ?>
        </h5>    
    </div>
    </center>
</body>
</html>