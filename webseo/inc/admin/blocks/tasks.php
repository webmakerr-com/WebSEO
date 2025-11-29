<?php
/**
 * Tasks block.
 *
 * @package WebSEO
 * @subpackage Blocks
 */

defined( 'ABSPATH' ) || exit( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

if ( is_plugin_active( 'wp-seopress-pro/seopress-pro.php' ) ) {
	if ( method_exists( seopress_get_service( 'ToggleOption' ), 'getToggleWhiteLabel' ) && '1' === seopress_get_service( 'ToggleOption' )->getToggleWhiteLabel() ) {
		return;
	}
}

	$docs       = seopress_get_docs_links();
	$status_pro = get_option( 'seopress_pro_license_status' );
if ( false !== $status_pro && 'valid' === $status_pro ) {
	$status_pro = true;
} else {
	$status_pro = false;
}
	$status_insights = get_option( 'seopress_insights_license_status' );
if ( false !== $status_insights && 'valid' === $status_insights ) {
	$status_insights = true;
} else {
	$status_insights = false;
}

if ( defined( 'SEOPRESS_WL_ADMIN_HEADER' ) && SEOPRESS_WL_ADMIN_HEADER === false ) {
	// Do nothing.
} else {
	$class = '1' !== seopress_get_service( 'NoticeOption' )->getNoticeTasks() ? 'is-active' : '';
	?>

	<div id="notice-tasks-alert" class="seopress-card <?php echo esc_attr( $class ); ?>" style="display: none">
		<div class="seopress-card-title">
			<h2><?php esc_attr_e( 'WebSEO Suite', 'webseo' ); ?></h2>
			<p><?php esc_html_e( 'From on-site to off-site SEO, our SEO plugins cover all your needs to rank higher in search engines.', 'webseo' ); ?></p>
		</div>
		<div class="seopress-card-content">
		<?php
			$products = array(
				'webseo/webseo.php'         => array(
					'title' => 'WebSEO Free',
                                    'logo'  => WEBSEO_URL_ASSETS . '/img/logo-webseo-free.svg',
					'url'   => $docs['pricing'],
				),
				'wp-seopress-pro/seopress-pro.php' => array(
					'title'  => 'WebSEO PRO',
                                    'logo'   => WEBSEO_URL_ASSETS . '/img/logo-webseo-pro.svg',
					'url'    => $docs['addons']['pro'],
					'status' => $status_pro,
				),
				'wp-seopress-insights/seopress-insights.php' => array(
					'title'  => 'WebSEO Insights',
                                    'logo'   => WEBSEO_URL_ASSETS . '/img/logo-webseo-insights.svg',
					'url'    => $docs['addons']['insights'],
					'status' => $status_insights,
				),
			);
			?>
			<div class="seopress-integrations seopress-suite">
			<?php
			foreach ( $products as $key => $product ) {
				$title   = $product['title'];
				$logo    = $product['logo'];
				$url     = $product['url'];
				$upgrade = false;
				?>
					<div class="seopress-integration">
						<img src="<?php echo esc_url( $logo ); ?>" width="32" height="32" alt="<?php echo esc_attr( $title ); ?>"/>
						<div class="details">
							<h3 class="name"><?php echo esc_html( $title ); ?></h3>
					<?php
					// Plugin status.
					if ( is_plugin_active( $key ) ) {
						$status = 'status-active';
						$label  = esc_attr__( 'Active', 'webseo' );
					} else {
						$status  = 'status-inactive';
						$label   = esc_attr__( 'Inactive', 'webseo' );
						$upgrade = true;
					}
					// License status.
					if ( is_plugin_active( $key ) && isset( $product['status'] ) ) {
						if ( true === $product['status'] ) {
							$label = esc_attr__( 'License valid', 'webseo' );
						} else {
							$status = 'status-expired';
							$label  = esc_attr__( 'License invalid', 'webseo' );
						}
					}
					?>
							<div class="seopress-d-flex seopress-wrap-details">
								<div class="status">
									<span class="badge <?php echo esc_attr( $status ); ?>"></span>
									<span class="label"><?php echo esc_attr( $label ); ?></span>
								</div>
						<?php if ( true === $upgrade ) { ?>
									<div class="status upgrade">
										<a href="<?php echo esc_url( $url ); ?>" target="_blank">
											<?php esc_html_e( 'Upgrade', 'webseo' ); ?>
											<span class="seopress-help dashicons dashicons-external"></span>
										</a>
									</div>
								<?php } elseif ( isset( $product['status'] ) && false === $product['status'] ) { ?>
									<div class="status upgrade">
										<a href="<?php echo esc_url( admin_url( 'admin.php?page=webseo-license' ) ); ?>">
											<?php esc_html_e( 'Check license', 'webseo' ); ?>
										</a>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
			}
			?>
			</div>
		</div>
	</div>
	<?php
}
