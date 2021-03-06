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
<<<<<<< HEAD
$scround = ccff_find_size('scround');
$defaultSize = $scround ? 'scround': $sizes[0]['size'];

$terms = get_the_terms( $product->ID, 'product_cat' );
$catSlugs = [];
foreach($terms as $term) {
	$catSlugs[] = $term->slug;
=======
// var_dump($sizes);

// var_dump( ccff_find_size('pint') );

if( have_rows('three_gallon') ):

    // Loop through rows.
    while( have_rows('three_gallon') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('allergens');
        // Do something...
		var_dump($sub_value);
    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;




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
>>>>>>> ff7313d6e2ba247b4bb6f9a6c971bddb682babbd
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
<<<<<<< HEAD
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
=======
	<div class="banner">
		<div>
			<div class="featureImg">
				<?php $gallonImg =  get_field ('gallon_image'); ?>
				<?php $scroundImg =  get_field ('scround_image'); ?>
				<?php $quartImg =  get_field ('quart_image'); ?>
				<?php $pintImg =  get_field ('pint_image'); ?>
				<?php $cupImg =  get_field ('cup_image'); ?>
				<?php $cupdesc =  get_field ('cup_desc'); ?>
				<div class="product-images">
					<div data-size="3gal" class="main-images hide">
						<img src="<?php echo($productImgs['gallon_image']);?>" class="gallonImg" />
					</div>
					<div data-size="scround" class="main-images ">
					<img src="<?php echo($productImgs['scround_image']);?>" class="scroundImg" />
					</div>
					<div data-size="quart" class="main-images hide">
					<img src="<?php echo($productImgs['quart_image']);?>" class="quartImg" />
					</div>
					<div data-size="pint" class="main-images hide">
					<img src="<?php echo($productImgs['pint_image']);?>" class="pintImg" />
					</div>
					<div data-size="cup" class="main-images hide">
					<img src="<?php echo($productImgs['cup_image']);?>" class="cupImg" />
				</div>
			</div>

		</div>
	</div>
				<div class= "descriptors">
					<div class="prod-flav">
						<?php the_title();?>
						<p class="prod-desc">
						<?php if ($cupdesc) { ?>
							<?php echo($cupdesc); ?></p>
						<?php } else { ?>
						<?php echo($description);?>
						<?php } ?>
					</div>
				</div>
				<div class="wmcontainer">
					<img src="https://cedar-crest.local/wp-content/uploads/2020/07/wmfo-1.png"class="wmfo"/>
				</div>
	</div>
		<div class="size-section">
			<div class="size-text">
				Choose a Size
			</div>
			<div class="svgbtns">
>>>>>>> ff7313d6e2ba247b4bb6f9a6c971bddb682babbd
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
<<<<<<< HEAD
		
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
=======
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


			</section>
			<section data-size="quart" class="performance-facts hide">
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

			</section>
		</div>
		
		<div class="ingredients">
			<h3>Ingredients</h3>
			<p><?php the_field('ingredients'); ?></p>
			<h3>Allergy Information</h3>
			<p>Contains: <?php the_field('allergens'); ?></p><br />
			<small>Note: Nutritional properties of products intended for sale in high altitude areas may vary due to specific manufacturing practices used to maintain product quality. Please refer to the nutrition facts panel on package for current details.</small>
			<div class="allergyIcons">

				<?php

				// Load field settings and values.
				$allergyIcons = get_field_object('allergy_icons');
				$selectedIcons = $allergyIcons['value'];

				// Display labels.
				if( $selectedIcons ): ?>
					<?php foreach( $selectedIcons as $key => $value ): ?>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/<?php echo $value;?>.png" alt="<?php echo $value;?>"/> 
					<?php endforeach; ?>
				<?php endif; ?>

				</div>

			<div class ="findContainer" >
				<div class="findUs">Find Cedar Crest near you!</div>
				<div class="sim-btn-group product-find"><a href="https://cedarcrestsite.wpengine.com/stores">STORES</a><a href="https://cedarcrestsite.wpengine.com/parlor-locator/">PARLORS</a>
			</div>	
>>>>>>> ff7313d6e2ba247b4bb6f9a6c971bddb682babbd
			</div>
			
		</div>
	<?php } ?>
		
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
