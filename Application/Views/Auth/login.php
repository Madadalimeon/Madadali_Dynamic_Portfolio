<?php
include ("../../../Include/top.php");
?>
<div class="container py-5 mt-5 w-75 border">
    <div class="row">
        <div class="col">
            <h3 class="text-primary fw-bold text-center">Login Form</h3>
            <form action="" method="post">
                <input type="hidden" name="action" value="login">
                <div class="mb-3">
                    <label class="from-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter you Email">
                </div>
                <div class="mb-3">
                    <label class="from-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter you Password">
                </div>
                <div class="my-4">
                   <p>Don't have an account? <a href="register.php">login</a>  </p> 
                </div>
                <div class="mb-3">                    
                    <input type="Submit" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include("../../../Include/bottom.php");
?>