<?php 
/**
 * gForm component: Field Page
 * 
 * @package TourismTiger_Theme
 * @author  tourismtiger
 */

$field             = $GLOBALS['field'];
$field['pageNext'] = $field['pageNumber'];
?>

			<div class="gform-pagination">
				<button 
					type="button"
					class="gform-pagination__btn gform-pagination__next button" 
					data-goto="<?=$field['pageNext'];?>"><?=$field['nextButton']['text'];?></button>
			</div>

        </div> <!--  div.gform-field__container -->
    </li> <!-- li -->
</ul><!-- ul.gform-body__fields -->

<ul class="gform-body__fields" data-page="<?=$field['pageNumber'];?>">
	<li style="display: none;">
		<div>