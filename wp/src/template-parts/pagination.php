<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.5 11L1.5 6.41667L6.5 1" stroke="#332C2F" stroke-width="1.5"/>
</svg>
',
    'next_text' => '<svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.5 1L6.5 5.58333L1.5 11" stroke="#332C2F" stroke-width="1.5"/>
</svg>
',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>