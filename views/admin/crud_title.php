<?php
\Nos\I18n::current_dictionary('noviusos_comments::common');
$relatedItem = $item->getRelatedItem();
?>
<h1 class="title comment_title">
    <?= strtr(__('Comment for ‘{{title}}’'), array('{{title}}' => !empty($relatedItem) ? $relatedItem->title_item() : __('Deleted content'))) ?>
</h1>
