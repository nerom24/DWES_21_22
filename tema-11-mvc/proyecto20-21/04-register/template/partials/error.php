<?php if (isset($this->error)):?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR </strong> <?= $this->error; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>   
        </div>
<?php endif;?>