<div class="card">
<div class="card-body">
<h3>Share Something</h3>
   <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
        <label>Share Title</label>
        <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
        <label for="">Body</label>
        <textarea name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
        <label for="">Link</label>
        <input type="text" name="link" class="form-control">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
    
</div>
</div>