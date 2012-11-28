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
 * This function is called on the double click of a word
 * @param uri The uri to go
 * @param forcepopup if == 1 force open in a popup
 */
function getSelText(uri, forcepopup)
{
    var txt = '';
    //Get the text
    if (window.getSelection)
    {
        txt = window.getSelection();
    }
    else if (document.getSelection)
    {
        txt = document.getSelection();
    }
    else if (document.selection)
    {
        txt = document.selection.createRange().text;
    }
    else return false;
    
    //Construct the URL
    var url = uri.split('#WORD#');
    if(url.length > 1)
    {
        url = url[0] + txt + url[1];
    }
    else
    {
        url = uri+txt;
    }
    
    //Choose if open in popup or in a tab
    if(forcepopup == 1)
    {
        popupwindow=window.open(url, 'dictionary_popup', 'height=500,width=600');
        if (window.focus)
        {
            popupwindow.focus();
        }
    }
    else
    {
        window.open(url);
    }
    return false;
}



