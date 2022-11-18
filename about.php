<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php';?>
    <div class="jumbotron">
        <h1>GOVIND BAJAJ</h1>
        <p>We Are The Web Developers. We Have The Power To Create The Internet.</p>
    </div>
    <section class="my-5" ondblclick="window.location.href=('./about.php')">
        <div class="py-5">
            <h2 class="text-center">
                About Us
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid aboutimg" src="./images/img15.jpg" alt="image" style="border-radius: 15px !important;cursor: pointer;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">
                        Lorem ipsum
                    </h2>
                    <p class="py-3">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim, doloremque! Quod delectus asperiores consequatur, recusandae doloribus nisi labore, nostrum voluptatum itaque dolorum omnis libero, repellat repellendus magni maxime cumque sapiente.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
</body>

</html>