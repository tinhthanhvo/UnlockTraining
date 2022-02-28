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
                    <h5 class="card-title">User List</h5>
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
                            include('../http/utils/GetUserList.php');
                            $users = getUserList();
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($users)) {
                                echo "<tr>
                                    <td>$i</td>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['username'] . "</td>
                                    <td>" . $row['email'] . "</td>
                                </tr>";
                                $i++;
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
