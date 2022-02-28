<div class="pagetitle">
    <h1>Exercise 3 - Drawing Rectangle Shape</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Drawing Shape</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Input Parameter of Shape Form</h5>

                    <form class="row g-3" method="post" action="../../http/controller/DrawingShape.php">
                        <div class="col-12">
                            <label for="width" class="form-label">Width</label>
                            <input type="number" class="form-control" id="width" name="width">
                        </div>
                        <div class="col-12">
                            <label for="height" class="form-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>

        </div>
    </div>
</section>
