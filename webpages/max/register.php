<?php
include 'header.php';

?>

    <title>Staff Registration</title>

    <div class="container-fluid">
        <div class="col-md-12">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Staff Registration</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">

                            <label class="control-label col-md-2"> First Name <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="first_name" class="form-control">
                            </div>

                            <label class="control-label col-md-2"> Last Name <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="last_name" class="form-control">
                            </div>

                        </div>

                        <div class="form-group">

                            <label class="control-label col-md-2"> SSN <span class="codex-required">*</span> </label>
                            <div class="col-md-4">
                                <input type="text" name="ssn" class="form-control">
                            </div>

                            <label class="control-label col-md-2"> Department <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="department" class="form-control">
                            </div>

                        </div>


                        <div class="form-group">

                            <label class="control-label col-md-2"> E-MAIL <span class="codex-required">*</span> </label>
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control">
                            </div>

                            <label class="control-label col-md-2"> Phone number <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="phone_number" class="form-control">
                            </div>

                        </div>


                        <div class="form-group">

                            <label class="control-label col-md-2"> Username <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="username" class="form-control">
                            </div>

                            <label class="control-label col-md-2"> Password <span class="codex-required">*</span>
                            </label>
                            <div class="col-md-4">
                                <input type="password" name="phone_number" class="form-control">
                            </div>

                        </div>

                        <div class="col-md-12">
                            <input type="checkbox" class="checkbox"> I have read and agreed to <a
                                    href="javascript:void(0)">
                                terms and conditions
                            </a>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php

include 'footer.php';
?>