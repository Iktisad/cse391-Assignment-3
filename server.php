<?php
$dbServername = "localhost";
//$dbUsername = "id10954758_ashiqurrah7";
//$dbPassword = "dbpassword";
//$dbName= "id10954758_testdb";



$conn = mysqli_connect($dbServername, 'root', '', 'test');

$name="";
$fName="";
$sid="";
$email="";
$timing="";

function validate(){
    if($_POST['name']=="" || $_POST['fName']=="" || $_POST['sid']=="" || $_POST['email']==""){
        echo "<script>alert('Please enter all fields');</script>";
        return false;
    }else{
        global $name, $fName, $sid, $email, $timing;
        $name = htmlentities($_POST['name']);
        $fName = htmlentities($_POST['fName']);
        $sid = htmlentities($_POST['sid']);
        $email = htmlentities($_POST['email']);
        $timing = htmlentities($_POST['Options']);
        return true;
    }
}

if(isset($_POST['register'])){
    
    if(validate()){
    $duplicate="SELECT * FROM Students WHERE sid LIKE '$sid%' AND Timing LIKE '$timing%';";
    $insert = "INSERT INTO Students (SID, Name, FirstName, Email, Timing) VALUES ('$sid','$name','$fName','$email', '$timing');";
    $dresult=$conn->query($duplicate);
    if ($dresult->num_rows > 0) {
        echo "<script>alert('Already registered! If you want to change timing, select registered time and plress clear.')</script>";
    }else{
        if(checkLimit($timing)>7){
            echo "<script>alert('Seat limit reached on this slot. Please try different slot.')</script>";
        }else{
        $result=$conn->query($insert);
        echo "<script>alert('Successfully registered.')</script>";
        }
    }
}
}else if(isset($_POST['clear'])){
    if(validate()){
    
    $check= "SELECT * FROM Students WHERE sid='$sid' AND Timing='$timing';";
    $clear =  "DELETE FROM Students WHERE sid='$sid' AND Timing='$timing';";
    $checkresult=$conn->query($check);
    if ($checkresult->num_rows > 0) {
        $delete=$conn->query($clear);
        echo "<script>alert('Successfully deleted.')</script>";
    }else{
        echo "<script>alert('Not found')</script>";
    }
}
}else{


}
function seats($day){
    global $conn;
    $sql="SELECT COUNT(ID) FROM Students WHERE Timing = '$day' ";
    $sResult=$conn->query($sql);
    $seatStatus=mysqli_fetch_array($sResult,MYSQLI_NUM);
    echo 8-$seatStatus[0];
}

function checkLimit($day){
    global $conn;
    $sql="SELECT COUNT(ID) FROM Students WHERE Timing = '$day' ";
    $sResult=$conn->query($sql);
    $seatStatus=mysqli_fetch_array($sResult,MYSQLI_NUM);
    return $seatStatus[0];
}

?>