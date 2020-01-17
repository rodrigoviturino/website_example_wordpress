<?php get_header(); ?>

<?php if (have_posts() ) : while(have_posts() ) : the_post(); ?>

<main class="about pb-5">
    <!-- Banner Interno -->
    <section class="banner-interno" style="background-image: url('<?php if(has_post_thumbnail()){ echo get_the_post_thumbnail_url($post->ID, 'full'); } ?>'); height: 300px; background-size: cover; display: flex; align-items: center; background-position:center;">
        <div class="wrapper">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>  
    <!-- end Banner Interno -->

    <!-- Content -->
    <section class="content">
        <div class="container">
            <div class="block-title text-center py-4">
                <h1 class="display-4"><?php the_title(); ?></h1>
                <?php if(function_exists('the_subtitle') ) : ?>
                    <h2><?php the_subtitle(); ?></h2>
                <?php endif; ?>
                <span> Postado por
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php the_author(); ?> em <?php echo get_the_date(); ?>
                    </a>
                </span>
            </div>
            <article>
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </article>                
        </div>
    </section>
    <!-- end Content -->

</main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>