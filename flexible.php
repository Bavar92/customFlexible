<?php
if (have_rows('template_blocks')):
    while (have_rows('template_blocks')) : the_row();
        if (get_row_layout() == 'header_main'):
            get_template_part('parts/section', 'header_main');
        endif;
    endwhile; endif;
?>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto consectetur deserunt dicta doloribus earum est eum eveniet fuga harum laudantium modi nesciunt praesentium qui, quibusdam repellat rerum totam, velit!
<?php
if (have_rows('template_blocks')):
    while (have_rows('template_blocks')) : the_row();
        if (get_row_layout() == 'header_page'):
            get_template_part('parts/section', 'header_page');
        endif;
    endwhile; endif;
?>