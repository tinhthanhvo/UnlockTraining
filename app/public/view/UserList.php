<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <?php
            if (isset($_SESSION['successRegister'])) {
                echo ("<div class='alert alert-success alert-dismissible fade show' role='alert'>" .
                    $_SESSION['successRegister'] .
                        "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>");
                unset($_SESSION['successRegister']);
            }
            if (isset($_SESSION['successLogin'])) {
                echo ("<div class='alert alert-success alert-dismissible fade show' role='alert'>" .
                    $_SESSION['successLogin'] .
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
                            <th scope="col">Full Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            include('../../http/utils/GetUserList.php');
                            $users = getUserList();
                        foreach ($users as $i => $user) {
                            echo "<tr>
                                        <th scope='row'>" . $i . "</th>
                                        <td>" . $user['fullName'] . "</td>
                                        <td>" . $user['username'] . "</td>
                                        <td>" . $user['email'] . "</td>
                                    </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <!-- End Tables without borders -->

                </div>
            </div>

        </div>
    </div>
</section>
