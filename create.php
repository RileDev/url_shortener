<?php 
    require_once "./inc/init.php";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["url"])){
        if(filter_var($_POST["url"], FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
            $url = filter_var($_POST["url"], FILTER_SANITIZE_URL);
            $code =  generateCode(8);
            if(!checkCodeIfExists($code)){
                addCodeToDB($code, $url);
                $_SESSION["code"] = $code;
            }
            
            redirect("index.php");
            exit(0);
        }
    }

    redirect("index.php");