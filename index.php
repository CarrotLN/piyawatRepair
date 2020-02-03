<?php session_start(); ?>
<?php
include('h.php');
?>
<style type="text/css">
    #btn {
        width: 100%;
    }

    #example2 {
        border-radius: 5%;
        opacity: 98%;
        align-items: center;
        justify-content: center;
        box-shadow: 5px 10px 18px #888888;
    }
</style>
<div class="container" style="padding-top:100px">
    <div class="row">
        <div class="col-md-4"></div>
        <div  id="example2" class="col-md-4" style="background-color:#f4f4f4">
            <h3 align="center">
                <span class="glyphicon glyphicon-fire"> </span>
                Login </h3>
            <form name="formlogin" action="chklogin.php" method="POST" id="login" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" name="m_username" class="form-control" required placeholder="Username"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" name="m_password" class="form-control" required placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn-shadow btn btn-wide btn-success" id="btn">
                            <span class="glyphicon glyphicon-log-in"> </span>
                            Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>