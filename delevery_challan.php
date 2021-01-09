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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <script type="text/javascript">
    $(function() {
        $('#alertMessage').delay(2000).fadeOut();
    });
    </script>

    <script> 
    $(document).ready(function () { 
  
      // Denotes total number of rows 
      var rowIdx = 0; 
  
      // jQuery button click event to add a row 
      $('#addBtn').on('click', function () { 
  
        // Adding a row inside the tbody. 
        $('#tbody').append(`<tr id="R${++rowIdx}"> 
             <td class="row-index text-center"> 
                <p>
                    <input type="text" name="product_name" class="form-control" placeholder="Product Name">
                </p> 
             </td>
             <td class="row-index text-center"> 
                <p>
                    <input type="text" name="product_qty" class="form-control" placeholder="Add Qty">
                </p> 
             </td> 
             <td class="row-index text-center"> 
                <p>
                    <input type="text" name="product_prise" class="form-control" placeholder="Prise">
                </p> 
             </td> 
              <td class="text-center"> 
                <button class="btn btn-danger remove"
                  type="button">Remove</button> 
                </td> 
              </tr>`); 
      }); 
  
      // jQuery button click event to remove a row. 
      $('#tbody').on('click', '.remove', function () { 
  
        // Getting all the rows next to the row 
        // containing the clicked button 
        var child = $(this).closest('tr').nextAll(); 
  
        // Iterating across all the rows  
        // obtained to change the index 
        child.each(function () { 
  
          // Getting <tr> id. 
          var id = $(this).attr('id'); 
  
          // Getting the <p> inside the .row-index class. 
          var idx = $(this).children('.row-index').children('p'); 
  
          // Gets the row number from <tr> id. 
          var dig = parseInt(id.substring(1)); 
  
          // Modifying row index. 
          idx.html(`Row ${dig - 1}`); 
  
          // Modifying row id. 
          $(this).attr('id', `R${dig - 1}`); 
        }); 
  
        // Removing the current row. 
        $(this).closest('tr').remove(); 
  
        // Decreasing total number of rows by 1. 
        rowIdx--; 
      }); 
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
                                <div>Delevery Challan
                                    <div class="page-title-subheading">Delevery Challan
                                    </div>

                                </div>
                            </div>
                            <div class="page-title-actions">

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
                                                <a href="sales.php" class="nav-link">
                                                    <i class="nav-link-icon lnr-book"></i>
                                                    <span>
                                                        Add New Sale
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
                                    <h5 class="card-title">Delevery Challan</h5>

                                    <!--------------------------------------------------------------------------------------------------->

                                    <form class="needs-validation" novalidate>
                                        
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Challan Number:</label>
                                                <input type="number" name="invoice_number" class="form-control" id="validationCustom01"
                                                    placeholder="Challan number" value="" required >

                                            </div>
                                            <div class="col-md-4 mb-3">


                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Date</label>
                                                <div class="input-group">
                                                    <input type="Date" name="date" class="form-control" id="" placeholder=""
                                                        aria-describedby="inputGroupPrepend" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Client Name</label>
                                                <input type="text" name="client_name" class="form-control" id="validationCustom03"
                                                    placeholder="Client Name" required>
                                                <div class="invalid-feedback">
                                                    Enter Client Name!
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                            </div>

                                            <div class="col-md-4 mb-3">

                                                <label for="validationCustomUsername">Due Date</label>
                                                <div class="input-group">
                                                    <input type="Date" name="date" class="form-control" id="" placeholder=""
                                                        aria-describedby="inputGroupPrepend" required>
                                                </div>                 


                                            </div>
                                        </div>

    <!----------------------------------------------------------------------------------------------->
                                     
                                     <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <div class="table-responsive"> 
                                              <table class="table table-bordered"> 
                                                <thead> 
                                                  <tr> 
                                                    <th class="text-center">Product Name</th> 
                                                    <th class="text-center">Qty</th> 
                                                    <th class="text-center">Prise</th> 
                                                    <th class="text-center">Remove</th> 
                                                  </tr> 
                                                </thead> 
                                                <tbody id="tbody"> 
                                          
                                                </tbody> 
                                              </table> 
                                            </div> 
                                            <button class="btn btn-md btn-primary" 
                                              id="addBtn" type="button"> 
                                                Add Product
                                            </button> 
                                          </div> 
                                            
                                        </div>

    <!----------------------------------------------------------------------------------------------->



                                        <div class="form-row">

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Total Amount</label>
                                                <input type="number" name="total_payment" class="form-control" id="validationCustom03"
                                                    placeholder="Total Amount" required>
                                                <div class="invalid-feedback">
                                                    Enter Valid Amount!
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Supply Place</label>
                                                <input type="text" name="supply_place" class="form-control" id="validationCustom03"
                                                    placeholder="Enter Supply Place!" required>
                                                <div class="invalid-feedback">
                                                    Enter Supply Place!
                                                </div>
                                            </div>                                        

                                        </div>

                                        <div class="form-row">
                                            
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleText" class="">Description</label>
                                                <textarea name="desc" id="exampleText" class="form-control"
                                                    placeholder="Add Description" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                            </div>

                                        </div>

                                        <div class="position-relative form-group">
                                            <div class="position-relative form-group"></div>
                                            <small class="form-text text-muted">delevery challan for good's supply</small>
                                        </div>
                                        <button class="mt-1 btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            s
                </div>


            </div>
            <?php include('js.php'); ?>
        </div>
    </div>

</body>

</html>