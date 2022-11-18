    <!-- ********** footer start ********** -->
    <footer>
        <div class="scrolltop float-right">
            <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
        </div>
        <hr>
        <p class="footer p-3 text-center">
            @GovindBajajProduction
        </p>
        <div class="container">
            <div class="text-center center-block">
                <a href="https://www.facebook.com/profile.php?id=100009144479546"><i id="social-fb" class="fa fa-facebook fa-3x social"></i></a>
                <a href="https://wa.me//917688974744"><i id="social-tw" class="fa fa-whatsapp fa-3x social px-2"></i></a>
                <a href="https://www.instagram.com/_govind.bajaj_/"><i id="social-em" class="fa fa-instagram fa-3x social pr-2"></i></a>
                <a href="https://www.linkedin.com/in/govind-bajaj-7531b5182/"><i id="social-gp" class="fa fa-linkedin fa-3x social"></i></a>
            </div>
            <hr>
        </div>
    </footer>
    <!-- ********** footer end ********** -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            scrollfunction()
        };

        function scrollfunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>