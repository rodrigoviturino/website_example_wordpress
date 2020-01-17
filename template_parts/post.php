<div class="col-md-6">
    <div class="card" >
        <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">

        <div class="card-body">
            <p>Quinta-Feira, <?php echo get_the_date(); ?></p>
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia Mais</a>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago - for <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"> <?php the_author(); ?> </a></small>
        </div>
    </div>
</div>
