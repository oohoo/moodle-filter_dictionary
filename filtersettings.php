<?php
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
$items[] = new admin_setting_configtext('filter_dictionary_name4', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (español)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri4', '', get_string('dictionaryurl', 'block_dictionary'), 'http://es.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name5', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (português)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri5', '', get_string('dictionaryurl', 'block_dictionary'), 'http://pt.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name6', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (italiano)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri6', '', get_string('dictionaryurl', 'block_dictionary'), 'http://it.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name7', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (deutsch)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri7', '', get_string('dictionaryurl', 'block_dictionary'), 'http://de.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name8', '', get_string('dictionaryname', 'block_dictionary'), 'Wikipedia (polski)', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri8', '', get_string('dictionaryurl', 'block_dictionary'), 'http://pl.wikipedia.org/wiki/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name9', '', get_string('dictionaryname', 'block_dictionary'), 'Oxford dictionary', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri9', '', get_string('dictionaryurl', 'block_dictionary'), 'http://oxforddictionaries.com/definition/english/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name10', '', get_string('dictionaryname', 'block_dictionary'), 'Merriam-Webster', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri10', '', get_string('dictionaryurl', 'block_dictionary'), 'http://www.merriam-webster.com/dictionary/', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name11', '', get_string('dictionaryname', 'block_dictionary'), 'REAL  ACADEMIA  ESPAÑOLA', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri11', '', get_string('dictionaryurl', 'block_dictionary'), 'http://lema.rae.es/drae/?val=', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_name12', '', get_string('dictionaryname', 'block_dictionary'), 'Medline Plus', PARAM_RAW);
$items[] = new admin_setting_configtext('filter_dictionary_uri12', '', get_string('dictionaryurl', 'block_dictionary'), 'http://vsearch.nlm.nih.gov/vivisimo/cgi-bin/query-meta?v%3Aproject=medlineplus&query=', PARAM_RAW);

foreach ($items as $item)
{
    $settings->add($item);
}
?>