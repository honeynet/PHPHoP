/**
 * Javascript object for hiding & showing DOM elements.
 *
 * $Horde: horde/js/hideable.js,v 1.2 2004/10/19 19:08:53 chuck Exp $
 *
 * See the enclosed file COPYING for license information (LGPL). If you did not
 * receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 */

/**
 * Constructor for Horde Hideable DOM elements.
 *
 * @param id            The DOM id of the element we want to work with.
 * @param displayStyle  What display style shows this element? Defaults
 *                      to 'block'.
 */
function Horde_Hideable()
{
    this.id = arguments[0];
    this.element = document.getElementById(this.id);

    if (arguments.length == 2) {
        this.displayStyle = arguments[1];
    }
};

Horde_Hideable.prototype = {

    /**
     * Id of the DOM element.
     * @var id
     */
    id: null,

    /**
     * DOM element reference.
     * @var element
     */
    element: null,

    /**
     * The display style to use. Default is 'block'.
     * @var displayStyle
     */
    displayStyle: 'block',

    shown: function()
    {
        return this.element.style.display != 'none';
    },

    hide: function()
    {
        this.element.style.display = 'none';
        return this;
    },

    show: function()
    {
        this.element.style.display = this.displayStyle;
        return this;
    },

    toggle: function()
    {
        return this.shown() ? this.hide() : this.show();
    }

}
