<?php
include_once 'header.php';
?>

<div class="container">

    <div class="col-md-12 col-lg-12 col-xs-6 col-sm-6">

        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">

                <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                    <img src="assets/logo.png">
                </div>
                <div class="col-sm-12 col-lg-6 col-xs-12 col-md-6">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-4 control-label"> UserName<span class="codex-required">
                                *
                            </span></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="username" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Password <span class="codex-required">
                                *
                            </span>
                            </label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-success">login</button>
                            <a href="register.php">Not a member register</a>
                        </div>
                    </form>
                </div>

                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12" >
                    <strong>
                       
                    </strong>
                </div>


            </div>
        </div>

    </div>
</div>

<?php
include_once 'footer.php';
?>