  <?php
    include('inc/config.php');
    #include('inc/session_check.php');
    error_reporting(0);
    
    if(isset($_POST['add_product_button']))
    {
        $product_name=$_POST['product_name'];
        $code=$_POST['Product_code'];
       
        $validation_check="SELECT * FROM tbl_items where p_name='$product_name'";

        $res_check= $conn->query($validation_check);        
        while($row = $res_check->fetch_object())
        {
            $already_product= $row->p_name;
        }
    
        if($already_product==$product_name)
        {              
            echo"<script> alert('Already Exits');</script>";
        }
        else
        {
            $sql="insert into tbl_items(p_name,code) values('$product_name','$code')";
            $conn->query($sql);

           // echo"<script> alert('Admin Update Successfull');</script>"; 

            $notification='<div id="alertMessage" class="alert alert-success" role="alert">
            Product Added Successfully...
             </div>';
            
        }             
    }
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
        $('#alertMessage').delay(1500).fadeOut();
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
                                <div>Add Product
                                    <div class="page-title-subheading">Add procuts and items is here!
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
                                    <h5 class="card-title">Add Product</h5>

                                    <?php  
                                     ?>
                                    <!-- add client form here -->
                                    <form action="" method="post" class="needs-validation" enctype="multipart/form-data"
                                        novalidate>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01">Product Name</label>
                                                <input type="text" class="form-control" name="product_name"
                                                    id="validationCustom01" placeholder="Product name" value=""
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom02">Product Code</label>
                                                <input type="text" class="form-control" name="Product_code"
                                                    id="validationCustom02" placeholder="Product Code" value=""
                                                    required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                        </div>

                                        <button class="btn btn-primary" type="submit" name="add_product_button"
                                            onclick="myfun">Add Client</button><br><br>

                                        <?php echo $notification; ?>

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

                                    function myfun() {
                                        $('.alert').alert()

                                    }
                                    </script>
                                </div>
                            </div>
                            <div class="main-card mb-3 card">
                                <div class="card-header">Add Product
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
                                                <th class="text-center">Sr. No.</th>
                                                <th>Product Name</th>
                                                <th class="text-center">Product Code</th>
                                                <th class="text-center">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php  
                                        $srno=1;

                                      
                                        $record=mysqli_query($conn,"SELECT * FROM tbl_items ORDER BY p_id DESC");
                                        while($data=mysqli_fetch_array($record))
                                        {                                                                                                      
                                       ?>
                                        <tbody>
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $srno++;  ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">
                                                                    <?php echo $data['p_name'];?>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td class="text-center">
                                                    <?php echo $data['code']; ?>
                                                </td>                                                
                                                <td class="text-center">
                                                <a href="delete_product.php?p_id=<?php echo $data['p_id']; ?>" >
                                                  <button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-danger btn-sm">DELETE</button>
                                                        
                                                </a>
                                                   
                                                </td>
                                            </tr>

                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    
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