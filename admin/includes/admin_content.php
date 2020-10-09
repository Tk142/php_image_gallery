<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Page
                <small>Subheading</small>
            </h1>

            <?php
                
                $result_set = User::find_all_users();
                echo "find_all_users query" . "<br>";
                while($row = mysqli_fetch_array($result_set)) {
                    echo "username: " . $row["username"] . ", first_name: " . $row["first_name"] . ", last_name: " . $row["last_name"] . "<br>";
                }
                echo "<br>";

                echo "find_one_user by id" . "<br>";
                $found_user = User::find_user_by_id(2);

                $user = User::instantiation($found_user);

                echo $user->id;
            ?>


            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->