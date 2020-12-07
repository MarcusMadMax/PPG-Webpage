<?php
$terms = get_the_terms( get_the_ID(), 'event' );
$classes = '';

if($terms){
    foreach($terms as $term){
        $classes .= $term->slug . ' ';
    }
}


?>

<div class="mix <?php echo $classes?> events">
    <a href="generic.html">
        <img src="<?php the_field('photo')?>" alt="">
    </a>
    <div class="list-comments">
            <p><?php the_field('type')?></p>
    </div>
</div>

        