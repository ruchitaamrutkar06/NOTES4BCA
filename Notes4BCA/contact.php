<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con=mysqli_connect("localhost","root","","clg");
    if(!$con)
    {
        print("not connected");
    }
    $nm=$_REQUEST['nm'];
    $em=$_REQUEST['em'];
    $ph=$_REQUEST['ph'];
    $msg=$_REQUEST['msg'];
    $count=mysqli_query($con,"insert into getintouch values('$nm','$em','$ph','$msg')");
    if($count>=1)
    {
        print('your message send successfully');
        include('content.html');
    }
    mysqli_close($con);
    ?>
</body>
</html>