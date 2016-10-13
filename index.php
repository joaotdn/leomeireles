<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- Slider principal -->
<div id="home-slide" class="small-12 float-left" role="banner">
	<figure id="main-banner" class="small-12 float-left" data-thumb="<?php echo get_media_directory() . 'banner-1.jpg'; ?>">
		<div class="row rel zi9 full-height">
			<article class="small-12 large-10 large-offset-1 columns mask-primary">
				<header>
					<h1>
						<strong><a href="#">Festa da Vitória Kiko Monteiro e Saulo Veloso Caaporã/Pb</a></strong>
					</h1>
					<p>
						<img src="<?php echo get_assets_directory() . 'wave.svg'; ?>" alt="">
					</p>
					<p>
						<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque autem dolorum, eaque excepturi fuga iure iusto magnam nemo nulla quam quas rem similique sint ullam unde veniam? Neque, non?</i>
					</p>
					<p class="social">
						<span><a href="#"><i class="icon-facebook-circled"></i></a></span>
						<span><a href="#"><i class="icon-twitter-circled"></i></a></span>
						<span><a href="#"><i class="icon-gplus-circled"></i></a></span>
					</p>
					<p class="rel text-right">
						<a href="#" class="button-more rel">Veja mais</a>
					</p>
				</header>
			</article>
		</div>

		<div class="slide-pagination small-12 abs bottom-left text-center">
			<span class="active"></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</figure>
</div>
<!-- fim Slider principal -->

