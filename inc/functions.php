<?php

function redirect($location){
    header("location: $location");
}

function generateCode($length){
    $code = "";
    $chars = [ 'q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', 'Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P', 'A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'Z', 'X', 'C', 'V', 'B', 'N', 'M', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' ];

    for($i = 0; $i < $length; $i++){
        $code .= $chars[rand(0, count($chars) - 1)];
    }


    return $code;
}

function addCodeToDB($code, $url){
    global $conn;
    $sql = "INSERT INTO `sites`(`code`, `url`) VALUES (?, ?)";
    $run = $conn->prepare($sql);
    $run->bind_param("ss", $code, $url);
    $run->execute();
    $conn->close();
}

function checkCodeIfExists($code){
    global $conn;
    mysqli_escape_string($conn, $code);
    $sql = "SELECT * FROM `sites` WHERE code = '$code'";
    $run = $conn->query($sql);
    $result = ($run->num_rows) ? true : false;
    return $result;
}

function getSite($code){
    global $conn;
    $url = "";
    $sql = "SELECT * FROM `sites` WHERE code = ?";
    $run = $conn->prepare($sql);
    $run->bind_param("s", $code);
    $run->execute();
    $result = $run->get_result();
    if($result->num_rows){
        $url = $result->fetch_assoc()["url"];
    }else{
        return false;
    }
    $conn->close();
    return $url;
}