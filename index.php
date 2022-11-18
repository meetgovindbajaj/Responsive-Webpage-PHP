<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ALPHA PROJECT 5</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php';?>
    <!-- ********** carousel start ********** -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  src="./images/img1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="./images/img7.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img  src="./images/img10.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- ********** carousel end ********** -->
    <!-- ********** about start ********** -->
    <section class="my-5" ondblclick="window.open('./about.php', '_blank')">
        <div class="py-5">
            <h2 class="text-center">
                About Us
            </h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img  class="img-fluid aboutimg" src="./images/img15.jpg" alt="image" style="border-radius: 15px !important;cursor: pointer;">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">
                        Govind Bajaj
                    </h2>
                    <p class="py-3">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto sit doloremque dolor accusamus
                        iure nesciunt amet
                        blanditiis quo ratione quam ab alias, porro culpa a inventore aperiam necessit vero quibusdam.
                    </p>
                    <a class="btn btn-info" target="_blank" href="./about.php">read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ********** about end ********** -->
    <!-- ********** service start ********** -->
    <section class="my-5 service" id="serviceid">
        <div class="py-3">
            <h2 class="text-center">
                Our Services
            </h2>
        </div>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <div class="card">
                        <img  class="card-img-top" src="./images/img16.jpg" alt="Card image cap" style="width:100%;height: 300px; ">
                        <div class="card-body">
                            <h5 class="card-title">Website Development</h5>
                            <p class="card-text px-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla atque repellendus
                                nostrum totam laborum reiciendis velit.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <div class="card">
                        <img  class="card-img-top" src="./images/img12.jpg" alt="Card image cap" style="width:100%;height: 300px; ">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text px-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla atque repellendus
                                nostrum totam laborum reiciendis velit.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <div class="card">
                        <img  class="card-img-top" src="./images/img14.jpg" alt="Card image cap" style="width:100%;height: 300px; ">
                        <div class="card-body">
                            <h5 class="card-title">Support</h5>
                            <p class="card-text px-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla atque repellendus
                                nostrum totam laborum reiciendis velit.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ********** service end ********** -->
    <!-- ********** gallery start ********** -->
    <section class="my-5 gallery" id="galleryid">
        <div class="py-3">
            <h2 class="text-center">
                Gallery
            </h2>
        </div>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('images/img1.jpg', '_blank')" src="./images/img1.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img2.jpg','_blank')" src="./images/img2.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img3.jpg','_blank')" src="./images/img3.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img4.jpg','_blank')" src="./images/img4.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img5.jpg','_blank')" src="./images/img5.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img6.jpg','_blank')" src="./images/img6.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img7.jpg','_blank')" src="./images/img7.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img8.jpg','_blank')" src="./images/img8.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
                <div class="col-lg-4 col-md-4 col-10 offset-lg-0 offset-md-0 offset-1">
                    <img  class="img-fluid my-4" ondblclick="window.open('./images/img10.jpg','_blank')" src="./images/img10.jpg" alt="image" style="height: 300px; border-radius: 20px;">
                </div>
            </div>
        </div>
    </section>
    <!-- ********** gallery end ********** -->
    <!-- ********** contact start ********** -->
    <section class="my-5 pt-5" id="contactid">
        <div class="py-3">
            <h2 class="text-center">
                Contact Us
            </h2>
        </div>
        <div class="w-50 m-auto text-center">
            <form action="./userinfo.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control text-center" type="text" name="user" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Id</label>
                    <input class="form-control text-center" type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Mobile No.</label>
                    <input class="form-control text-center" type="tel" name="mobile" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <textarea class="form-control text-center" rows="5" type="text" id="comment" name="comment" required></textarea>
                </div>
                <button class="btn btn-success w-100 m-auto">Submit</button>
            </form>
        </div>
    </section>
    <!-- ********** contact end ********** -->
    <?php include 'footer.php';?>
</body>

</html>