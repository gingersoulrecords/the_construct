<?php
// Get the header
get_header();

// Start the Loop.
while ( have_posts() ) : the_post();
    // Display the post's content.
    the_content();
endwhile;

// Get the footer.
get_footer();
