<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validity</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<style>
.btn{
    float:right;
    margin-right:5%;
}
.container{
    height:200px;
    width:40%;

}

</style>
<body>
    <div class="jumbotron text-center">
    <h1>𝐔𝐬𝐞𝐫 𝐈𝐧𝐩𝐮𝐭 𝐄𝐦𝐚𝐢𝐥 𝐀𝐝𝐝𝐫𝐞𝐬𝐬 𝐕𝐚𝐥𝐢𝐝𝐢𝐭𝐲</h1>
    </div>
    <div class="container p-3 my-3 rounded bg-primary text-white">
        <form method="post">
            <label><h4>𝐄𝐦𝐚𝐢𝐥: </h4></label>
            <input type="text" name="email" class = "form-control w-75" id = "emailAdd" placeholder = "Enter your Email Address...">
            <br>
            <br>
            <button type="submit" name="submit" class = "btn btn-dark">Submit</button>
        </form>

    <?php

    class Validate{
        public $email;

        function __construct($email){
        $this->email = $email;
        }

        
        function check(){

            if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                echo '<script language="javascript" type="text/javascript"> 
                    alert("The said email is a valid email address");
                </script>';
            } 
            else {
                echo '<script language="javascript" type="text/javascript"> 
                    alert("The said email is not a valid email address");
                </script>';
            }
        }
    }   

    if(isset($_POST['submit'])){
        $userInput = $_POST['email'];
        $input = new Validate($userInput);
        $input->check();
    }

    ?>
</body>
</html>
