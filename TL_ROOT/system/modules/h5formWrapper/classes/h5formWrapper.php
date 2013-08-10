<?php

/**
 * h5formWrapper
 *
 * @copyright  IT Solutions Johannes Gilges 2013 <http://www.itsolutions-gilges.de>
 * @author     Johannes Gilges <johannes.gilges@itsolutions-gilges.de>
 * @package    h5formWrapper
 * @license    LGPL 
 * @filesource
 */
 
namespace itsolutions;

class h5formWrapper {
	
    public function run(\PageModel $objPage, \LayoutModel &$objLayout, \PageRegular $objPageRegular) {
    	
		$GLOBALS['TL_JAVASCRIPT'][] = 'assets/h5form/2.11.2/js/jquery.h5form-2.11.2.min.js|static';
		$GLOBALS['TL_FRAMEWORK_CSS'][] = 'assets/h5form/2.11.2/css/jquery.h5form-2.11.2.css';
		$GLOBALS['TL_HEAD'][] ="
			<script type='text/javascript'>
				$(function() {
					$('form').h5form({
						msgEmpty: 'Bitte geben Sie hier einen Wert an.',
						msgUnselect: 'Bitte waehlen Sie hier einen Wert aus.',
						msgUncheck: 'Bitte aktivieren Sie diese Checkbox.',
					msgPattern: 'Does not match the required pattern.'
					});
				});
			</script>";
    }
}
