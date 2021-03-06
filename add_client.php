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
    $(function()
     {
        $('#alertMessage').delay(2000).fadeOut();
    });
    </script>
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
                                <div>Admin Client
                                    <div class="page-title-subheading">Add Clients
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


                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Add Client</h5>

                                    <?php  include('add_client_process.php'); ?>
                                    <!-- add client form here -->
                                    <form action="" method="post" class="needs-validation" enctype="multipart/form-data"
                                        novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" name="first_name"
                                                    id="validationCustom01" placeholder="First name" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" name="last_name"
                                                    id="validationCustom02" placeholder="Last name" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Gst Number</label>
                                                <input type="text" class="form-control" name="gst_number"
                                                    id="validationCustom02" placeholder="GST Number" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Email</label>
                                                <div class="input-group">
                                                    <input placeholder="username" type="text" name="email"
                                                        class="form-control">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">@example.com
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02">Phone Number</label>
                                                <input type="text" class="form-control" name="phone_number"
                                                    id="validationCustom02" placeholder="Phone Number" value=""
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">City</label>

                                                <textarea class="form-control" id="validationCustom03" name="address"
                                                    rows="3" placeholder="Address Here!" required></textarea>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-row">
                                            


                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom03">Profile Pictures</label>
                                                <input type="file" class="form-control" name='c_image'
                                                    id="validationCustom03" placeholder="City">
                                                <div class="invalid-feedback">
                                                    Please Upload Pictures.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="form-check-label" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="add_client_button">Add Client</button>

                                        <?php echo'<br>'. $notification;?>
                                    </form>

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
                            <div class="main-card mb-3 card">
                                <div class="card-header">Active Users
                                    <div class="btn-actions-pane-right">
                                        <div role="group" class="btn-group-sm btn-group">
                                            <button class="active btn btn-focus">Last Week</button>
                                            <button class="btn btn-focus">All Month</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th> Client Name</th>
                                                <th class="text-center">GST NO</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Contect</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <?php  
                                        $srno=1; 
                                        // $sql="SELECT * FROM tbl_client ORDER BY c_id DESC";
                                        // $res=$conn->query($sql);
                                        // while ($row=$res->fetch_object())
                                        // { 

                                        $record=mysqli_query($conn,"SELECT * FROM tbl_client ORDER BY c_id DESC");
                                        while($data=mysqli_fetch_array($record))
                                        {
                                                                                                         
                                       ?>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $srno++;  ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <?php
                                                               //    echo '<img width="40" class="rounded-circle" src="upload/'.$row->c_image;'"/>';
                                                                     // echo $row->c_image;

                                                                     echo '<img src="upload/'.$data['c_image'].'" width="40"  height="35" class="rounded-circle" >';
                                                                ?>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">
                                                                    <?php echo $data['c_first_name'].'&nbsp;'.$data['c_last_name'];?>
                                                                </div>
                                                                <div class="widget-subheading opacity-7">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo $data['c_gst']; ?></td>
                                                <td class="text-center">
                                                    <div class="badge"><?php echo $data['c_email']; ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge"><?php echo $data['c_phone']; ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="badge"><?php echo $data['c_address']; ?></div>
                                                </td>
                                                <td class="text-center">
                                                    <a href="delete.php?id=<?php echo $data['c_id']; ?>" >
                                                        <button class="mb-2 mr-2 btn btn-danger">Delete
                                                        </button>
                                                    </a>
                                                    <!--<button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Details</button> -->
                                                </td>
                                            </tr>

                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                                            class="pe-7s-trash btn-icon-wrapper"></i></button>
                                    <button class="btn-wide btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- footer include start --->
                <?php include('inc\footer.php'); ?>
                <!-- footer include End --->
            </div>
            <?php include('js.php'); ?>
        </div>
    </div>

</body>

</html>