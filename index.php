<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * 
 * @package Beri_cafe
 */
get_header(); 
?>
<?php while(have_posts()): the_post(); ?>
                <article class="entry">
                    <a>">
                    <?php the_post_thumbnail('specialties'); ?>
                </a>

                <header class="entry-header clear">
                    <div class="date">
                        <time>
                            <?php echo the_time('d'); ?>
                            <span><?php echo the_time('M'); ?></span>
                        </time>
                        
                    </div><!--date-->
                    <div class="entry-title">
                        <?php the_title('<h2>','</h2>');  ?>
                        <p class="author">
                            <i></i>
                            <?php the_author(); ?>
                        </p><!--author-->
                        <p class="tags">
                            <?php the_tags(); ?>

                        </p>

                        
                    </div>
                    
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a>" class="button  blog-button">
                        Read More
                    </a>
                    </div>

                </article>

                <?php  endwhile; ?>