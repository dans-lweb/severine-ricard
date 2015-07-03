<div class="entry-meta">
<span class="date"><i class="fa fa-calendar"></i><time datetime="<?php echo date(DATE_W3C); ?>"><?php the_time('j F Y'); ?></time></span>
<span class="author"><i class="fa fa-user"></i><?php _e('Par', 'magicreche'); ?> <?php the_author(); ?></span>
<span class="comments"><i class="fa fa-comment"></i><a href="#comments"> <?php comments_number( __('Aucun commentaire', 'magicreche'), __('1 Commentaire', 'magicreche'), __('% Commentaires', 'magicreche') ); ?></a></span><?php 
if( has_category() ) { ?><span class="entry-categories"><i class="fa fa-tag"></i><?php _e('Post&eacute dans', 'magicreche'); ?> <?php the_category(', '); ?></span><?php }
if( has_tag() ) { ?><span class="entry-tags"><i class="fa fa-tags"></i><?php _e('Tags:', 'magicreche'); ?> <?php the_tags('', ', '); ?></span><?php } ?>
</div>