<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="post-full post">
	<header class="post-full-header">
		<h1 class="post-full-title"><?php echo $p->title;?></h1>
		<?php if (authorized($p)):?><a href="<?php echo $p->url;?>/edit?destination=post">Edit</a><?php endif;?>
	</header>

	<section class="post-full-content">
		<div class="post-content">
		<?php echo $p->body;?>
		</div>
    <?php if (isset($authors)):?>
        <h2>Team</h2>
        <?php foreach($authors as $author):?>
        <div class="site-header-background">
            <div class="site-header-content author-header">
                <img class="author-profile-image" src="<?php echo $author->avatar;?>" alt="<?php echo $author->name;?>">
                <div class="author-header-content">
                    <h2><?php echo $author->name;?></h2>
                    <div class="author-bio"><?php echo $author->about;?></div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    <?php endif;?>
	</section>
<?php if (isset($is_front)):?>
    <nav>
        <?php echo menu('is_front');?>
    </nav>
<?php endif;?>

</article>

<?php if (!empty($prev) || !empty($next)): ?>
    <div class="pager">
        <?php if (!empty($next)): ?>
            <span class="older"><a href="<?php echo($next['url']); ?>" rel="next">&#8592; <?php echo($next['title']); ?> </a></span>
        <?php endif;?> 
        <?php if (!empty($prev)): ?>
            <span class="newer"><a href="<?php echo($prev['url']); ?>" rel="prev"><?php echo($prev['title']); ?> &#8594;</a></span>
        <?php endif;?>
    </div>
<?php endif; ?>
