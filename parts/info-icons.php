<?php
	//Let's get the variables we need
	$squarefeet = property_information_get_meta( 'property_information_squarefeet' );
	$bedrooms = property_information_get_meta( 'property_information_bedrooms' );
	$bathrooms = property_information_get_meta( 'property_information_bathrooms' );
	$price = property_information_get_meta( 'property_information_price' );
?>
<div class="info-icons">
    <?php if($squarefeet != '') : ?>
        <span class="squarefeet"><i class="fa fa-home"></i> <?php echo $squarefeet; ?> sq ft</span>
    <?php endif; ?>
    <?php if($bedrooms != '') : ?>
        <span class="bedrooms"><i class="fa fa-bed"></i> <?php echo $bedrooms; ?></span>
    <?php endif; ?>
    <?php if($bathrooms != '') : ?>
        <span class="bathrooms"><i class="fa fa-tint"></i> <?php echo $bathrooms; ?></span>
    <?php endif; ?>
    <?php if($price != '') : ?>
        <span class="price"><i class="fa fa-money"></i> <?php echo $price; ?></span>
    <?php endif; ?>
</div>