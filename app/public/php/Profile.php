<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <?php
                if(isset($_SESSION['successRegister'])){
                    echo ("<div class='alert alert-success alert-dismissible fade show' role='alert'>".
                        $_SESSION['successRegister'].
                            "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>");
                    unset($_SESSION['successRegister']);
                }
                if(isset($_SESSION['successLogin'])){
                    echo ("<div class='alert alert-success alert-dismissible fade show' role='alert'>".
                        $_SESSION['successLogin'].
                        "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>");
                    unset($_SESSION['successLogin']);
                }
            ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tables without borders</h5>
                    <p>Add <code>.table-borderless</code> for a table without borders.</p>
                    <!-- Active Table -->
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Position</th>
                            <th scope="col">Age</th>
                            <th scope="col">Start Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Bridie Kessler</td>
                            <td>Developer</td>
                            <td>35</td>
                            <td>2014-12-05</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ashleigh Langosh</td>
                            <td>Finance</td>
                            <td>45</td>
                            <td>2011-08-12</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Angus Grady</td>
                            <td>HR</td>
                            <td>34</td>
                            <td>2012-06-11</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Raheem Lehner</td>
                            <td>Dynamic Division Officer</td>
                            <td>47</td>
                            <td>2011-04-19</td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- End Tables without borders -->

                </div>
            </div>

        </div>
    </div>
</section>
