<?php get_header(); ?>
<div class="container-fluid">
	<div class="row content">
		<?php if (true ): ?>
			<div class="col-sm-3 sidenav">

				<?php if(is_active_sidebar('sidebar')):?>
					<?php dynamic_sidebar('sidebar');?>
				<?php endif;?>
				<br>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Blog..">
					<span class="input-group-btn">


        </span>
				</div>
			</div>




		<div class="container">
			<?php while ( have_posts() ): the_post(); ?>

			<h2 class="single-titleyju"><?php the_title(); ?></h2>

			<?php if ( has_post_thumbnail() ): ?>
				<div class='single-thumbnail-img'> <?php the_post_thumbnail(); ?></div>
			<?php endif; ?>


			<div class='blog-excerpt'><?php the_content(); ?></div>

			<?php comments_template();?>

			<hr>

		</div>
	<?php endwhile?>

	</div>
	<?php endif?>


</div>

</div>

<script>
//    var x ='dd'+ <?php //bloginfo('template_url');?>//;
//    alert(x);
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




<?php wp_footer(); ?>
