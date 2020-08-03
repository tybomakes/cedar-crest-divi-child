<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

// generate ACF variables
$acfFields = [
	"ingredients",
	"size",
	"product_description",
	"ingredients",
	"allergens",
	"servings_per_container",
	"serving_size",
	"calories_per_serving",
	"calories_per_pint",
	"total_fat_per_serving",
	"total_fat_per_pint",
	"total_fat_daily_value_per_serving",
	"total_fat_daily_value_per_pint",
	"saturated_fat_per_serving",
	"saturated_fat_per_pint",
	"saturated_fat_daily_value_per_serving",
	"saturated_fat_daily_value_per_pint",
	"trans_fat_per_serving",
	"trans_fat_per_pint",
	"trans_fat_daily_value_per_serving",
	"trans_fat_daily_value_per_pint",
	"cholesterol_per_serving",
	"cholesterol_per_pint",
	"cholesterol_daily_value_per_serving",
	"cholesterol_daily_value_per_pint",
	"sodium_per_serving",
	"sodium_per_pint",
	"sodium_daily_value_per_serving",
	"sodium_daily_value_per_pint",
	"total_carbohydrate_per_serving",
	"total_carbohydrate_per_pint",
	"carbohydrate_daily_value_per_serving",
	"carbohydrate_daily_value_per_pint",
	"dietary_fiber_per_serving",
	"dietary_fiber_per_pint",
	"dietary_fiber_daily_value_per_serving",
	"dietary_fiber_daily_value_per_pint",
	"total_sugars_per_serving",
	"total_sugars_per_pint",
	"includes_added_sugars_per_serving",
	"includes_added_sugars_per_pint",
	"daily_value_added_sugars_per_serving",
	"daily_value_added_sugars_per_pint",
	"protein_per_serving",
	"protein_per_pint",
	"protein_daily_value_per_serving",
	"protein_daily_value_per_pint",
	"vitamind_per_serving",
	"vitamind_per_pint",
	"vitamind_daily_value_per_serving",
	"vitamind_daily_value_per_pint",
	"calcium_per_serving",
	"calcium_per_pint",
	"calcium_daily_value_per_serving",
	"calcium_daily_value_per_pint",
	"iron_per_serving",
	"iron_per_pint",
	"iron_daily_value_per_serving",
	"iron_daily_value_per_pint",
	"potassium_per_serving",
	"potassium_per_pint",
	"potassium_daily_value_per_serving",
	"potassium_daily_value_per_pint",
	"vitamin_a",
	"vitamin_a_daily_value_per_serving",
];
foreach($acfFields as $field) {
	${$field} = get_field($field);
}

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<?php $featuredImage =  get_field ('featured_image'); ?>
<?php $flavor =  get_field ('flavor'); ?>
<?php $size =  get_field ('size'); ?>
<?php $description =  get_field ('product_description'); ?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="banner">
		<div>
		<div class="featureImg"><img src="<?php echo($featuredImage)?>"/></div>
		</div>
		<div class="banner-text">
			<?php 
				the_title( '<h1 class="product_title entry-title">', '</h1>' );
			?>
		</div>
		<div class="banner-img">
			<img src="https://cedar-crest.local/wp-content/uploads/2020/07/wmfo-1.png"class="wmfo"/>
		</div>
	</div>
	<div class="size-section">
		<div class="size-text">
			Choose a Size
		</div>
		<div class="svgbtns">
		<div class="gallon">
				<a href="#3gal" class="size-activator">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 161.11 203.08"><g id="Layer_2" data-name="Layer 2"><g id="svg2"><g id="_3gal" data-name="3gal"><path id="Bkgrnd" d="M5.3,20.5V202.1H147.7V20.5h4V.5H.5v20H5.3" fill="#1c9fd7"/><path d="M142.1,196.18V14.58h4V5H6.1v9.6h4.8v181.6H142.1" fill="#acd6f1"/><g id="Text"><path d="M48.06,94h1.09a6.58,6.58,0,0,0,.9-.06,2.57,2.57,0,0,0,.81-.26,1.44,1.44,0,0,0,.59-.53,1.62,1.62,0,0,0,.22-.9,1.47,1.47,0,0,0-.56-1.17,2.12,2.12,0,0,0-1.39-.47,1.93,1.93,0,0,0-1.28.42,1.91,1.91,0,0,0-.67,1l-3.66-.76a5.17,5.17,0,0,1,.8-1.74,4.46,4.46,0,0,1,1.26-1.16,5.58,5.58,0,0,1,1.63-.66,8.32,8.32,0,0,1,1.9-.21,7.91,7.91,0,0,1,2,.26,4.8,4.8,0,0,1,1.69.8A4,4,0,0,1,54.57,90a4.25,4.25,0,0,1,.43,2,3.66,3.66,0,0,1-.69,2.24,3.16,3.16,0,0,1-2,1.2v.06a3.14,3.14,0,0,1,1.25.42,3.47,3.47,0,0,1,1.49,1.93,4.08,4.08,0,0,1,.2,1.31,4.47,4.47,0,0,1-.45,2.06,4.29,4.29,0,0,1-1.22,1.48,5.2,5.2,0,0,1-1.8.87,7.71,7.71,0,0,1-2.18.29,6.55,6.55,0,0,1-3.62-1,4.7,4.7,0,0,1-2-3.09l3.5-.82a2.37,2.37,0,0,0,.72,1.33,2.32,2.32,0,0,0,1.61.49,2.13,2.13,0,0,0,1.61-.56,2.1,2.1,0,0,0,.52-1.46,1.66,1.66,0,0,0-.28-1,1.64,1.64,0,0,0-.72-.54,3.06,3.06,0,0,0-1-.21q-.55,0-1.11,0h-.77V94" fill="#1c9fd7"/><path d="M62.4,99.34H57V96.68H62.4v2.66" fill="#1c9fd7"/><path d="M78.76,102.42a12.69,12.69,0,0,1-3.19,1.15,16,16,0,0,1-3.39.35,9.73,9.73,0,0,1-3.39-.57,8,8,0,0,1-2.69-1.65,7.57,7.57,0,0,1-1.76-2.61,9.57,9.57,0,0,1,0-6.83,7.52,7.52,0,0,1,1.76-2.6A7.69,7.69,0,0,1,68.79,88a9.5,9.5,0,0,1,3.39-.58,12.29,12.29,0,0,1,3.47.46,6.73,6.73,0,0,1,2.78,1.56L76,92.11A4.77,4.77,0,0,0,74.4,91a5.74,5.74,0,0,0-2.22-.38,5.18,5.18,0,0,0-2,.38,4.44,4.44,0,0,0-2.52,2.66,6,6,0,0,0,0,4,4.47,4.47,0,0,0,1,1.59,4.65,4.65,0,0,0,1.54,1.06,5.18,5.18,0,0,0,2,.37,6.65,6.65,0,0,0,1.95-.25,8.08,8.08,0,0,0,1.31-.52V97.41H72.62v-3.2h6.14v8.21" fill="#1c9fd7"/><path d="M87,87.83h2.86l6.82,15.7h-3.9L91.4,100.2H85.3L84,103.53H80.18L87,87.83" fill="#1c9fd7"/><path d="M98.36,87.83h3.46v12.5h6.41v3.2H98.36V87.83" fill="#1c9fd7"/></g><path d="M88.3,92.4l-1.91,4.87h3.84L88.3,92.4" fill="#acd6f1"/></g><rect x="0.5" y="0.5" width="160.11" height="202.08" fill="none" stroke="#acd6f1" stroke-miterlimit="10"/></g></g></svg>
				</a>
			</div>
		<div class="scround">
			<a href="#scround" class="size-activator active">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 165.89 127.3"><g id="Layer_2" data-name="Layer 2"><g id="svg2"><g id="Scround"><path id="Bkgrnd" d="M20.23,125.6l.16.4H145l.88-10.8L150.15,48l2.24-1.76v-13H13.19V45.92l2.72,1.52,4.32,78.16" fill="#1c9fd7"/><g id="Text"><path d="M37,15.89a2.42,2.42,0,0,0-1.14-.79,4.15,4.15,0,0,0-1.37-.25,3.42,3.42,0,0,0-.77.08,3.29,3.29,0,0,0-.76.28,1.63,1.63,0,0,0-.57.5,1.26,1.26,0,0,0-.23.75,1.24,1.24,0,0,0,.54,1.09,4.78,4.78,0,0,0,1.34.64c.54.18,1.12.36,1.74.53a7.12,7.12,0,0,1,1.74.76,4.09,4.09,0,0,1,1.34,1.31A4,4,0,0,1,39.4,23a5,5,0,0,1-.49,2.28,4.45,4.45,0,0,1-1.32,1.62,5.59,5.59,0,0,1-1.92,1,8.84,8.84,0,0,1-2.32.31,8.42,8.42,0,0,1-2.84-.47,7.11,7.11,0,0,1-2.44-1.51l2.46-2.7a3.76,3.76,0,0,0,1.34,1.1,3.82,3.82,0,0,0,1.68.38,3.58,3.58,0,0,0,.85-.1,2.68,2.68,0,0,0,.78-.29,1.8,1.8,0,0,0,.55-.51,1.31,1.31,0,0,0,.21-.74,1.34,1.34,0,0,0-.54-1.12A5.08,5.08,0,0,0,34,21.5c-.55-.2-1.14-.39-1.78-.58a7.81,7.81,0,0,1-1.77-.78,4.16,4.16,0,0,1-1.36-1.28,3.63,3.63,0,0,1-.55-2.11,4.78,4.78,0,0,1,.5-2.22,4.88,4.88,0,0,1,1.33-1.59,5.89,5.89,0,0,1,1.92-1,8,8,0,0,1,2.24-.32,8.88,8.88,0,0,1,2.57.38,5.94,5.94,0,0,1,2.24,1.26L37,15.89" fill="#1c9fd7"/><path d="M52.24,16.13A3.39,3.39,0,0,0,51,15.18a4.14,4.14,0,0,0-1.71-.33,4.34,4.34,0,0,0-1.81.37A4.27,4.27,0,0,0,46,16.28a4.66,4.66,0,0,0-1,1.6,6,6,0,0,0,0,4.05A4.85,4.85,0,0,0,46,23.52a4.16,4.16,0,0,0,1.41,1.06,4,4,0,0,0,1.74.37A3.84,3.84,0,0,0,51,24.51a3.65,3.65,0,0,0,1.35-1.24l2.88,2.15a5.93,5.93,0,0,1-2.52,2.06,7.72,7.72,0,0,1-3.15.67,9.73,9.73,0,0,1-3.39-.58,7.69,7.69,0,0,1-2.69-1.65,7.57,7.57,0,0,1-1.76-2.61,8.85,8.85,0,0,1-.63-3.41,8.85,8.85,0,0,1,.63-3.41,7.57,7.57,0,0,1,1.76-2.61,7.69,7.69,0,0,1,2.69-1.65,9.5,9.5,0,0,1,3.39-.58,8.4,8.4,0,0,1,1.38.12,8.78,8.78,0,0,1,1.42.39,6.38,6.38,0,0,1,1.34.71A5.43,5.43,0,0,1,54.9,14l-2.66,2.17" fill="#1c9fd7"/><path d="M57.16,12.05h6.07a11.15,11.15,0,0,1,2.28.23,5.57,5.57,0,0,1,1.88.78,3.89,3.89,0,0,1,1.29,1.46,5.09,5.09,0,0,1,.47,2.3,4.61,4.61,0,0,1-.86,2.82,3.91,3.91,0,0,1-2.53,1.48l4,6.63H65.61l-3.29-6.28h-1.7v6.28H57.16V12.05" fill="#1c9fd7"/><path d="M70.68,19.9a8.85,8.85,0,0,1,.63-3.41,7.5,7.5,0,0,1,4.45-4.26,10.2,10.2,0,0,1,6.78,0,7.69,7.69,0,0,1,2.69,1.65A7.57,7.57,0,0,1,87,16.49a8.85,8.85,0,0,1,.63,3.41A8.85,8.85,0,0,1,87,23.31a7.57,7.57,0,0,1-1.76,2.61,7.69,7.69,0,0,1-2.69,1.65,10.2,10.2,0,0,1-6.78,0,7.5,7.5,0,0,1-4.45-4.26,8.85,8.85,0,0,1-.63-3.41" fill="#1c9fd7"/><path d="M103.2,21.7a7.61,7.61,0,0,1-.42,2.57,5.62,5.62,0,0,1-1.25,2,5.81,5.81,0,0,1-2.07,1.35,8.65,8.65,0,0,1-5.74,0,6,6,0,0,1-2.08-1.35,5.76,5.76,0,0,1-1.25-2A7.61,7.61,0,0,1,90,21.7V12.05h3.46v9.51a3.9,3.9,0,0,0,.23,1.35A3.24,3.24,0,0,0,94.31,24a3.13,3.13,0,0,0,1,.71A3.21,3.21,0,0,0,96.6,25a3,3,0,0,0,1.26-.25,3,3,0,0,0,1-.71,3.09,3.09,0,0,0,.65-1.08,3.68,3.68,0,0,0,.24-1.35V12.05h3.45V21.7" fill="#1c9fd7"/><path d="M106.4,12.05h4.7L117.77,23h0V12.05h3.46v15.7h-4.52L109.9,16.57h0V27.75H106.4V12.05" fill="#1c9fd7"/><path d="M124.47,12.05h5.18a14.82,14.82,0,0,1,3.58.42,8.15,8.15,0,0,1,3,1.37,6.56,6.56,0,0,1,2,2.45,8.25,8.25,0,0,1,.74,3.65,7.45,7.45,0,0,1-.72,3.36,7.26,7.26,0,0,1-1.94,2.44,8.53,8.53,0,0,1-2.81,1.5,11,11,0,0,1-3.35.51h-5.65V12.05" fill="#1c9fd7"/></g><path d="M60.62,18.55h2c.31,0,.64,0,1,0a2.87,2.87,0,0,0,1-.2,1.48,1.48,0,0,0,1-1.51,1.71,1.71,0,0,0-.24-1,1.79,1.79,0,0,0-.62-.54,2.77,2.77,0,0,0-.87-.26,7.69,7.69,0,0,0-.95-.06H60.62v3.57" fill="#acd6f1"/><path d="M74.27,19.9a5.77,5.77,0,0,0,.35,2,4.78,4.78,0,0,0,1,1.59,4.47,4.47,0,0,0,1.54,1.06,5.64,5.64,0,0,0,4,0,4.38,4.38,0,0,0,1.54-1.06,4.47,4.47,0,0,0,1-1.59,6,6,0,0,0,0-4.05,4.43,4.43,0,0,0-1-1.6,4.38,4.38,0,0,0-1.54-1.06,5.64,5.64,0,0,0-4,0,4.47,4.47,0,0,0-1.54,1.06,4.72,4.72,0,0,0-1,1.6,5.79,5.79,0,0,0-.35,2" fill="#acd6f1"/><path d="M127.92,24.56h1.8a9.82,9.82,0,0,0,2.23-.25,4.69,4.69,0,0,0,1.78-.81A3.89,3.89,0,0,0,134.92,22a5.28,5.28,0,0,0,.43-2.25,4.38,4.38,0,0,0-.43-2,4,4,0,0,0-1.17-1.41,5.14,5.14,0,0,0-1.71-.83,7.85,7.85,0,0,0-2.08-.28h-2v9.32" fill="#acd6f1"/><path d="M139.43,121.2l.88-6,4.32-68.8,1.12-2.32a12.48,12.48,0,0,0,1.12-3.84V38.8h-128v3.44l2.56,1.84,3.84,68.72.08,8.4H139.43" fill="#acd6f1"/></g><rect x="0.5" y="0.5" width="164.89" height="126.3" fill="none" stroke="#acd6f1" stroke-miterlimit="10"/></g></g></svg>
				</a>
			</div>
		<div class="quart">
				<a href="#quart" class="size-activator">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113.44 127.3"><g id="Layer_2" data-name="Layer 2"><g id="svg2"><g id="Quart"><path id="Bkgrnd" d="M17.12,120.7l.59,5.62H95.34L96,112.26c.33-7.73.81-18.45,1.07-23.81s.74-15.61,1.07-22.77l.62-13,1.32-.76V40.82H13.1V51.27l2,1.61v6.53c0,3.6.22,10.92.49,16.29l.49,9.75,1,35.25" fill="#1c9fd7"/><g id="Text"><path d="M36.6,27.75H27.09a10.06,10.06,0,0,1-3.4-.55A7.73,7.73,0,0,1,21,25.62a7.5,7.5,0,0,1-1.77-2.53,8.44,8.44,0,0,1-.64-3.39,8.11,8.11,0,0,1,.65-3.26A7.73,7.73,0,0,1,21,13.89a8,8,0,0,1,2.66-1.65A9.1,9.1,0,0,1,27,11.65a8.89,8.89,0,0,1,3.28.6,8.15,8.15,0,0,1,2.66,1.66,7.77,7.77,0,0,1,1.78,2.54,7.9,7.9,0,0,1,.66,3.25,6.88,6.88,0,0,1-.19,1.64,6.11,6.11,0,0,1-.57,1.51A4.88,4.88,0,0,1,32.21,25v.05H36.6v2.66" fill="#1c9fd7"/><path d="M51.54,21.7a7.61,7.61,0,0,1-.42,2.57,5.76,5.76,0,0,1-1.25,2,5.9,5.9,0,0,1-2.07,1.35,8.65,8.65,0,0,1-5.74,0A6,6,0,0,1,40,26.31a5.76,5.76,0,0,1-1.25-2,7.61,7.61,0,0,1-.42-2.57V12.05h3.46v9.51A3.68,3.68,0,0,0,42,22.91,3.24,3.24,0,0,0,42.65,24a3,3,0,0,0,1,.71,3.18,3.18,0,0,0,1.28.25,3,3,0,0,0,1.26-.25,3,3,0,0,0,1-.71,3.09,3.09,0,0,0,.65-1.08,3.68,3.68,0,0,0,.24-1.35V12.05h3.45V21.7" fill="#1c9fd7"/><path d="M59.9,12.05h2.86l6.83,15.7h-3.9l-1.35-3.33h-6.1l-1.31,3.33H53.12l6.78-15.7" fill="#1c9fd7"/><path d="M71.16,12.05h6.08a11.06,11.06,0,0,1,2.27.23,5.54,5.54,0,0,1,1.89.78,4,4,0,0,1,1.28,1.46,5,5,0,0,1,.48,2.3,4.55,4.55,0,0,1-.87,2.82,3.88,3.88,0,0,1-2.52,1.48l4,6.63H79.61l-3.28-6.28H74.62v6.28H71.16V12.05" fill="#1c9fd7"/><path d="M88.17,15.11H83.69V12.05H96.1v3.06H91.63V27.75H88.17V15.11" fill="#1c9fd7"/></g><path d="M22.17,19.7a4.69,4.69,0,0,0,.38,1.91,4.79,4.79,0,0,0,1,1.54,4.86,4.86,0,0,0,1.52,1,4.58,4.58,0,0,0,1.86.38,4.65,4.65,0,0,0,1.86-.38,4.81,4.81,0,0,0,2.55-2.57,5,5,0,0,0,0-3.82,4.81,4.81,0,0,0-2.55-2.57A4.64,4.64,0,0,0,27,14.85a4.58,4.58,0,0,0-1.86.37,4.86,4.86,0,0,0-1.52,1,4.79,4.79,0,0,0-1,1.54,4.69,4.69,0,0,0-.38,1.91" fill="#acd6f1"/><path d="M74.62,18.55h2c.31,0,.64,0,1,0a2.76,2.76,0,0,0,.94-.2,1.63,1.63,0,0,0,.7-.52,1.6,1.6,0,0,0,.28-1,1.54,1.54,0,0,0-.87-1.5,2.79,2.79,0,0,0-.86-.26,8,8,0,0,0-1-.06H74.62v3.57" fill="#acd6f1"/><path d="M61.23,16.62l-1.9,4.88h3.83l-1.93-4.88" fill="#acd6f1"/><path d="M18.86,48.5a5.75,5.75,0,0,1,2,4.37v6.51l0,3.23.1,4.11.16,4.45.18,4.26.49,9.79,1,35.09,0,.25H89.82l.37-8.55,1.07-23.83,1.08-22.77.61-13A5.85,5.85,0,0,1,94.27,49V46.58H18.86V48.5" fill="#acd6f1"/></g><rect x="0.5" y="0.5" width="112.44" height="126.3" fill="none" stroke="#acd6f1" stroke-miterlimit="10"/></g></g></svg>
				</a>
			</div>
		<div class="pint">
			<a href="#pint" class="size-activator">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111.22 127.3"><g id="Layer_2" data-name="Layer 2"><g id="svg2"><g id="Pint"><path id="Bkgrnd" d="M24.4,126l58,.4,2.48.4,9.2-62,.8-2.8H97.2V49.2h-84V61.92l2.64,1.52L24.32,124l.08,2" fill="#1c9fd7"/><g id="Text"><path d="M30,12.05h5.83a12.08,12.08,0,0,1,2.31.22,5.39,5.39,0,0,1,1.9.77,3.87,3.87,0,0,1,1.28,1.46,5,5,0,0,1,.48,2.32,5.42,5.42,0,0,1-.44,2.3,3.91,3.91,0,0,1-1.22,1.49,5,5,0,0,1-1.84.79,11.16,11.16,0,0,1-2.31.23H33.5v6.12H30V12.05" fill="#1c9fd7"/><path d="M44,12.05h3.46v15.7H44V12.05" fill="#1c9fd7"/><path d="M50.57,12.05h4.7L62,23h0V12.05h3.46v15.7H60.93L54.08,16.57h0V27.75H50.57V12.05" fill="#1c9fd7"/><path d="M71.68,15.11H67.2V12.05H79.62v3.06H75.14V27.75H71.68V15.11" fill="#1c9fd7"/></g><path d="M33.5,18.7h2.31a4.43,4.43,0,0,0,.9-.09,2.25,2.25,0,0,0,.77-.3,1.61,1.61,0,0,0,.56-.57,1.84,1.84,0,0,0,.21-.92,1.62,1.62,0,0,0-.28-1,1.79,1.79,0,0,0-.71-.56,3.23,3.23,0,0,0-1-.26c-.36,0-.7,0-1,0H33.5V18.7" fill="#acd6f1"/><path d="M80.08,120.4,89.2,59.2v-.64c0-.32.56-.64,1.2-.64h1.2v-3.2H18.8v3.2H21l5.84,42,2.8,20.4H80.08" fill="#acd6f1"/></g><rect x="0.5" y="0.5" width="110.22" height="126.3" fill="none" stroke="#acd6f1" stroke-miterlimit="10"/></g></g></svg>
				</a>
			</div>
		<div class="cup">
				<a href="#cup" class="size-activator">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95.96 127.3"><g id="Layer_2" data-name="Layer 2"><g id="svg2"><g id="Cup"><path id="Bkgrnd" d="M21,124.07v1.73H75.74l.72-3.75c1.79-9.36,3-16.18,3.81-21.37.48-3.1,1-6.39,1.2-7.32l.33-1.68H84V87.93H12.77V91.5l2.69.71,4.18,23.84.69,3.15a29.8,29.8,0,0,1,.69,4.87" fill="#1c9fd7"/><g id="Text"><path d="M33.05,15.13a3.39,3.39,0,0,0-1.26-1,4.14,4.14,0,0,0-1.71-.33,4.34,4.34,0,0,0-1.81.37,4.09,4.09,0,0,0-1.44,1.06,4.84,4.84,0,0,0-1,1.6,6.2,6.2,0,0,0,0,4.05,5.06,5.06,0,0,0,.95,1.59,4.23,4.23,0,0,0,1.4,1.06A4.09,4.09,0,0,0,30,24a3.88,3.88,0,0,0,1.89-.44,3.65,3.65,0,0,0,1.35-1.24l2.88,2.15a5.93,5.93,0,0,1-2.52,2.06,7.72,7.72,0,0,1-3.15.67A9.73,9.73,0,0,1,27,26.57a7.69,7.69,0,0,1-2.69-1.65,7.57,7.57,0,0,1-1.76-2.61,8.85,8.85,0,0,1-.63-3.41,8.85,8.85,0,0,1,.63-3.41,7.57,7.57,0,0,1,1.76-2.61A7.69,7.69,0,0,1,27,11.23a9.5,9.5,0,0,1,3.39-.58,8.4,8.4,0,0,1,1.38.12,8.78,8.78,0,0,1,1.42.39,6.38,6.38,0,0,1,1.34.71A5.43,5.43,0,0,1,35.71,13l-2.66,2.17" fill="#1c9fd7"/><path d="M51.2,20.7a7.61,7.61,0,0,1-.42,2.57,5.76,5.76,0,0,1-1.25,2,5.9,5.9,0,0,1-2.07,1.35,7.9,7.9,0,0,1-2.86.49,8,8,0,0,1-2.89-.49,6,6,0,0,1-2.07-1.35,5.76,5.76,0,0,1-1.25-2A7.61,7.61,0,0,1,38,20.7V11.05h3.46v9.51a3.68,3.68,0,0,0,.23,1.35A3.09,3.09,0,0,0,42.31,23a3,3,0,0,0,1,.71A3.18,3.18,0,0,0,44.6,24a3,3,0,0,0,2.91-2,3.68,3.68,0,0,0,.23-1.35V11.05H51.2V20.7" fill="#1c9fd7"/><path d="M54.4,11.05h5.83a12,12,0,0,1,2.3.22,5.31,5.31,0,0,1,1.9.77,3.78,3.78,0,0,1,1.28,1.46,5,5,0,0,1,.48,2.32,5.42,5.42,0,0,1-.44,2.3,3.91,3.91,0,0,1-1.22,1.49,5,5,0,0,1-1.84.79,11.16,11.16,0,0,1-2.31.23H57.85v6.12H54.4V11.05" fill="#1c9fd7"/></g><path d="M57.85,17.7h2.31a4.43,4.43,0,0,0,.9-.09,2.17,2.17,0,0,0,.77-.3,1.61,1.61,0,0,0,.56-.57,1.84,1.84,0,0,0,.21-.92,1.55,1.55,0,0,0-.28-1,1.79,1.79,0,0,0-.71-.56,3.23,3.23,0,0,0-1-.26c-.36,0-.7,0-1,0H57.85V17.7" fill="#acd6f1"/><path d="M71.25,120.69l0-1,3.49-18.92L75.61,93H21.94v1.51l3.58,19.1,1.38,7.1H71.25" fill="#acd6f1"/></g><rect x="0.5" y="0.5" width="94.96" height="126.3" fill="none" stroke="#acd6f1" stroke-miterlimit="10"/></g></g></svg>
				</a>
			</div>
		</div>
	</div>

	<?php $gallonImg =  get_field ('gallon_image'); ?>
	<?php $scroundImg =  get_field ('scround_image'); ?>
	<?php $quartImg =  get_field ('quart_image'); ?>
	<?php $pintImg =  get_field ('pint_image'); ?>
	<?php $cupImg =  get_field ('cup_image'); ?>
	<div class= "descriptors">
		<div class="prod-flav">
		<?php the_title();?>
		<p class="prod-desc"><?php echo($description)?></p>
		</div>
	<div class="product-images">
		<div data-size="3gal" class="main-images hide">
			<img src="<?php echo($gallonImg);?>" class="gallonImg" />
		</div>
		<div data-size="scround" class="main-images ">
			<img src="<?php echo($scroundImg);?>" class="gallonImg" />
		</div>
		<div data-size="quart" class="main-images hide">
			<img src="<?php echo($quartImg);?>" class="gallonImg" />
		</div>
		<div data-size="pint" class="main-images hide">
			<img src="<?php echo($pintImg);?>" class="gallonImg" />
		</div>
		<div data-size="cup" class="main-images hide">
			<img src="<?php echo($cupImg);?>" class="gallonImg" />
		</div>
	</div>
		<div class="allergyIcons">
				

				<?php

				// Load field settings and values.
				$allergyIcons = get_field_object('allergy_icons');
				$selectedIcons = $allergyIcons['choices'];

				// Display labels.
				if( $selectedIcons ): ?>
					<?php foreach( $selectedIcons as $key => $value ): ?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/<?php echo $key;?>.png" alt="<?php echo $value;?>"/> 
					<?php endforeach; ?>
				<?php endif; ?>


		</div>
	</div>

	<div class="product-info">
		<div class="nutritionalfactsall">
			<section data-size="3gal" class="performance-facts hide">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - 3Gal</h1>
					<p>Serving Size 1/2 cup (about 82g)
						<p>Serving Per Container 8</p>
				</header>
				<table class="performance-facts__table">
					<thead>
						<tr>
							<th colspan="3" class="small-info">
								Amount Per Serving
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">
								<b>Calories</b>
								200
							</th>
							<td>
								Calories from Fat
								130
							</td>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								14g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								9g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								0g
							</th>
							<td>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								55mg
							</th>
							<td>
								<b>18%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								40mg
							</th>
							<td>
								<b>2%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								17g
							</th>
							<td>
								<b>6%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								1g
							</th>
							<td>
								<b>4%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								14g
							</th>
							<td>
							</td>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								3g
							</th>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								10%
							</td>
							<td>
								Vitamin C
								0%
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								10%
							</td>
							<td>
								Iron
								6%
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

				<table class="performance-facts__table--small small-info">
					<thead>
						<tr>
							<td colspan="2"></td>
							<th>Calories:</th>
							<th>2,000</th>
							<th>2,500</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">Total Fat</th>
							<td>Less than</td>
							<td>65g</td>
							<td>80g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th>Saturated Fat</th>
							<td>Less than</td>
							<td>20g</td>
							<td>25g</td>
						</tr>
						<tr>
							<th colspan="2">Cholesterol</th>
							<td>Less than</td>
							<td>300mg</td>
							<td>300 mg</td>
						</tr>
						<tr>
							<th colspan="2">Sodium</th>
							<td>Less than</td>
							<td>2,400mg</td>
							<td>2,400mg</td>
						</tr>
						<tr>
							<th colspan="3">Total Carbohydrate</th>
							<td>300g</td>
							<td>375g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th colspan="2">Dietary Fiber</th>
							<td>25g</td>
							<td>30g</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">
					Calories per gram:
				</p>
				<p class="small-info text-center">
					Fat 9
					&bull;
					Carbohydrate 4
					&bull;
					Protein 4
				</p>

			</section>
			<section data-size="scround" class="performance-facts">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - scround</h1>
					<p>Serving Size 1/2 cup (about 82g)
						<p>Serving Per Container 8</p>
				</header>
				<table class="performance-facts__table">
					<thead>
						<tr>
							<th colspan="3" class="small-info">
								Amount Per Serving
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">
								<b>Calories</b>
								200
							</th>
							<td>
								Calories from Fat
								130
							</td>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								14g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								9g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								0g
							</th>
							<td>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								55mg
							</th>
							<td>
								<b>18%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								40mg
							</th>
							<td>
								<b>2%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								17g
							</th>
							<td>
								<b>6%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								1g
							</th>
							<td>
								<b>4%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								14g
							</th>
							<td>
							</td>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								3g
							</th>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								10%
							</td>
							<td>
								Vitamin C
								0%
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								10%
							</td>
							<td>
								Iron
								6%
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

				<table class="performance-facts__table--small small-info">
					<thead>
						<tr>
							<td colspan="2"></td>
							<th>Calories:</th>
							<th>2,000</th>
							<th>2,500</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">Total Fat</th>
							<td>Less than</td>
							<td>65g</td>
							<td>80g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th>Saturated Fat</th>
							<td>Less than</td>
							<td>20g</td>
							<td>25g</td>
						</tr>
						<tr>
							<th colspan="2">Cholesterol</th>
							<td>Less than</td>
							<td>300mg</td>
							<td>300 mg</td>
						</tr>
						<tr>
							<th colspan="2">Sodium</th>
							<td>Less than</td>
							<td>2,400mg</td>
							<td>2,400mg</td>
						</tr>
						<tr>
							<th colspan="3">Total Carbohydrate</th>
							<td>300g</td>
							<td>375g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th colspan="2">Dietary Fiber</th>
							<td>25g</td>
							<td>30g</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">
					Calories per gram:
				</p>
				<p class="small-info text-center">
					Fat 9
					&bull;
					Carbohydrate 4
					&bull;
					Protein 4
				</p>

			</section>
			<section data-size="quart" class="performance-facts">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - quart</h1>
					<p>Serving Size 1/2 cup (about 82g)
						<p>Serving Per Container 8</p>
				</header>
				<table class="performance-facts__table">
					<thead>
						<tr>
							<th colspan="3" class="small-info">
								Amount Per Serving
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">
								<b>Calories</b>
								200
							</th>
							<td>
								Calories from Fat
								130
							</td>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								14g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								9g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								0g
							</th>
							<td>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								55mg
							</th>
							<td>
								<b>18%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								40mg
							</th>
							<td>
								<b>2%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								17g
							</th>
							<td>
								<b>6%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								1g
							</th>
							<td>
								<b>4%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								14g
							</th>
							<td>
							</td>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								3g
							</th>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								10%
							</td>
							<td>
								Vitamin C
								0%
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								10%
							</td>
							<td>
								Iron
								6%
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

				<table class="performance-facts__table--small small-info">
					<thead>
						<tr>
							<td colspan="2"></td>
							<th>Calories:</th>
							<th>2,000</th>
							<th>2,500</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">Total Fat</th>
							<td>Less than</td>
							<td>65g</td>
							<td>80g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th>Saturated Fat</th>
							<td>Less than</td>
							<td>20g</td>
							<td>25g</td>
						</tr>
						<tr>
							<th colspan="2">Cholesterol</th>
							<td>Less than</td>
							<td>300mg</td>
							<td>300 mg</td>
						</tr>
						<tr>
							<th colspan="2">Sodium</th>
							<td>Less than</td>
							<td>2,400mg</td>
							<td>2,400mg</td>
						</tr>
						<tr>
							<th colspan="3">Total Carbohydrate</th>
							<td>300g</td>
							<td>375g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th colspan="2">Dietary Fiber</th>
							<td>25g</td>
							<td>30g</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">
					Calories per gram:
				</p>
				<p class="small-info text-center">
					Fat 9
					&bull;
					Carbohydrate 4
					&bull;
					Protein 4
				</p>

			</section>
			<section data-size="pint" class="performance-facts hide">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - pint</h1>
					<p>Serving Size 1/2 cup (about 82g)
						<p>Serving Per Container 8</p>
				</header>
				<table class="performance-facts__table">
					<thead>
						<tr>
							<th colspan="3" class="small-info">
								Amount Per Serving
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">
								<b>Calories</b>
								200
							</th>
							<td>
								Calories from Fat
								130
							</td>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								14g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								9g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								0g
							</th>
							<td>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								55mg
							</th>
							<td>
								<b>18%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								40mg
							</th>
							<td>
								<b>2%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								17g
							</th>
							<td>
								<b>6%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								1g
							</th>
							<td>
								<b>4%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								14g
							</th>
							<td>
							</td>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								3g
							</th>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								10%
							</td>
							<td>
								Vitamin C
								0%
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								10%
							</td>
							<td>
								Iron
								6%
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

				<table class="performance-facts__table--small small-info">
					<thead>
						<tr>
							<td colspan="2"></td>
							<th>Calories:</th>
							<th>2,000</th>
							<th>2,500</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">Total Fat</th>
							<td>Less than</td>
							<td>65g</td>
							<td>80g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th>Saturated Fat</th>
							<td>Less than</td>
							<td>20g</td>
							<td>25g</td>
						</tr>
						<tr>
							<th colspan="2">Cholesterol</th>
							<td>Less than</td>
							<td>300mg</td>
							<td>300 mg</td>
						</tr>
						<tr>
							<th colspan="2">Sodium</th>
							<td>Less than</td>
							<td>2,400mg</td>
							<td>2,400mg</td>
						</tr>
						<tr>
							<th colspan="3">Total Carbohydrate</th>
							<td>300g</td>
							<td>375g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th colspan="2">Dietary Fiber</th>
							<td>25g</td>
							<td>30g</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">
					Calories per gram:
				</p>
				<p class="small-info text-center">
					Fat 9
					&bull;
					Carbohydrate 4
					&bull;
					Protein 4
				</p>

			</section>
			<section data-size="cup" class="performance-facts hide">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - CUP</h1>
					<p>Serving Size 1/2 cup (about 82g)
						<p>Serving Per Container 8</p>
				</header>
				<table class="performance-facts__table">
					<thead>
						<tr>
							<th colspan="3" class="small-info">
								Amount Per Serving
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">
								<b>Calories</b>
								200
							</th>
							<td>
								Calories from Fat
								130
							</td>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								14g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								9g
							</th>
							<td>
								<b>22%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								0g
							</th>
							<td>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								55mg
							</th>
							<td>
								<b>18%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								40mg
							</th>
							<td>
								<b>2%</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								17g
							</th>
							<td>
								<b>6%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								1g
							</th>
							<td>
								<b>4%</b>
							</td>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								14g
							</th>
							<td>
							</td>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								3g
							</th>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								10%
							</td>
							<td>
								Vitamin C
								0%
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								10%
							</td>
							<td>
								Iron
								6%
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>

				<table class="performance-facts__table--small small-info">
					<thead>
						<tr>
							<td colspan="2"></td>
							<th>Calories:</th>
							<th>2,000</th>
							<th>2,500</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th colspan="2">Total Fat</th>
							<td>Less than</td>
							<td>65g</td>
							<td>80g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th>Saturated Fat</th>
							<td>Less than</td>
							<td>20g</td>
							<td>25g</td>
						</tr>
						<tr>
							<th colspan="2">Cholesterol</th>
							<td>Less than</td>
							<td>300mg</td>
							<td>300 mg</td>
						</tr>
						<tr>
							<th colspan="2">Sodium</th>
							<td>Less than</td>
							<td>2,400mg</td>
							<td>2,400mg</td>
						</tr>
						<tr>
							<th colspan="3">Total Carbohydrate</th>
							<td>300g</td>
							<td>375g</td>
						</tr>
						<tr>
							<td class="blank-cell"></td>
							<th colspan="2">Dietary Fiber</th>
							<td>25g</td>
							<td>30g</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">
					Calories per gram:
				</p>
				<p class="small-info text-center">
					Fat 9
					&bull;
					Carbohydrate 4
					&bull;
					Protein 4
				</p>

			</section>
		</div>
		<div class="ingredients">
			<h3>Ingredients</h3>
			<p><?php the_field('ingredients'); ?></p>
			<h3>Allergy Information</h3>
			<p>Contains: <?php the_field('allergens'); ?></p>
			<small>Note: Nutritional properties of products intended for sale in high altitude areas may vary due to specific manufacturing practices used to maintain product quality. Please refer to the nutrition facts panel on package for current details.</small>
		</div>
	<div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
