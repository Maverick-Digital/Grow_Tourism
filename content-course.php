<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('content container pt-5 text-primary '); ?>>
	<div class="course-intro text-primary py-3">
		<div class="course-catrgory text-uppercase"><?php the_field('category'); ?></div>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php grow_tourism_article_posted_on(); ?>
				</div><!-- /.entry-meta -->
			<?php
			endif;
			?>
		</header><!-- /.entry-header -->
		<?php the_field('intro'); ?>
	</div>
	<div class="course-highlight background-gradiant p-3 text-white">
		<div class="row">
			<div class="col-6">
				<h4 class="mb-1">About the course</h4>
				<div class="course-summary d-flex mb-2">
					<div class="d-flex align-items-center me-2">
						<i class="fa-solid fa-tags"></i>
						<div class="category-wrap ms-1">
							<span class="category-title">Category</span>
							<span><?php the_field('category'); ?></span>
						</div>
					</div>
					<div class="d-flex align-items-center me-2">
						<i class="fa-solid fa-clock"></i>
						<div class="category-wrap ms-1">
							<span class="category-title">Duration</span>
							<span><?php the_field('duration'); ?> hours</span>
						</div>
					</div>
					<div class="d-flex align-items-center me-2">
						<i class="fa-solid fa-graduation-cap"></i>
						<div class="category-wrap ms-1">
							<span class="category-title">Level</span>
							<span><?php the_field('level'); ?></span>
						</div>
					</div>
				</div>
				<div class="sumary-description">
					<p><strong>COURSE OVERVIEW </strong></p>
					<p><?php the_field('course_overview'); ?></p>
				</div>
				<button type="button" class="btn btn-light btn-sm rounded-pill">Add to learning pathway <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
			</div>
			<div class="col-6">
				<?php
				if (has_post_thumbnail()) :
					echo '<div class="post-thumbnail">' . get_the_post_thumbnail(get_the_ID(), 'large') . '</div>';
				endif; ?>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="row text-primary py-3 g-4">
			<div class="col-8">
				<h4>Course details</h4>
				<?php
				the_content();

				wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'grow-tourism') . '</span>', 'after' => '</div>'));
				?>
			</div>
			<div class="col-4">
				<h4>Meet your tutor</h4>
				<div class="tutor-profile d-flex">
					<div class="tutor-picture me-1">
						<div class="rounded-circle border d-flex justify-content-center align-items-center overflow-hidden">
						<?php if ( get_field( 'image' ) ) : ?>
	<img  class="img-fluid" src="<?php the_field( 'image' ); ?>" />
<?php endif ?>
							
						</div>
					</div>
					<div class="tutor-summary">
						<p class="mb-0"><strong><?php the_field( 'name' ); ?></strong></p>
						<p class="small"><?php the_field( 'position' ); ?></p>
					</div>
				</div>
				<p><?php the_field('description'); ?></p>
			</div>
		</div>
	</div><!-- /.entry-content -->
	<section class="lessons-wraper">
		<div class="course-intro text-primary py-3">
			<header class="entry-header">
				<h1 class="entry-header">What you'll learn</h1>
				<p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
			</header>
		</div>


		<?php if (have_rows('lesson')) : ?>
			<?php while (have_rows('lesson')) : the_row(); ?>
				<div class="lesson bg-light p-3 row mb-2 justify-content-between align-items-center text-primary">
					<div class="col-7">
						<h5><?php the_sub_field('lasson_name'); ?></h5>
						<p class="m-0"><?php the_sub_field('lesson_description'); ?></p>
					</div>
					<div class="col-3">
						<div class="badge rounded-pill bg-primary px-2 py-1 lesson-info">
							<span class="px-1"><?php the_sub_field('lesson_number_of_videos'); ?> Videos</span>
							<span class="px-1"><?php the_sub_field('lessons_number_of_hours'); ?> hours</span>
						</div>
					</div>

				</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php // No rows found 
			?>
		<?php endif; ?>
	</section>
	<?php
	edit_post_link(__('Edit', 'grow-tourism'), '<span class="edit-link">', '</span>');
	?>
