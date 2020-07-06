<div class="card">
<div class="card-body">
    <h3>Login User</h3>
   <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        

        <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
       
    </form>
    
</div>
</div>