<?php
/**
 * Created by PhpStorm.
 * User: Naod
 * Date: 1/1/2020
 * Time: 11:48 AM
 */
get_header();
?>
    <div class="container-fluid">

    <div class="row content">

    <div class="col-sm-9">
        <h4>
            <small>RECENT POSTS</small>
        </h4>
        <hr>
		<?php while ( have_posts() ): the_post(); ?>

            <div>
                <div>
					<?php if ( has_post_thumbnail() ): ?>
                        <div class='post-thumb'><?php the_post_thumbnail(); ?></div>
					<?php endif; ?>
                </div>
                <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                <h5><span class="glyphicon glyphicon-time"></span> <?php the_date()?></h5>
                <div class='blog-body-flex'>

                    <?php if(is_home()):?>
                        <div class='blog-excerpt'><?php the_excerpt(); ?></div>
                    <?php else : ?>
                        <div class='blog-excerpt'><?php the_content(); ?></div>
                    <?php endif; ?>
                    <hr>
                </div>


            </div>


		<?php endwhile; ?>
        <br><br>






    </div>
    <div class="col-sm-3 sidenav">

	    <?php if(is_active_sidebar('sidebar')):?>
		    <?php dynamic_sidebar('sidebar');?>
	    <?php endif;?>
        <br>

    </div>
    <script>
        $('.sidebar_module ul').addClass('nav nav-pills nav-stacked');
        $('.calendar_wrap table').addClass('table');
        $('#searchform div').addClass('form-group');
        $('#searchform div #s').addClass('form-control');
        $('#searchform div #s').css('flex','.7');
        $('#searchform div #s').attr('placeholder','Search Blog..');
        $('#searchform .form-group').css('display','flex');
        $('#searchform .form-group label').css('display','none');


        $('#searchform div #searchsubmit').css('display','none')
        $('#searchform div').addClass('form-group').append('<span class="input-group-btn">\n' +
            '          <button class="btn btn-default" type="submit">\n' +
            '            <span class="glyphicon glyphicon-search"></span>\n' +
            '          </button>\n' +
            '\n' +
            '        </span>');
    </script>
<?php get_footer(); ?>