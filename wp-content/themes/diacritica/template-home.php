<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
get_header();
?>
<div class="decoration-lines">
    <a href="#" class="eggs egg-position1"></a>
    <a href="#" class="eggs egg-position2"></a>
    <a href="#" class="eggs egg-position3"></a>
    <a href="#" class="eggs egg-position4"></a>
    <a href="#" class="eggs egg-position5"></a>
</div>
<section class="heightFull" id="one">
	<div class="decoration-core-lines decoration-init-position">
		<span class="decoration-line_position_1"></span>
        <span class="decoration-line_position_2"></span>
	</div>
	<div class="x-container heightFull">
		<div class="center_v">			
			<div class="title">
				<h1><?php the_title(); ?></h1>
				<p class="pronunciation"><?php the_field('title_pronunciation');?></p>
			</div>
			<div class="x-flex">
				<div class="left">
					<div class="content-text">
						<div class="inside_content">
							<?php the_field('init_description');?>
						</div>
						<div class="phrase">
							<div class="phrase_content">
								<?php the_field('phrase');?>
							</div>
							<div class="phrase_autor">
								<?php the_field('phrase_autor');?>
							</div>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="button_simple button_top">
						<a href="<?php the_field('arch_link'); ?>" class="btn btn_red">
							<p><?php the_field('arch_text'); ?></p>
							<span><?php the_field('arch_detail'); ?></span>
						</a>
					</div>
					<div class="button_simple button_bottom">
						<a href="<?php the_field('pm_link'); ?>" class="btn btn_blue">
							<p><?php the_field('pm_text'); ?></p>
							<span><?php the_field('pm_detail'); ?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="decoration-simplelines">
    <a href="#" class="eggs egg-position1"></a>
    <a href="#" class="eggs egg-position2"></a>
</div>
<section class="section section__origin" id="origin">
    <!--
	<div class="decoration-core-lines decoration-origin-position">
		<span class="decoration-line_position_1"></span>
	</div>
	-->
	<div class="x-container">
		<div class="x-flex">
			<div class="left">
				<div class="title">
					<h2><?php the_field('title_origin');?></h2>
					<p class="pronunciation"><?php the_field('title_origin_pronunciation');?></p>
				</div>
				<img src="<?php the_field('imagen_origin');?>">
			</div>
			<div class="right">
				<div class="content">
					<?php the_field('content_origin');?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
<div class="decoration-simplelines">
    <a href="#" class="eggs egg-position3"></a>
    <a href="#" class="eggs egg-position4"></a>
