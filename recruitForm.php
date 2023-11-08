<?php
$page = get_page_by_title("recrutamento");
$content = apply_filters('the_content', $page->post_content);
echo $content;
?>