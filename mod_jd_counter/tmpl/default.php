<?php
/**
 * @package		JD Counter Module
 * @Author		JoomDev
 * @license		GNU/GPL,
 * @link		www.joomdev.com
 */
defined('_JEXEC') or die;

// GET PARAM VALUE FROM XML
$counter_numbers = $params->get('numbers', []); 
$counterSignfontColor = $params->get('counterSignfontColor','black'); 
$titlefontColor = $params->get('titlefontColor','gray'); 
$enable_animation = $params->get('enable_animation','1'); 

// INLUCDE CSS INTO HEADER AND MAKE CSS DNYMIC
$doc = JFactory::getDocument();
$style='.number-counter .counter .number {color:'.$counterSignfontColor.';}'.'.number-counter .counter .count-text {color:'.$titlefontColor.';}';
$doc->addStyleDeclaration($style);

// lOAD	JAVASCRIPT
if($enable_animation){
	JHTML::script('modules/mod_jd_counter/assets/js/mod_jd_counter.js');
}
// lOAD	CSS
JHTML::stylesheet('modules/mod_jd_counter/assets/css/mod_jd_counter.css');
?>
<section class="bg-white">
	<div class="container text-center">
		<div class="py-md-6 py-4 number-counter">
			<div class="row text-center">
				<?php $i=1; foreach($counter_numbers as $counter_number) :?>
					<div class="col-lg-3 col-sm-6">
						<div class="counter mb-4 mb-lg-0 border-lg-right">
							<h3 class="number">
								<strong><span class="count"><?php echo $counter_number->counter_number;?></span> <?php echo $counter_number->counter_sign?></strong>
							</h3>
							<h5 class="count-text mb-0"><?php echo $counter_number->counter_title; ?></h5>
						</div>
					</div>
				<?php $i++; endforeach; ?>
			</div>
		</div>
	</div>
</section>