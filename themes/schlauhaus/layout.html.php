<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo blog_language();?>">
<head>    
    <?php echo head_contents();?>
    <?php echo $metatags;?>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_path();?>css/style.css?v=1">
</head>
<?php if (isset($is_front)) {?>
<body class="home-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-home-header">
            <div class="outer site-header-background responsive-header-img">
<?php } elseif (isset($is_post) || isset($is_page) || isset($is_subpage) || isset($is_404) || isset($is_404search)) {?>
<body class="post-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-header">
			<div class="outer site-nav-main" <?php if (login()):?>style="position:relative;"<?php endif;?>>
<?php } else {?>
<body class="tag-template">
<?php if (login()) { toolbar(); } ?>
	<div class="site-wrapper">
		<header class="site-archive-header">
			<div class="outer site-nav-main" <?php if (login()):?>style="position:relative;"<?php endif;?>>		
<?php } ?>
				<div class="inner">
					<nav class="site-nav">
						<div class="site-nav-left-wrapper">
							<div class="site-nav-left">
								<a class="site-nav-logo" href="<?php echo site_url();?>"><img src="<?php echo theme_path();?>images/avatar.svg" alt="<?php echo blog_title();?>"></a>
								<div class="site-nav-content">
									<?php echo menu();?>
								</div>
							</div>
						</div>
						<div class="site-nav-right">
							<div class="social-links">
								<?php echo social();?>
							</div>
						</div>
					</nav>
					<?php if (isset($is_front)):?>
					<div class="site-header-content">
						<h1 class="site-title"><?php echo blog_title();?></h1>
						<h2 class="site-description"><?php echo blog_tagline();?></h2>
					</div>
					<?php endif;?>
				</div>
			</div>
			<?php if (isset($is_profile)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content author-header">
					<img class="author-profile-image" src="<?php echo $author->avatar;?>" alt="<?php echo $author->name;?>">
					<div class="author-header-content">
						<h1 class="site-title"><?php echo $author->name;?></h1>
						<div class="author-bio"><?php echo $author->about;?></div>
						<div class="author-meta">
							<?php if(!empty(config('social.linkedin'))):?><span class="author-social-link"><a href="<?php echo config('social.linkedin');?>" target="_blank" rel="noopener">LinkedIn</a></span><?php endif;?>
							<?php if(!empty(config('social.bluesky'))):?><span class="author-social-link"><a href="<?php echo config('social.bluesky');?>" target="_blank" rel="noopener">Bluesky</a></span><?php endif;?>
						</div>
					</div>
				</div>		
			</div>
			<?php endif;?>
			<?php if (isset($is_archive)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $archive->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_category)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $category->title;?></h1>
					<div class="site-description">
					<?php echo $category->body; ?>
					</div>
				</div>
					
			</div>
			<?php endif;?>
			<?php if (isset($is_tag)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $tag->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_search)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $search->title;?></h1>
				</div>					
			</div>
			<?php endif;?>
			<?php if (isset($is_type)):?>		
			<div class="outer site-header-background no-image">
				<div class="inner site-header-content">
					<h1 class="site-title"><?php echo $type->title;?></h1>
				</div>					
			</div>
			<?php endif;?>				
		</header>
		<main id="site-main" class="site-main outer">
			<div class="inner">
				<?php echo content();?>

                <?php if (!isset($is_post) && !isset($is_author) && !isset($is_category) && !isset($is_tag) && !isset($is_search) && !isset($is_type)):?>
                <section class="section-features justify-content-center text-center">
                    <div class="col">
                        <img src="<?php echo theme_path();?>images/Schlauhaus-Solaranlage.svg" alt="Service- und Vertriebskonzept Schlauhaus-Solaranlage">
                        <h3>Service- und Vertriebskonzept</h3>
                        <p>
                            Schlauhaus nimmt Installateuren Arbeit ab, wo andere Anbieter sie für mehr Arbeit einspannen wollen.
                            Und für die Endkunden ist Schlauhaus direkter Ansprechpartner für das individuelle Energiemanagement.
                        </p>
                    </div>
                    <div class="col">
                        <img src="<?php echo theme_path();?>images/Schlauhaus-Schlauhaus-Box.svg" alt="Individualisierbarkeit Schlauhaus-Box">
                        <h3>Individualisierbarkeit</h3>
                        <p>
                            Die Schlauhaus-Box ist vollständig individualisierbar, sowohl durch Konfiguration als auch durch Änderungen und Erweiterungen in der Software selbst - bei gleichzeitiger Nutzung von standardisierter und damit kostengünstiger Hard- und Software für die Basis-Funktionen.
                        </p>
                    </div>
                    <div class="col">
                        <img src="<?php echo theme_path();?>images/Schlauhaus-Wechselrichter.svg" alt="Skalierbarkeit Schlauhaus-Wechselrichter">
                        <h3>Skalierbarkeit</h3>
                        <p>
                            Durch die Architektur der Basis-Software und Weiterentwicklungen des Schlauhaus-Teams kann das System einfach skaliert werden - sowohl für zahlreiche Einzelkunden aber auch für Kunden mit Immobilien und Anlagen an mehreren Standorten.
                        </p>
                    </div>
                    <div class="col">
                        <h3>Digitale Souveränität</h3>
                        <p>
                            Erfahren Sie hier mehr über die Möglichkeiten für Ihr ganz persönliches <a href="<?php echo site_url();?>category/blog" style="text-decoration:underline">Schlauhaus</a>.
                        </p>
                    </div>
                </section>
                <?php endif;?>
			</div>
		</main>

		<?php if (isset($is_post)):?>
		<aside class="read-next outer">
			<div class="inner">
				<div class="read-next-feed">
					<?php $recent = recent_posts(true);?>
					<article class="read-next-card">
                        <h3><?php echo i18n('Recent_posts');?></h3>
						<div class="read-next-card-content">
							<ul>
							<?php foreach ($recent as $r): ?>
                                <li>
                                    <h4><a href="<?php echo $r->url;?>"><?php echo $r->title;?></a></h4>
                                    <div class="read-next-card-meta">
                                        <time><?php echo format_date($r->date) ?></time>
                                    </div>
                                </li>
							<?php endforeach;?>
							</ul>
						</div>
						<footer class="read-next-card-footer">
							<?php echo i18n('All_blog_posts');?>: <?php echo $p->category;?>
						</footer>
					</article>
					
					<?php if (!empty($next)): ?>
					<article class="post-card post" style="min-height:20px;padding:0 0 20px 0;margin:0 25px 25px 25px;">
						<div class="post-card-content">
							<a class="post-card-content-link" href="<?php echo($next['url']); ?>">
								<header class="post-card-header" style="margin:0;">
									<div class="post-card-primary-tag"><?php echo i18n('Next_post');?></div>
									
									<?php $img = get_image($next['body']);?>
									<?php if (!empty($next['image'])) { ?>
									<img class="post-card-image" alt="<?php echo $next['title'];?>" style="margin-bottom:15px;" src="<?php echo $next['image'];?>">
									<?php } elseif (!empty($img) && empty($next['quote']) && empty($next['video']) && empty($next['audio'])) { ?>
									<img class="post-card-image" alt="<?php echo $next['title'];?>" style="margin-bottom:15px;" src="<?php echo $img;?>">
									<?php } ?>
									
									<?php if (!empty($next['video'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<img alt="youtube image <?php echo $next['title'];?>" src="//img.youtube.com/vi/<?php echo get_video_id($next['video']);?>/sddefault.jpg" width="100%">
									</span>
									<?php } ?>
									
									<?php if (!empty($next['audio'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<img alt="soundcloud image <?php echo $next['title'];?>" src="<?php echo theme_path();?>images/soundcloud.jpg" width="100%">
									</span>
									<?php } ?>
									
									<?php if (!empty($next['quote'])) { ?>
									<blockquote class="post-card-title"><p><?php echo $next['quote']; ?></p></blockquote>
									<?php } ?>

									<h2 class="post-card-title"><?php echo($next['title']); ?></h2>
								</header>

								<section class="post-card-excerpt">
										<?php echo($next['description']); ?>
								</section>
							</a>

							<footer class="post-card-meta">
								<span class="post-card-byline-date"><time><?php echo format_date($next['date']) ?></time> <span class="bull">•</span><?php echo $next['category'];?></span>
							</footer>
						</div>
					</article>
					<?php endif;?>
					
					<?php if (!empty($prev)): ?>
					<article class="post-card post" style="min-height:20px;padding:0 0 20px 0;margin:0 25px 25px 25px;">
						<div class="post-card-content">
							<a class="post-card-content-link" href="<?php echo($prev['url']); ?>">
								<header class="post-card-header" style="margin:0;">
									<div class="post-card-primary-tag"><?php echo i18n('Prev_post');?></div>
										
									<?php $img = get_image($prev['body']);?>
									<?php if (!empty($prev['image'])) { ?>
									<img class="post-card-image" alt="<?php echo $prev['title'];?>" style="margin-bottom:15px;" src="<?php echo $prev['image'];?>">
									<?php } elseif (!empty($img) && empty($prev['quote']) && empty($prev['video']) && empty($prev['audio'])) { ?>
									<img class="post-card-image" alt="<?php echo $prev['title'];?>" style="margin-bottom:15px;" src="<?php echo $img;?>">
									<?php } ?>
									
									<?php if (!empty($prev['video'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<img alt="youtube image <?php echo $prev['title'];?>" src="//img.youtube.com/vi/<?php echo get_video_id($prev['video']);?>/sddefault.jpg" width="100%">
									</span>
									<?php } ?>
									
									<?php if (!empty($prev['audio'])) { ?>
									<span class="post-card-image-link" style="margin-bottom:15px;">
										<img alt="soundcloud image <?php echo $prev['title'];?>" src="<?php echo theme_path();?>images/soundcloud.jpg" width="100%">
									</span>
									<?php } ?>
									
									<?php if (!empty($prev['quote'])) { ?>
									<blockquote class="post-card-title"><p><?php echo $prev['quote']; ?></p></blockquote>
									<?php } ?>
										
									<h2 class="post-card-title"><?php echo($prev['title']); ?></h2>
								</header>

								<section class="post-card-excerpt">
										<?php echo($prev['description']); ?>
								</section>
							</a>

							<footer class="post-card-meta">
								<span class="post-card-byline-date"><time><?php echo format_date($prev['date']) ?></time> <span class="bull">•</span><?php echo $prev['category'];?></span>
							</footer>
						</div>
					</article>
					<?php endif;?>
					
				</div>
			</div>
		</aside>
		<?php endif;?>

		<footer class="site-footer outer">
			<div class="site-footer-content inner">
            <section class="copyright">© <?php echo date('Y');?> <?php echo copyright();?></section>
				<nav class="site-footer-nav">
					<?php echo menu();?>
				</nav>
			</div>
		</footer>
	</div>
<?php if (facebook()) { echo facebook(); } ?>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>
