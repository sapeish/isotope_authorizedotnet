<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009-2011
 * @author     Blair Winans <blair@winanscreative.com>
 * @author     Adam Fisher <adam@winanscreative.com>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */



/**
 * Payment modules
 */
$GLOBALS['ISO_PAY']['authnet_dpm'] = 'PaymentAuthNetDPM';


/**
 * Steps that will allow the payment method to continue
 */
$GLOBALS['ISO_CHECKOUT_STEPS_PASS'] = array
(
	'process',
	'complete',
	'review',
);


?>