<div class="row">

	<section id="top-events" class="small-12 medium-8 float-left">
		<header class="column">
			<h4 class="section-title float-left"><strong>Últimos eventos</strong></h4>
			<h5 class="float-right">
				<small>
					<a href="#" class="btn-tiny">Todos</a>
				</small>
			</h5>
		</header>

		<nav id="nav-events" class="float-left small-12">

			<figure class="small-12 medium-6 columns event-block">
				<div class="small-12 float-left rel full-height" data-thumb="<?php echo get_media_directory() . 'event1.jpg'; ?>">
					<article class="small-12 columns rel zi9">
						<h2><a href="#">FESTA DA VITÓRIA DA REELEIÇÃO LEONARDO BARBALHO</a></h2>
						<p><i>PITIMBU/PB</i></p>
						<p>
							<img src="<?php echo get_assets_directory() . 'wave.svg'; ?>" alt="">
						</p>
						<p class="date">
							<time><i class="icon-clock"></i> <i>12 de Outubro / 21:00hrs</i></time>
						</p>
					</article>
					<a href="#" class="mask-event abs small-12 full-height top-left"></a>
					<a href="#" class="btn-secondary">VEJA MAIS <i class="icon-right-open-big"></i></a>
					<p class="assets">
						<i class="icon-camera"></i><strong>12</strong>
						<i class="icon-videocam"></i><strong>1</strong>
					</p>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns event-block">
				<div class="small-12 float-left rel full-height" data-thumb="<?php echo get_media_directory() . 'event2.jpg'; ?>">
					<article class="small-12 columns rel zi9">
						<h2><a href="#">Hasteamento da Bandeira 07 de Setembro</a></h2>
						<p><i>PITIMBU/PB</i></p>
						<p>
							<img src="<?php echo get_assets_directory() . 'wave.svg'; ?>" alt="">
						</p>
						<p class="date">
							<time><i class="icon-clock"></i> <i>12 de Outubro / 21:00hrs</i></time>
						</p>
					</article>
					<a href="#" class="mask-event abs small-12 full-height top-left"></a>
					<a href="#" class="btn-secondary">VEJA MAIS <i class="icon-right-open-big"></i></a>
					<p class="assets">
						<i class="icon-camera"></i><strong>132</strong>
					</p>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns event-block">
				<div class="small-12 float-left rel full-height" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/10/DSC3738-200x215.jpg">
					<article class="small-12 columns rel zi9">
						<h2><a href="#"> 19º Aniversário Melodia Celeste Igreja Assembleia de Deus</a></h2>
						<p><i>Caaporã/Pb</i></p>
						<p>
							<img src="<?php echo get_assets_directory() . 'wave.svg'; ?>" alt="">
						</p>
						<p class="date">
							<time><i class="icon-clock"></i> <i>12 de Outubro / 21:00hrs</i></time>
						</p>
					</article>
					<a href="#" class="mask-event abs small-12 full-height top-left"></a>
					<a href="#" class="btn-secondary">VEJA MAIS <i class="icon-right-open-big"></i></a>
					<p class="assets">
						<i class="icon-camera"></i><strong>125</strong>
						<i class="icon-videocam"></i><strong>22</strong>
					</p>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns event-block">
				<div class="small-12 float-left rel full-height" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC3070.jpg">
					<article class="small-12 columns rel zi9">
						<h2><a href="#">5 USADEC Congressos das Senhoras Igreja Assembleia de Deus</a></h2>
						<p><i>Cupissura/Pb</i></p>
						<p>
							<img src="<?php echo get_assets_directory() . 'wave.svg'; ?>" alt="">
						</p>
						<p class="date">
							<time><i class="icon-clock"></i> <i>12 de Outubro / 21:00hrs</i></time>
						</p>
					</article>
					<a href="#" class="mask-event abs small-12 full-height top-left"></a>
					<a href="#" class="btn-secondary">VEJA MAIS <i class="icon-right-open-big"></i></a>
					<p class="assets">
						<i class="icon-camera"></i><strong>14</strong>
					</p>
				</div>
			</figure>
		</nav>

		<h1 class="small-12 text-center">
			<a href="#" class="btn-tiny">+ Mais eventos</a>
		</h1>
	</section>

	<aside id="home-sidebar" class="small-12 medium-4 columns">

		<div class="widget-section small-12 float-left">
			<header>
				<h4 class="section-title float-left"><strong>Último vídeo</strong></h4>
				<h5 class="float-right">
					<small>
						<a href="#" class="btn-tiny">Todos</a>
					</small>
				</h5>
			</header>

			<article class="small-12 float-left">
				<iframe class="small-12" height="315" src="https://www.youtube.com/embed/D_z-RAweP1k" frameborder="0" allowfullscreen></iframe>

				<p><strong>Desfile Cívico Caaporã/ Pb</strong></p>
				<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloribus earum ipsa minus repellendus tempore voluptate.</i></p>
			</article>
		</div>

		<div class="widget-section small-12 float-left text-center">
			<div class="divide-30"></div>
			<div class="fb-page" data-href="https://www.facebook.com/portalleomeireles/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/portalleomeireles/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/portalleomeireles/">Portal Leo Meireles</a></blockquote></div>
		</div>

	</aside>


	<section id="blog-news" class="small-12 large-8 float-left">
		<div class="divide-30"></div>
		<header class="column">
			<h4 class="section-title float-left"><strong>Últimas notícias</strong></h4>
			<h5 class="float-right">
				<small>
					<a href="#" class="btn-tiny">Todas</a>
				</small>
			</h5>
		</header>

		<nav id="nav-blog" class="small-12 float-left">
			<figure class="small-12 medium-6 columns">
				<div class="small-12 float-left rel" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/07/DSC0997.jpg">
					<article class="rel zi9 small-12 full-height">
						<p class="small-12 columns">
							<small><i class="icon-clock"></i> 12 de outubro</small>
						</p>
						<header class="small-12 column">
							<h4><a href="#" title="">HASTEAMENTO DA BANDEIRA 07 DE SETEMBRO PITIMBU/PB</a></h4>
						</header>
					</article>
					<div class="mask abs small-12 full-height top-left"></div>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns">
				<div class="small-12 float-left rel" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC3070.jpg">
					<article class="rel zi9 small-12 full-height">
						<p class="small-12 columns">
							<small><i class="icon-clock"></i> 12 de outubro</small>
						</p>
						<header class="small-12 column">
							<h4><a href="#" title="">Desfile Cívico Caaporã/ Pb</a></h4>
						</header>
					</article>
					<div class="mask abs small-12 full-height top-left"></div>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns">
				<div class="small-12 float-left rel" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC2194.jpg">
					<article class="rel zi9 small-12 full-height">
						<p class="small-12 columns">
							<small><i class="icon-clock"></i> 12 de outubro</small>
						</p>
						<header class="small-12 column">
							<h4><a href="#" title="">Desfile Cívico Caaporã/ Pb</a></h4>
						</header>
					</article>
					<div class="mask abs small-12 full-height top-left"></div>
				</div>
			</figure>

			<figure class="small-12 medium-6 columns">
				<div class="small-12 float-left rel" data-thumb="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC2174.jpg">
					<article class="rel zi9 small-12 full-height">
						<p class="small-12 columns">
							<small><i class="icon-clock"></i> 12 de outubro</small>
						</p>
						<header class="small-12 column">
							<h4><a href="#" title="">FESTA NOSSA SENHORA DA ASSUNÇÃO ALHANDRA/PB</a></h4>
						</header>
					</article>
					<div class="mask abs small-12 full-height top-left"></div>
				</div>
			</figure>
		</nav>
	</section>

	<aside class="small-12 medium-4 columns">
		<div class="divide-30"></div>
		<header class="column">
			<h4 class="section-title float-left"><strong>Mais vistas</strong></h4>
			<div class="divide-30"></div>
		</header>

		<div id="popular" class="column">

			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="http://portalleomeireles.com.br/wp-content/uploads/2016/09/DSC5404-97x75.jpg">
					</div>
				</div>
				<div class="media-object-section">
					<h4><a href="#">Dreams feel real while we're in them.</a></h4>
					<p>
						<small><i>I'm going to improvise. Listen, there's something you should know about me...</i>
						</small></p>
				</div>
			</div>

			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC2556-97x75.jpg">
					</div>
				</div>
				<div class="media-object-section">
					<h4><a href="#">Dreams feel real while we're in them.</a></h4>
					<p>
						<small><i>I'm going to improvise. Listen, there's something you should know about me...</i>
						</small></p>
				</div>
			</div>

			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="http://portalleomeireles.com.br/wp-content/uploads/2016/08/DSC2556-97x75.jpg">
					</div>
				</div>
				<div class="media-object-section">
					<h4><a href="#">Dreams feel real while we're in them.</a></h4>
					<p>
						<small><i>I'm going to improvise. Listen, there's something you should know about me...</i>
						</small></p>
				</div>
			</div>

		</div>
	</aside>

</div>

<?php get_footer();
