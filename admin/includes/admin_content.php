<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin Page
                <small>Subheading</small>
            </h1>

            <?php
                
                // $result_set = User::find_all_users();
                // echo "find_all_users query" . "<br>";
                // while($row = mysqli_fetch_array($result_set)) {
                //     echo "username: " . $row["username"] . ", first_name: " . $row["first_name"] . ", last_name: " . $row["last_name"] . "<br>";
                // }
                // echo "<br>";

                // echo "find_one_user by id" . "<br>";
                // $found_user = User::find_user_by_id(2);

                // $user = User::instantiation($found_user);

                // echo $user->id;
            ?>

            <?php

            echo "find_all_users <br>";
            $users = User::find_all_users();
            foreach($users as $user) {
                echo $user->username . "<br>";
            }

                // echo "find_user_by_id" . "<br>";
                // $the_user = User::find_user_by_id(1);
                // echo $the_user->id . " " . $the_user->username;

            ?>

            <?php

            // CRUD - create user
            // $newUser = new User();
            // $newUser->username = "cj";
            // $newUser->password = "pass";
            // $newUser->first_name = "Carl";
            // $newUser->last_name = "Johnson";
            // $newUser->create();

            // CRUD - update user
            // $user = User::find_user_by_id(1);
            // $user->last_name = "Gibbs";
            // $user->update();

            //CRUD - delete user
            // $user = User::find_user_by_id(7);
            // $user->delete();
            
            
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