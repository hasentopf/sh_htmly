# HTMLy Theme Schlauhaus
Schlauhaus theme based on Casper theme by Ghost.org ported to HTMLy.

## Installations 
 -  Upload and extract the zip file into themes directory.
 -  Activate it from HTMLy panel.

## License

See the LICENSE.txt


TODO

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
