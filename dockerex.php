

<html>
    <head>
    
</head>
<body>

<p><h3> <center>Creation d'image Docker</center> </h3> </p>

<?php
$dockerfile ="FROM php:7.2-apache \nRUN apt-get update \   \n&& apt-get install -y git \ \n&& git clone " . $_POST['link'] . "\nRUN docker-php-ext-install mysqli pdo_mysql \nRUN mkdir medibed\nRUN cp -r ./PHP-MySQL-CRUD-Web-Application/* medibed/ \nRUN rm -rf ./PHP-MySQL-CRUD-Web-Application/";

?>
<?php       
            file_put_contents('Dockerfile', $dockerfile);
            echo shell_exec('docker build -t abdellatifsenhajifromweb/' . $_POST['img'] . ' .  2>&1' );      
            
           // echo shell_exec('docker push abdellatifsenhajifromweb/'.$_POST['img'] . '   2>&1' );   
        ?>

</body>
    </html>
