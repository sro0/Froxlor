<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Settings
 * @version    $Id: $
 */

function getIntervalOptions()
{
	global $db, $lng;

	$query = "SELECT DISTINCT `interval` FROM `" . TABLE_PANEL_CRONRUNS . "` ORDER BY `interval` ASC;";
	$result = $db->query($query);
	$cron_intervals = array();

	$cron_intervals['0'] = $lng['panel']['off'];

	while($row = $db->fetch_array($result))
	{
		$cron_intervals[$row['interval']] = $row['interval'];
	}
	
	return $cron_intervals;
}
