<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>

.container{
    width:40%;
    height: 250px;
}
#usrinput{
    margin-left:15%;
}
#btn{
    float:right;
    margin-right:70px;
    
}


</style>
<body>
    <div class="jumbotron text-center">
        <h1>𝐀𝐜𝐜𝐞𝐩𝐭𝐬 𝐔𝐬𝐞𝐫 𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐝 𝐀𝐝𝐝𝐬 𝐈𝐧𝐩𝐮𝐭 𝐚𝐬 𝐚𝐧 𝐎𝐩𝐭𝐢𝐨𝐧 𝐢𝐧 𝐭𝐡𝐞 𝐒𝐞𝐥𝐞𝐜𝐭 (𝐃𝐫𝐨𝐩𝐝𝐨𝐰𝐧) 𝐄𝐥𝐞𝐦𝐞𝐧𝐭</h1>
    </div>
    <div class="container p-3 my-3 bg-dark rounded text-white">
        <form action="" method="POST">
            <label>𝐈𝐧𝐩𝐮𝐭 𝐒𝐨𝐦𝐞𝐭𝐡𝐢𝐧𝐠: </label>
            <input type="text" name="userInput" class = "form-control w-50" id = "usrinput">
            <br>
            <br>
            <button type="submit" name="submit" class = "btn btn-primary" id = "btn">Add</button>
        </form>
    <?php
 
    session_start();

    class inputByUser{
 
        public $userInput;

        function __construct($userInput){

            $this->userInput = $userInput;

    }

    function addInput(){

        if(!isset($_SESSION['option'])){
            $_SESSION['option'] = [];
        }

        array_push($_SESSION['option'],$this->userInput);
        
        echo '<select name="dropdown" class = "form-control w-50">';
                
        foreach ($_SESSION['option'] as $value) {
            echo "<option value='".$value."'>$value</option>')";
        }
        
        echo '</select>';
              
    }

 }

    if(isset($_POST['submit'])){
        $userInput = $_POST['userInput'];
        $input = new inputByUser($userInput);
        $input->addInput();
    }


    ?>
    </div>
</body>
</html>

<?php
