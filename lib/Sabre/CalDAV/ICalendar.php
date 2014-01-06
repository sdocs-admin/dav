<?php

namespace Sabre\CalDAV;

use
    Sabre\DAV,
    Sabre\DAVACL;

/**
 * Calendar interface
 *
 * Implement this interface to allow a node to be recognized as an calendar.
 *
 * @copyright Copyright (C) 2007-2014 fruux GmbH (https://fruux.com/).
 * @author Evert Pot (http://evertpot.com/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
interface ICalendar extends ICalendarObjectContainer, DAVACL\IACL {


}
