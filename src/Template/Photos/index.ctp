<div class="photos index large-12 medium-12 columns">
    <?php foreach ($photos as $photo): ?>
	<a href="<?php echo CHEMIN; ?>/photos/edit/<?php echo $photo->id;?>"><img style="width: 150px" src="<?php echo CHEMINPHOTOS ."/".$photo->file; ?>"></a>
 

    <?php endforeach; ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
