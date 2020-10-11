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

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

global $product;
$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

$sizes = get_field('sizes');
$scround = ccff_find_size('scround');
$defaultSize = $scround ? 'scround': $sizes[0]['size'];

$terms = get_the_terms( $product->ID, 'product_cat' );
$catSlugs = [];
foreach($terms as $term) {
	$catSlugs[] = $term->slug;
}

function render_pint_fact($slug, $size, $beforeHTML, $afterHTML) {
	if ( !isset($size[$slug]) ) return null;
	$html = '';
	$html .= $beforeHTML ? $beforeHTML : '';
	$html .= $size[$slug];
	$html .= $afterHTML ? $afterHTML : '';
	return $html;
}

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<?php foreach ($sizes as $size) { 
		$hiddenClass = $size['size']===$defaultSize ? '':'hide';
	?>
		<div class="banner <?php echo $hiddenClass?>" data-size="<?php echo $size['size']?>">
			<div>
				<div class="featureImg">
					<div class="product-images">
						<div data-size="<?php echo $size['size'];?>" class="main-images">
							<img src="<?php echo $size['image'];?>" class="mainImg"/>
						</div>
					</div>
				</div>
			</div>
			<div class= "descriptors">
					<div>
							<h1 class=prod-flav><?php the_title() ?></h1>
							<p class="prod-desc"><?php echo $size['product_description'];?></p>
					</div>	
			</div>
				<div class="wmcontainer">
					<img src="/wp-content/uploads/2020/07/wmfo-1.png"class="wmfo"/>
				</div>
		</div>
	<?php } ?>
		<div class="size-section">
			<h2 class="size-text">Choose a Size</h2>
			<div class="svgbtns-container">
				<?php foreach($sizes as $size) {
					if (!$size['size']) continue;
					echo '<div class="'.$size['size'].'">';
						include get_stylesheet_directory() .'/includes/size_activator_' . $size['size'] . '.php';					
					echo '</div>';
				} ?>
			</div>
		</div>
	</div>

	<?php
		if ( in_array('4oz_cup', $catSlugs)) {
			echo 'Sold in 4oz cups';
		}
		if ( in_array('8_pack_bag', $catSlugs)) {
			echo 'Sold in 8-pack bags';
		}
	?>


	<?php foreach ($sizes as $size) {	
		$isPint = $size === 'pint';
		$hiddenClass = $size['size'] === $defaultSize ? '':'hide';
	?>		
	<div class="product-info <?php echo $hiddenClass ?>" data-size="<?php echo $size['size']; ?>">
		<div class="nutritionalfactsall">
			<section class="performance-facts">
				<header class="performance-facts__header">
					<h1 class="performance-facts__title">Nutrition Facts</h1>
					<th colspan="2">
						<p>Serving Size <?php echo $size['serving_size'];?> (about 82g)</p>
						</th>
						<td>
						<p>Serving Per Container <?php echo $size['servings_per_container'];?></p>
						</td>
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
								<?php echo $size['calories_per_serving'];?>
							</th>
							<td>
								Calories from Fat
								130
							</td>
							<?php echo render_pint_fact('calories_per_pint', $size, '<td>', '</td>'); ?>
						</tr>
						<tr class="thick-row">
							<td colspan="3" class="small-info">
								<b>% Daily Value*</b>
							</td>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Fat</b>
								<?php echo $size['total_fat_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['total_fat_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('total_fat_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Saturated Fat
								<?php echo $size['saturated_fat_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['saturated_fat_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('saturated_fat_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Trans Fat
								<?php echo $size['trans_fat_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['trans_fat_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('trans_fat_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<th colspan="2">
								<b>Cholesterol</b>
								<?php echo $size['cholesterol_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['cholesterol_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('cholesterol_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<th colspan="2">
								<b>Sodium</b>
								<?php echo $size['sodium_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['sodium_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('sodium_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<th colspan="2">
								<b>Total Carbohydrate</b>
								<?php echo $size['total_carbohydrate_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['carbohydrate_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('carbohydrate_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Dietary Fiber
								<?php echo $size['dietary_fiber_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['dietary_fiber_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('dietary_fiber_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr>
							<td class="blank-cell">
							</td>
							<th>
								Sugars
								<?php echo $size['total_sugars_per_serving'];?>
							</th>
							<td>
							<b><?php echo $size['dietary_fiber_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('dietary_fiber_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
						<tr class="thick-end">
							<th colspan="2">
								<b>Protein</b>
								<?php echo $size['protein_per_serving'];?>
							</th>
							<td>
								<b><?php echo $size['protein_daily_value_per_serving'];?></b>
							</td>
							<?php echo render_pint_fact('protein_daily_value_per_pint', $size, '<td><b>', '</b></td>'); ?>
						</tr>
					</tbody>
				</table>

				<table class="performance-facts__table--grid">
					<tbody>
						<tr>
							<td colspan="2">
								Vitamin A
								<?php echo $size['vitamin_a'];?>
							</td>
							<td>
								Vitamin D
								<?php echo $size['vitamind_per_serving'];?>
							</td>
						</tr>
						<tr class="thin-end">
							<td colspan="2">
								Calcium
								<?php echo $size['calcium_per_serving'];?>
							</td>
							<td>
								Iron
								<?php echo $size['iron_per_serving'];?>
							</td>
						</tr>
					</tbody>
				</table>

				<p class="small-info">* Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs:</p>


			</section>
		
		</div>
		
		<div class="ingredients">
			<h3>Ingredients</h3>
			<p>
			<?php echo $size['ingredients'];?>
			</p>
			<h3>Allergy Information</h3>
			<p>Contains: 
			<span class="allergens-text">
			<?php echo $size['allergens'];?>	
			</span></p><br />
			<small>Note: Nutritional properties of products intended for sale in high altitude areas may vary due to specific manufacturing practices used to maintain product quality. Please refer to the nutrition facts panel on package for current details.</small>
				<div class="allergyIcons">

				
					<?php foreach( $size['allergy_icons'] as $icon): ?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/<?php echo $icon;?>.png" alt="<?php echo $icon;?>"/> 
					<?php endforeach; ?>

				</div>
				<div class ="findContainer" >
					<div class="findUs">Find Cedar Crest near you!</div>
						<div class="sim-btn-group product-find"><a href="https://cedarcrestsite.wpengine.com/retail">Retail</a><a href="https://cedarcrestsite.wpengine.com/parlor-locator/">PARLORS</a>
						</div>	
				</div>	
			</div>
		</div>
	<?php } ?>
		
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
