<div class="pagetitle">
    <h1>Exercise 2 - Saving Cookie</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item">Cookie Exercise </li>
        </ol>
    </nav>
</div>
<section class="section">
    <form method="post" action="/?pageName=cookie">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <input class="form-check-input" type="radio" name="myFavoriteImage" value="img1"
                                <?= (isset($_COOKIE['myFavoriteImage']) && $_COOKIE['myFavoriteImage'] == "img1") ? 'checked' : ''; ?>
                            >
                        </h5>
                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./template/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <input class="form-check-input" type="radio" name="myFavoriteImage" value="img2"
                                <?= (isset($_COOKIE['myFavoriteImage']) && $_COOKIE['myFavoriteImage'] == "img2") ? 'checked' : ''; ?>
                            >
                        </h5>
                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./template/assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <input class="form-check-input" type="radio" name="myFavoriteImage" value="img3"
                                <?= (isset($_COOKIE['myFavoriteImage']) && $_COOKIE['myFavoriteImage'] == "img3") ? 'checked' : ''; ?>
                            >
                        </h5>
                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./template/assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <input class="form-check-input" type="radio" name="myFavoriteImage" value="img4"
                                <?= (isset($_COOKIE['myFavoriteImage']) && $_COOKIE['myFavoriteImage'] == "img4") ? 'checked' : ''; ?>
                            >
                        </h5>

                        <div class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./template/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-2">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </div>
    </form>
</section>
