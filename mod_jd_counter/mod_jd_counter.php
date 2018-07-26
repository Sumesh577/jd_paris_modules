<?php
/**
 * @package		JD Counter Module
 * @Author		JoomDev
 * @license		GNU/GPL,
 * @link		www.joomdev.com
 */
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$layout = $params->get('layout', 'default');
require JModuleHelper::getLayoutPath('mod_jd_counter', $layout);
