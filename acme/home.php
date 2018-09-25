<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/screen.css"/>
        <title>Home | ACME, Inc.</title>
    </head>
    <body>
        
        <header>
            <a href="/" title="Visit the ACME home page for more great roadrunner catching products.">
                <img src="/acme/images/site/logo.gif" alt="ACME Roadrunner catching products for coyotes who want to eat.">
            </a>
        </header>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/acme/common/nav.php'; ?>

        <main>
            <h1>Content Title Here</h1>
            <p>Copy...</p>
        </main>
        
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/acme/common/footer.php'; ?>
            <p>Last updated: <?php echo date('j F, Y', getlastmod()) ?></p>
        </footer>
        
    </body>
</html>