</div>
-->
<section class="section section__curricula" id="curricula">
    <!--
        <div class="decoration-core-lines decoration-origin-position">
            <span class="decoration-line_position_1"></span>
            <span class="decoration-line_position_2"></span>
            <span class="decoration-line_position_3"></span>
            <span class="decoration-line_position_4"></span>
        </div>
        -->
	<div class="x-container">
		<div class="x-flex">
			<div class="left">
				<div class="title">
					<h2><?php the_field('title_curricula');?></h2>
					<p class="pronunciation"><?php the_field('title_curricula_pronunciation');?></p>
				</div>
				<div id="pp_alonso" class="item_ppl">
					<div class="imagen_core">
						<img src="<?php the_field('alonso_imagen');?>">
						<div class="core_content">
							<div class="title_content">
								<h3><?php the_field('alonso_fullname');?></h3>
								<p class="charge"><?php the_field('alonso_position');?></p>
							</div>
							<div class="description_content">
								<?php the_field('alonso_description');?>
							</div>
							<div class="description_social_content">
								<?php
									$social = get_field('alonso_social');
									if (!empty($social)) {
										foreach ($social as $s) {
											?>
									<a href="<?php echo $s['link']; ?>"><img src="<?php echo $s['image']; ?>"></a>
											<?php
										}
									}									
								?>
							</div>
						</div>
					</div>
				</div>
				<div id="pp_alonso_orbegoso" class="item_ppl">
					<div class="imagen_core">
						<img src="<?php the_field('alonso_orbegoso_imagen');?>">
						<div class="core_content">
							<div class="title_content">
								<h3><?php the_field('alonso_orbegoso_fullname');?></h3>
								<p class="charge"><?php the_field('alonso_orbegoso_position');?></p>
							</div>
							<div class="description_content">
								<?php the_field('alonso_orbegoso_description');?>
							</div>
							<div class="description_social_content">
								<?php
									$social = get_field('alonso_orbegoso_social');
									if (!empty($social)) {
										foreach ($social as $s) {
											?>
									<a href="<?php echo $s['link']; ?>"><img src="<?php echo $s['image']; ?>"></a>
											<?php
										}
									}									
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="imagen_pp">
					<img src="<?php the_field('curricula_imagen');?>">
				</div>
				<div id="pp_monica" class="item_ppl">
					<div class="imagen_core">
						<img src="<?php the_field('monica_imagen');?>">
						<div class="core_content">
							<div class="title_content">
								<h3><?php the_field('monica_fullname');?></h3>
								<p class="charge"><?php the_field('monica_position');?></p>
							</div>
							<div class="description_content">
								<?php the_field('monica_description');?>
							</div>
							<div class="description_social_content">
								<?php
									$social = get_field('monica_social');
									if (!empty($social)) {
										foreach ($social as $s) {
											?>
									<a href="<?php echo $s['link']; ?>"><img src="<?php echo $s['image']; ?>"></a>
											<?php
										}
									}									
								?>
							</div>
						</div>
					</div>
				</div>
				<div id="pp_denise" class="item_ppl">
					<div class="imagen_core">
						<img src="<?php the_field('denise_imagen');?>">
						<div class="core_content">
							<div class="title_content">
								<h3><?php the_field('denise_fullname');?></h3>
								<p class="charge"><?php the_field('denise_position');?></p>
							</div>
							<div class="description_content">
								<?php the_field('denise_description');?>
							</div>
							<div class="description_social_content">
								<?php
									$social = get_field('denise_social');
									if (!empty($social)) {
										foreach ($social as $s) {
											?>
									<a href="<?php echo $s['link']; ?>"><img src="<?php echo $s['image']; ?>"></a>
											<?php
										}
									}									
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="decoration-simplelines">
    <a href="#" class="eggs egg-position5"></a>
    <a href="#" class="eggs egg-position6"></a>
</div>
<section class="section" id="tropical">
	<div class="decoration-core-lines decoration-tropical-position">
		<span class="decoration-line_position_1"></span>
	</div>
	<div class="x-container">
		<div class="x-flex">
			<div class="left">
				<div class="title">
					<h2><?php the_field('title_tropical');?></h2>
					<p class="pronunciation"><?php the_field('title_tropical_pronunciation');?></p>
				</div>
				<img src="<?php the_field('imagen_tropical');?>">
			</div>
			<div class="right">
				<div class="content">
					<?php the_field('content_tropical');?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="decoration-simplelines">
    <a href="#" class="eggs egg-position7"></a>
    <a href="#" class="eggs egg-position8"></a>
</div>
<section class="section" id="patronage">
	<div class="decoration-core-lines decoration-patronage-position">
		<span class="decoration-line_position_1"></span>
	</div>
	<div class="x-container">
		<div class="x-flex">
			<div class="left">
				<div class="title">
					<h2><?php the_field('title_patronage');?></h2>
					<p class="pronunciation"><?php the_field('title_patronage_pronunciation');?></p>
				</div>
			</div>
			<div class="right">
				<div class="content">
					<?php the_field('content_patronage');?>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="decoration-simplelines">
    <a href="#" class="eggs egg-position7"></a>
    <a href="#" class="eggs egg-position8"></a>
</div>
<section class="section" id="headquarters">
	<div class="decoration-core-lines decoration-headquarters-position">
		<span class="decoration-line_position_1"></span>
	</div>
	<div class="x-container">
		<div class="x-flex">
			<div class="left">
				<div class="title">
					<h2><?php the_field('title_headquarters');?></h2>
					<p class="pronunciation"><?php the_field('title_headquarters_pronunciation');?></p>
				</div>
				<img src="<?php the_field('imagen_headquarters'); ?>">
			</div>
			<div class="right">
				<div class="content list-mode">
					<?php
						$list = get_field('list_headquarters');
						if (!empty($list)) {
							foreach ($list as $l) {
								?>
						<div class="list-mode-item">
							<h3><?php echo $l['title']; ?></h3>
							<div class="content">
								<?php echo $l['description']; ?>
							</div>
						</div>
								<?php
							}
						}									
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();