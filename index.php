<?php 
    require_once "./inc/init.php";

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["code"])){
        $code = $_GET["code"];
        $url = getSite($code);
        if(!$url){
            echo '
            <div class="container mt-3">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check url code bro plz dont mess with fbi bro plz no no :(.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            ';
        }
        redirect($url);
        unset($_GET);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .message{
            margin: 0 auto;
        }
    </style>
</head>

<body class="bg-dark text-white">
    
    <main class="container">
        <div class="card text-center mt-5">
            <h1 class="py-3">Best URL Shortener</h1>
            <section class="container">
                <p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi at aut ducimus vitae enim excepturi blanditiis repellat consequatur sunt molestias, facilis sequi voluptatibus, laboriosam incidunt eius culpa veniam fugiat?</p>
                <form action="create.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Url</span>
                        <input type="text" name="url" class="form-control" placeholder="URL Link Address" aria-label="URL Link Address" aria-describedby="basic-addon1" required>
                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Short</button>
                    </div>
                </form>
            </section>
            
        </div>
         
        <?php if(isset($_SESSION['code'])) : ?>
        <div class="card my-5 py-3">
            <?php $url = $_SERVER["REQUEST_URI"] . "/?code=" . $_SESSION['code'];  ?>
            <div class="input-group mb-3 w-75 message">
                <input type="text" name="url" class="form-control" value="<?= $_SERVER["SERVER_NAME"] . $url ?>" aria-label="<?= $url ?>" aria-describedby="basic-addon1" disabled>
                <a class="btn btn-outline-primary" id="button-addon2" href=<?= $url ?> target="_blank">Open</a>
            </div>
            <?php unset($_SESSION["code"]) ?>
        </div>
        <?php endif; ?>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>