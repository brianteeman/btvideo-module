<?php
/**
 * BT-Video Module
 *
 * @author brian@teeman.net
 * @copyright Copyright (c) 2020
 * @license GNU Public License v2
 * @link https://brian.teeman.net
 */


defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$str = $params->get('videoid');

require JModuleHelper::getLayoutPath('mod_btvideo', $params->get('layout', 'default'));