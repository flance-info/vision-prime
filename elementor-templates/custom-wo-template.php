<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$this->add_inline_editing_attributes( 'heading', 'none' );
$this->add_inline_editing_attributes( 'label', 'none' );
$this->add_inline_editing_attributes( 'description', 'advanced' );

$heading_tag     = $settings['heading_html_tag'] ?? 'h2';
$label_tag     = $settings['label_html_tag'] ?? 'div';
$description_tag = $settings['description_html_tag'] ?? 'div';
$description_2_tag = $settings['description_2_html_tag'] ?? 'div';
$subtitle_tag    = $settings['subtitle_html_tag'] ?? 'h3';
$title_tag    = $settings['title_html_tag'] ?? 'h3';


?>

<div class="stm-serv">
		<div class="stm-serv-inner">
			<div class="frame-child"></div>
		</div>
		<main class="rectangle-parent">

			<div class="titleon">
				<div class="title-child"></div>

				<<?php echo esc_attr( $label_tag ); ?>
					class="scarica-gratis-il
					label elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'label' ); ?>>
					<?php echo esc_html( $settings['label'] ); ?>
				</<?php echo esc_attr( $label_tag ); ?>>


				<<?php echo esc_attr( $heading_tag ); ?>
					class="manuale-dellinvestitore
					heading elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'heading' ); ?>>
					<?php echo esc_html( $settings['heading'] ); ?>
				</<?php echo esc_attr( $heading_tag ); ?>>

			</div>
			<div class="at-b2b-consulty-we-provide-ex-parent">

					<<?php echo esc_attr( $description_tag ); ?>
					class="at-b2b-consulty
					description elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description' ); ?>>
					<?php echo esc_html( $settings['description'] ); ?>
				</<?php echo esc_attr( $description_tag ); ?>>

				<div class="frame-parent">
					<div class="our-services-include-parent">


						<<?php echo esc_attr( $title_tag ); ?>
					class="our-services-include
					title elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'title' ); ?>>
					<?php echo esc_html( $settings['title'] ); ?>
				</<?php echo esc_attr( $title_tag ); ?>>


						<div class="banking-options">
							<div class="internet-banking-3674177-wrapper">
								<img
										class="internet-banking-3674177-icon"
										loading="lazy"
										alt=""
										src="/html/public/internetbanking-3674177@2x.png"
								/>
							</div>
							<div class="account-setup-parent">
								<h2 class="account-setup">Account Setup</h2>
								<div class="we-guide-you">
									We guide you through the entire process of opening
									a business bank account, from initial application to account
									activation.
								</div>
							</div>
						</div>
						<div class="banking-options">
							<img
									class="document-4133407-icon"
									loading="lazy"
									alt=""
									src="/html/public/document-4133407@2x.png"
							/>

							<div class="account-setup-parent">
								<h2 class="account-setup">Documentation Assistance</h2>
								<div class="we-guide-you">
									We help with gathering and verifying essential documents
									such as your Emirates ID card, residence visa, salary
									certificate, and proof of address (utility bills and rental
									agreements).
								</div>
							</div>
						</div>
						<div class="banking-options">
							<div class="banking-options-inner">
								<div class="idea-1786324-wrapper">
									<img
											class="idea-1786324-icon"
											loading="lazy"
											alt=""
											src="/html/public/idea-1786324@2x.png"
									/>
								</div>
							</div>
							<div class="account-setup-parent">
								<h2 class="account-setup">Banking Solutions</h2>
								<div class="we-guide-you">
									Access to various account types, including current accounts,
									savings accounts, and corporate accounts, with features like
									online banking and mobile banking.
								</div>
							</div>
						</div>
					</div>
					<div class="financial-options-parent">
						<div class="financial-options">
							<img
									class="wallet-icon"
									loading="lazy"
									alt=""
									src="/html/public/wallet@2x.png"
							/>

							<div class="account-setup-parent">
								<h2 class="account-setup">Minimum Balance Management</h2>
								<div class="we-guide-you">
									Prevent being hit with unnecessary fees and see that you are
									in compliance with minimum balance requirements.
								</div>
							</div>
						</div>
						<div class="financial-options">
							<img
									class="wallet-icon"
									loading="lazy"
									alt=""
									src="/html/public/transaction@2x.png"
							/>

							<div class="account-setup-parent">
								<h2 class="account-setup">Debit and Credit Facilities</h2>
								<div class="we-guide-you">
									Obtain debit cards with Abu Dhabi commercial bank and other
									banking services tailored to your everyday banking needs.
								</div>
							</div>
						</div>
						<div class="financial-options">
							<img
									class="wallet-icon"
									loading="lazy"
									alt=""
									src="/html/public/callcenter@2x.png"
							/>

							<div class="account-setup-parent">
								<h2 class="account-setup">Ongoing Support</h2>
								<div class="we-guide-you">
									Help with transferring money, receiving money, and other
									financial transactions, all provided constantly.
								</div>
							</div>
						</div>

						<<?php echo esc_attr( $description_2_tag ); ?>
					class="we-guide-you
					description_2 elementor-inline-editing" <?php echo $this->get_render_attribute_string( 'description_2' ); ?>>
					<?php echo esc_html( $settings['description_2'] ); ?>
				</<?php echo esc_attr( $description_2_tag ); ?>>

					</div>
				</div>
			</div>
		</main>
	</div>





