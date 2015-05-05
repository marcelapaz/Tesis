<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoImagen->ID_TIPO_IMAGEN],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoImagen->ID_TIPO_IMAGEN)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Imagen'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="tipoImagen form large-10 medium-9 columns">
    <?= $this->Form->create($tipoImagen); ?>
    <fieldset>
        <legend><?= __('Edit Tipo Imagen') ?></legend>
        <?php
            echo $this->Form->input('NOMBRE_IMAGEN');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
