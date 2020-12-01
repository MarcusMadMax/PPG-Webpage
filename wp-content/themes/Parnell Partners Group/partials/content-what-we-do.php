<li>
    <div class="list-items">
    
        <a href="<?php the_permalink()?>"><img src="<?php the_field('photo')?>" alt=""></a>
        <div class="list-comments">
        <a href="<?php the_permalink()?>"><?php the_title()?></a>
        <button><a href="<?php the_permalink()?>"><?php the_field('button')?></a></button>
        </div>
    </div>
</li>