<?php get_header(); ?>

<!-- Banner -->
<section class="home-banner" style="background-image: url('<?= get_template_directory_uri();?>./assets/img/bg-header.jpg'); background-size:cover;">
    <div class="wrapper">
        <div class="container">
            <div class="block-title text-center text-white">
                <h1 class="title display-2"><?php bloginfo('name'); ?></h1>
                <p class=""><?php bloginfo('description'); ?></p>
                <a href="#" class="btn btn-lg btn-success px-5">Get Start</a>
            </div>
        </div>
    </div>
</section>
<!-- end Banner -->

<!-- Content -->
<section class="intro py-5">
    <div class="container">
        <div class="row">

            <?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
                <?php get_template_part('template_parts/post'); ?>
            <?php endwhile; endif; ?>

            <!-- <div class="col-md-6 py-5">
                <div class="card" >
                    <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>Quinta-Feira, 16 de Janeiro de 2020</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leia Mais</a>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 py-5">
                <div class="card" >
                    <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>Quinta-Feira, 16 de Janeiro de 2020</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leia Mais</a>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 py-5">
                <div class="card" >
                    <img src="https://picsum.photos/500/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p>Quinta-Feira, 16 de Janeiro de 2020</p>
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Leia Mais</a>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
            </div> -->

            <?php previous_post_link('Página Anterior'); ?>

            <?php next_post_link('Próxima Página'); ?>

        </div>

        <a href="#" class="btn btn-lg btn-success text-center m-auto d-block w-25">Mostrar Mais Resultados</a>

    </div>
</section>
<!-- end Content -->

<!-- Call to Action -->
<section class="cta bg-light">
    <div class="container">
        <div class="block-title py-5 text-center">
            <h2 class="display-4">Lorem, ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident iusto cumque nam, placeat laboriosam</p>
        </div>
    </div>
</section>
<!-- end Call to Action -->

<!-- About Company -->
<section class="about-company my-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <figure>
                    <img src="https://picsum.photos/500" alt="">
                </figure>
            </div>

            <div class="col-md-6">
                <div class="block-title">
                    <h2 class="display-4 text-center">Titulo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque enim dolorum itaque fugiat quas dicta quae neque nisi veritatis quos? Blanditiis vero assumenda nam qui! Sapiente adipisci nesciunt consequuntur harum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque enim dolorum itaque fugiat quas dicta quae neque nisi veritatis quos? Blanditiis vero assumenda nam qui! Sapiente adipisci nesciunt consequuntur harum!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque enim dolorum itaque fugiat quas dicta quae neque nisi veritatis quos? Blanditiis vero assumenda nam qui! Sapiente adipisci nesciunt consequuntur harum!</p>
                    <a href="about.html" class="mt-5 btn btn-primary btn-lg d-block">Acessar</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end About Company -->v

<?php get_footer(); ?>