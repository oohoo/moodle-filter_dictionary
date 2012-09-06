﻿<?php
/**
 * *************************************************************************
 * *                           Pop-up Dictionary                          **
 * *************************************************************************
 * @package     filter                                                    **
 * @subpackage  dictionary                                                **
 * @name        dictionary                                                **
 * @copyright   oohoo.biz                                                 **
 * @link        http://oohoo.biz                                          **
 * @author      Patrick Thibaudeau                                        **
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later  **
 * *************************************************************************
 * ************************************************************************ */
$items = array();
$items[] = new admin_setting_configtext('filter_dictionary_name', '', get_string('dictionaryname', 'block_dictionary'), 'Larousse', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri', '', get_string('dictionaryurl', 'block_dictionary'), 'http://www.larousse.fr/encyclopedie/rechercher/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name1', '', get_string('dictionaryname', 'block_dictionary'), 'Dictionary.com', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri1', '', get_string('dictionaryurl', 'block_dictionary'), 'http://dictionary.reference.com/browse/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name2', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (english)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri2', '', get_string('dictionaryurl', 'block_dictionary'), 'http://en.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name3', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (français)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri3', '', get_string('dictionaryurl', 'block_dictionary'), 'http://fr.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name4', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri4', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name5', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri5', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name6', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri6', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name7', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri7', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name8', '', get_string('dictionaryname', 'block_dictionary'), 'Autre', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri8', '', get_string('dictionaryurl', 'block_dictionary'), '', PARAM_RAW);

foreach ($items as $item)
{
    $settings->add($item);
}
?>