</article><!-- /#post-<?php the_ID(); ?> -->
<section class="review-wraper mt-4">
	<div class="course-intro text-primary text-center">
		<header class="entry-header">
			<h1 class="entry-header">Course reviews</h1>
		</header>
	</div>
	<div class="splide reviews text-white" role="group" aria-label="Splide Basic HTML Example">
		<div class="splide__track">
			<ul class="splide__list">
				<li class="splide__slide">
					<div class="card">
						<div class="px-2 py-2">
							<span class="maintxt">"Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua.Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua."</span>
							<div class="d-flex pt-3">
								<div><img src="https://i.imgur.com/hczKIze.jpg" width="50" class="rounded-circle"></div>
								<div class="ms-1">
									<span class="name">Dan Spratling</span>
									<p class="para">Company name</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<div class="card">
						<div class="px-2 py-2">
							<span class="maintxt">"Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua."</span>
							<div class="d-flex pt-3">
								<div><img src="https://i.imgur.com/hczKIze.jpg" width="50" class="rounded-circle"></div>
								<div class="ms-1">
									<span class="name">Dan Spratling</span>
									<p class="para">Company name</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<div class="card">
						<div class="px-2 py-2">
							<span class="maintxt">"Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua."</span>
							<div class="d-flex pt-3">
								<div><img src="https://i.imgur.com/hczKIze.jpg" width="50" class="rounded-circle"></div>
								<div class="ms-1">
									<span class="name">Dan Spratling</span>
									<p class="para">Company name</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<div class="card">
						<div class="px-2 py-2">
							<span class="maintxt">"Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua."</span>
							<div class="d-flex pt-3">
								<div><img src="https://i.imgur.com/hczKIze.jpg" width="50" class="rounded-circle"></div>
								<div class="ms-1">
									<span class="name">Dan Spratling</span>
									<p class="para">Company name</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li class="splide__slide">
					<div class="card">
						<div class="px-2 py-2">
							<span class="maintxt">"Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua. Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore magna aliqua."</span>
							<div class="d-flex pt-3">
								<div><img src="https://i.imgur.com/hczKIze.jpg" width="50" class="rounded-circle"></div>
								<div class="ms-1">
									<span class="name">Dan Spratling</span>
									<p class="para">Company name</p>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="faq mt-5">
	<div class="background-gradiant py-4">
		<div class="course-intro text-white text-center">
			<header class="entry-header">
				<h1 class="entry-header">Frequently asked questions</h1>
			</header>
		</div>
		<div class="faq-container">
			<div class="wrap">
				<button class="accordion">Cuáles son los medios de pago en Paruparo.cl?</button>
				<div class="panel">
					<p>Nuestros formas de pago son: WebPay Plus - Tarjeta debito, Tarjeta credito, Prepago, OnePay.</p>
				</div>
			</div>
			<div class="wrap">
				<button class="accordion">Como funciona el despacho en Paruparo.cl?</button>
				<div class="panel">
					<p>Nuestros proveedor de servicios de envío es Starken. Tan pronto como su paquete esté en camino hacia usted, recibirá una confirmación de envío por correo electrónico o por WhatsApp. En este notificación también encontrará su número de seguimiento, que puede usar para rastrear su envío en cualquier momento. Puede consultar el estado del envío en el sitio web de Starken. También puede espicificar la direccion de oficinas de Starken como lugares de entrega. Los costos de entrega son por pagar. Normalemente la entrega en sucursales de Starken es mas bajo que al domicilio.</p>
					<p>En Puerto Montt y Alerce ofrecemos también la opción de entrega. Los días de entrega a domicilio serán los días jueves durante la tarde en la ciudad de Puerto Montt y en Alerce. También entregamos en el centro de Puerto Montt sin costos adiciónales. El día depende del tiempo y de la cantidad de las entregas. Puede ser el mismo jueves en la tarde o el viernes. Te notificaremos con Whatsapp o por correo electrónico un día anterior con mas detalles.</p>
				</div>
			</div>
			<div class="wrap">
				<button class="accordion">Quién recibe las donaciones?</button>
				<div class="panel">
					<p>Puedes incluir en tú compra una donación para los gatos y perros de la comuna Puerto Montt. Nosotros transferimos cada 3 meses la suma de los donaciones a la cuenta de la Comunidad Felina Puerto Montt. La Comunidad utilizar los donaciones para esterilización, remedios y comida para los gatitos y perritos necesitados de Puerto Montt. Vamos a publicar cada 3 meses un resumen en nuestros pagina web o en nuestros RSS.</p>
				</div>
			</div>
			<div class="wrap">
				<button class="accordion">Qué es la garantía por 30 días?</button>
				<div class="panel">
					<p>Te ofrecemos una garantía por 30 días. Vas a quedar feliz con tu compra o te devolvemos lo que pagaste. Nos interesa genuinamente que seas feliz con tus productos de Paruparo.cl. Si no te gustó lee abajo los Cambios y Devoluciones.</p>
				</div>
			</div>
			<div class="wrap">
				<button class="accordion">Como se realizar devoluciones y cambios?</button>
				<div class="panel">
					<p>Para realizar una devolución de un producto debes seguir las siguientes instrucciones:</p>


					<p>1. Antes de comenzar asegúrate de tener la siguiente información que será solicitada al momento de hacer la devolución: Número de pedido, Fecha del pedido, Número de teléfono y correo electrónico.</p>


					<p>2. Debes comunicarte con nuestro Servicio al Cliente enviándonos un mail a contacto@paruparo.cl o a nuestro WhatsApp +56922107719 e indicando los datos anteriormente mencionados para que nuestro equipo pueda iniciar la gestión. Servicio al Cliente te enviará por correo la Orden de Transporte la cual debes imprimir.</p>


					<p>3. Acércate a la oficina Starken mas cercana con la Orden de Transporte y los productos a devolver en su embalaje original, debes sellar la bolsa de forma que esta no se pueda volver a abrir hasta llegar a su destino.</p>


					<p>Cuando el pedido en devolución llegue a nuestro centro de distribución, resolveremos la gestión realizando el reintegro de la compra, siempre y cuando el producto pase nuestro control de calidad. Puedes leer más sobre los Cambios y Devoluciones aquí.</p>
				</div>
			</div>
		</div>
	</div>

</section>