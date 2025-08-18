<?php 
include('./constant/layout/head.php');
include('./constant/layout/header.php');
include('./constant/layout/sidebar.php');
?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add Customer</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Customer</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="margin-left: 10%;">
                <div class="card">
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitCustomerForm" action="./createCustomer.php" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Customer Name:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="customerName" placeholder="Customer Name" name="customerName" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">GST Number:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="contactNumber" placeholder="GST Number" name="contactNumber" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Email:</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Address:</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" id="address" placeholder="Address" name="address"></textarea>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="form-group">
    <div class="row">
        <label class="col-sm-3 control-label">Invoice Number:</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="invoiceNumber" placeholder="Invoice Number" name="invoiceNumber" autocomplete="off">
        </div>
    </div>
</div>
                                <button type="submit" name="create" id="createCustomerBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('./constant/layout/footer.php');?>
