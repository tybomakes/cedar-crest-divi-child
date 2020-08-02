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
	"servings_per_containter",
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
test
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="banner">
		<div>
			<?php if ( has_post_thumbnail( $product->id ) ) {
				$attachment_ids[0] = get_post_thumbnail_id( $product->id );
				$attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); ?>    
				<img src="<?php echo $attachment[0] ; ?>" class="product-image" />
			<?php } ?>
		</div>
		<div class="banner-text">
			<?php 
				the_title( '<h1 class="product_title entry-title">', '</h1>' );
				echo $short_description;
			?>
		</div>
		<div>
			WISC LOGO
		</div>
	</div>
	<div class="size-tabs">
		<div>
			<h2>Find <?php echo get_the_title(); ?> near you.</h2>
			<p>Available in pints and tubs.</p>
		</div>
		<div>
			<a href="#tub" class="size-activator active">
				<img src="https://placehold.it/250" />
			</a>
		</div>
		<div>
			<a href="#pint" class="size-activator">
				<img src="https://placehold.it/250" />
			</a>
		</div>
		<div>
			<a href="#cup" class="size-activator">
				<img src="https://placehold.it/250" />
			</a>
		</div>
	</div>
	<div class="product-info">
		<div>
			<section data-size="tub" class="performance-facts">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts - TUB</h1>
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
					<h1 class="performance-facts__title">Nutrition Facts - PINT</h1>
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
		<div>
			<h3>Ingredients</h3>
			<p><?php the_field('ingredients'); ?></p>
			<h3>Allergy Information</h3>
			<p><?php the_field('allergens'); ?></p>
			<small>Note: Nutritional properties of products intended for sale in high altitude areas may vary due to specific manufacturing practices used to maintain product quality. Please refer to the nutrition facts panel on package for current details.</small>
		</div>
	<div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
