/**
 * Javascript to trap for the enter key.
 *
 * $Horde: horde/js/enter_key_trap.js,v 1.2.10.1 2005/05/01 04:51:58 chuck Exp $
 *
 * See the enclosed file COPYING for license information (LGPL). If you did not
 * receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 */

function enter_key_trap(e)
{
    var keyPressed;

    if (!e) {
        e = window.event;
    }
    if (e.keyCode) {
        keyPressed = e.keyCode;
	} else if (e.which) {
        keyPressed = e.which;
    }

    return (keyPressed == 10 || keyPressed == 13);
}
