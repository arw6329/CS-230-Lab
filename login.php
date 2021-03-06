<?php require 'includes/header.php'; ?>

<main>
    <link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/c1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/c2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/c3.webp" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <script>
                // fix img heights
                document.querySelectorAll('img').forEach(elem => elem.addEventListener('load', function() {
                    let maxHeight = 0;
                    document.querySelectorAll('img').forEach(elem => maxHeight = Math.max(elem.scrollHeight, maxHeight));
                    document.querySelectorAll('img').forEach(elem => elem.style.height = maxHeight + 'px');
                }));
                </script>
            </div>
        </div>
        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="POST">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <p class="hint-text">Log in to your account!</p>
                    <input type="text" class="form-control" name="uname-email" placeholder="Username / Email" required
                        autofocus>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password"
                        required>

                    <button class="btn btn-lg btn-outline-danger btn-block" name="login-submit" type="submit">Sign
                        in</button>
                </form>
            </div>
        </div>
    </div>
</main>