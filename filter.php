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

/**
 * This function is called for each content to parse
 * @global stdClass $CFG
 * @global stdClass $COURSE
 * @global moodle_page $PAGE
 * @global moodle_database $DB
 * @param int $courseid The course ID 
 * @param string $text The text content to parse
 * @return string The text after filter transformation
 */
function dictionary_filter($courseid, $text)
{
    global $CFG, $COURSE, $PAGE, $DB;

    $PAGE->requires->js('/filter/dictionary/dictionary.js', true);

    if (!$usedictionary = $DB->get_record("block_dictionary", array("courseid" => $COURSE->id)))
    {
        $usedictionary = 0;
    }
    if ($usedictionary == null)
    {
        $usedictionary = new stdClass();
        $usedictionary->id = 0;
    }
    if ($usedictionary->id >= 1)
    {
        //$dictionaryhtml = '<script type="text/javascript" src="'.$CFG->wwwroot.'/filter/dictionary/dictionary.js"></script>'; ADDED TO HEADER
        $dictionaryhtml = '<span ondblclick="getSelText(\'' . $usedictionary->dictionary . '\', '.$usedictionary->popup.')">' . $text . '</span>';
    }
    else
    {
        $dictionaryhtml = $text; //if no records found do nothing to text
    }

    return $dictionaryhtml;
}

?>