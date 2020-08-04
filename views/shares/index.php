<div>
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php endif; ?>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="card card-body">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date'];?></small>
            <hr />
            <p><?php echo $item['body'];?></p>
            <br />
            <a href="<?php echo $item['link'];?>" class="btn btn-primary" trget="_blank">Go To Website</a>
        </div>
    <?php endforeach; ?>
</div>