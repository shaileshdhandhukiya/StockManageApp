<?php
    include('inc/config.php');
    #include('inc/session_check.php');     
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Header include start --->
    <?php include('inc/header.php'); ?>
    <!-- Header include End --->

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

    <script type="text/javascript">
    $(function() {
        $('#alertMessage').delay(2000).fadeOut();
    });
    </script>

    <?php

        if(isset($_POST['admin_submit']))
        {
            $admin_name=    $_POST['admin_name'];
            $admin_pass=    $_POST['admin_password'];
            $admin_email=   $_POST['email'];
            $admin_contact= $_POST['contact_no'];
           // $profile_image=   $_POST['profile_image'];        

            $last_update_date = date("d-m-Y h:i:s a");

         
            $validation_check="SELECT * FROM admin where admin_email='$admin_email'";

            $res_check= $conn->query($validation_check);
        
            while($row = $res_check->fetch_object())
            {
              $already_email= $row->admin_email;
            }
        
            if($already_email==$admin_email)
            {
              
              echo"<script> alert('Already Exits');</script>";
            }
            else
            {
                if(($_FILES["profile_image"]["type"] == "image/jpg") || ($_FILES["profile_image"]["type"] == "image/jpeg") || ($_FILES["profile_image"]["type"] == "image/png"))
                {
                    $profile_image=time().$_FILES["profile_image"]["name"];
    
                    move_uploaded_file($_FILES["profile_image"]["tmp_name"],"upload/admin/".$profile_image);
                }
        
               # $query="update admin set admin_name='$admin_name',admin_password='$admin_pass',admin_email='$admin_email',contact_no='$admin_contact',admin_image='$profile_image',last_updated='$last_update_date' where admin_id=1";
                
                $sql="UPDATE admin SET admin_name='$admin_name',admin_phone='$admin_contact',admin_email='$admin_email',admin_password='$admin_pass',
                admin_image='$profile_image',last_update='$last_update_date'";
                $conn->query($sql);
                
                echo"<script> alert('Admin Update Successfull');</script>"; 
              
            }
        }       

?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">

            <!-- Header include start --->
            <?php include('inc/topbar.php'); ?>
            <!-- Header include End --->

        </div>
        <div class="ui-theme-settings">
            <!-- theme setting include start --->
            <?php include('inc/theme_settings.php'); ?>
            <!-- theme setting include End --->
        </div>
        <div class="app-main">

            <!-- sidebar include start --->
            <?php include('inc/sidebar.php') ?>
            <!-- sidebar include End --->

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Admin Profile
                                    <div class="page-title-subheading">Manage Admin Account
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip"
                                    data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <i class="fa fa-star"></i>
                                </button>
                                <div class="d-inline-block dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">

                                            <i class="fas fa-plus-circle fa-w-20"></i>
                                        </span>
                                        Add
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu-right">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href=" " class="nav-link">
                                                    <i class="nav-link-icon lnr-inbox"></i>
                                                    <span>
                                                        Invoice Genrate
                                                    </span>
                                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="add_client.php" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Add Client
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">
                                                    <i class="nav-link-icon lnr-picture"></i>
                                                    <span>
                                                        View Transection
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                     $sql="select * from admin";
                     $res=$conn->query($sql);
                     while ($row=$res->fetch_object())
                     {                   

                    ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Admin Profile Manage</h5>

                                    <form action="" method="post" class="needs-validation" enctype="multipart/form-data"
                                        novalidate>

                                        <div class="form-row">

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Name</label>
                                                <input type="text" class="form-control" name="admin_name"
                                                    id="validationCustom01" placeholder="Name"
                                                    value="<?php echo $row->admin_name; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Password</label>
                                                <input type="text" class="form-control" name="admin_password"
                                                    id="validationCustom02" placeholder="Password"
                                                    value="<?php echo $row->admin_password; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Email</label>
                                                <div class="input-group">
                                                    <input placeholder="username" type="text" name="email"
                                                        value="<?php echo $row->admin_email; ?>" class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">@example.com
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Phone Number</label>
                                                <input type="text" class="form-control" name="contact_no"
                                                    id="validationCustom02" placeholder="Phone Number"
                                                    value="<?php echo $row->admin_phone; ?>" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            <div class="form-row">
                                                <div class="col-md-12 mb-6">
                                                    <label for="validationCustom03">Profile Pictures</label>
                                                    <input type="file" class="form-control" name='profile_image'
                                                        id="validationCustom03" placeholder="City" required>
                                                    <div class="invalid-feedback">
                                                        Please Upload Pictures.
                                                    </div>
                                                </div>
                                            </div>

                                        </div><br>
                                        <button class="btn btn-primary" type="submit" name="admin_submit">Update
                                            Profile</button>

                                    </form>
                                    <?php } ?>
                                    <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(
                                                form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                    </script>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <?php include('js.php'); ?>
            </div>
        </div>

</body>

</html>