<?php
// single.php
if (in_category('blog')) {
    include 'category-blog.php';
    return;
} elseif (in_category( 'events')) {
    include 'category-event.php';
    return;
}

?>
