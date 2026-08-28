<?php
include("../../../Include/top.php")
?>

<div class="container py-5 mt-5 w-75 border">
    <div class="row">
        <div class="col">
               <h3 class="text-primary fw-bold text-center">Register Form</h3>
            <form action="" method="post">
                <input type="hidden" name="action" value="register">
                <input type="hidden" name="status" value="Admin">
                <div class="mb-3">
                    <label  class="from-label fw-bold">first name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="Enter you first name" required>
                </div>
                <div class="mb-3">
                    <label  class="from-label fw-bold">last name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Enter you first name" required>
                </div>
                <div class="mb-3">
                    <label class="from-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter you Email" required>
                </div>
                <div class="mb-3">
                    <label class="from-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter you Email" required>
                </div>
                <div class="mb-3">
                    <label class="from-label fw-bold">Phone number</label>
                    <input type="number" name="phone_number" class="form-control" placeholder="Enter you Email" required>
                </div>
                <div class="my-4">
                   <p>Already have an account? <a href="login.php">login</a>  </p> 
                </div>
                <div class="mb-3">
                    <input type="submit" value="Register" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("../../../Include/bottom.php")
?>