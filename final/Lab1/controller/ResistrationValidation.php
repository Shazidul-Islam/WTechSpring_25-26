<?php 

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$nameV=false;
$emailV=false;
$genderV=false;

$datafile="../data.json";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $website = $_POST["Website"];
    $comment = $_POST["Comment"];
    $gender = $_POST["Gender"];

    $name = $_REQUEST["Name"];
    $email = $_REQUEST["Email"];
    $website = $_REQUEST["Website"];
    $comment = $_REQUEST["Comment"];
    $gender = $_REQUEST["Gender"];


    if(empty($name))
    {
        echo "Name is required </br>";
    }
    elseif (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        echo "Name can only contain letter and white space</br>";
    }
    elseif(!empty($name) && strlen($name)>3){
        echo "Name: ".$name ."</br>";
        $nameV=true;

    }
    else{
        echo "Name should contain more than 3 char</br>";
    }


    if (empty($email)) {
        echo "Email is required </br>";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format </br>";
    }
    elseif(!empty($email)){
        echo "Email: ".$email ."</br>";
        $emailV=true;
    }


    if (empty($website)) {
        $website = "";
    } 
    elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
    }
    elseif(!empty($website)){
        echo "Website: ".$website ."</br>";
    }


    //gender validation
    if (isset($gender) && $gender=="female"){
        echo "Gender: ".$gender ."</br>";
        $genderV=true;
    }
    elseif (isset($gender) && $gender=="male"){
        echo "Gender: ".$gender ."</br>";
        $genderV=true;
    }
    else{
        echo "Please select a gender </br>";
    }
    

    //echo comment
    if(!empty($comment)){
        echo "Comment: ".$comment ."</br>";
    }

    if($nameV&&$emailV&&$genderV)
        {
                $formdata = array("Name"=>$name, "Email"=>$email, "Gender"=>$gender);

                if(file_exists($datafile))
                    {
                        $existdata = file_get_contents($datafile);
                        $tempdata = json_decode($existdata, true);
                    }
                    else{
                        $tempdata = array();
                    }

                    if(!is_array($tempdata))
                        {
                            $tempdata = array(); 
                        }
                    $tempdata [] = $formdata;
                    $jsondata = json_encode($tempdata, JSON_PRETTY_PRINT);
                if(file_put_contents($datafile,$jsondata)!== false)
                    {
                        echo "Data Saved";
                    }
                    else{
                        echo "Please Try Again";
                    }
                $data = file_get_contents($datafile);
                $mydata = json_decode($data);
            }
            else
            {
                echo "Please try again!";
            }
}

?>