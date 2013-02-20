<?php

namespace Sabre\XML;

use
    Exception;

/**
 * This exception is thrown when the Readers runs into a logical error.
 *
 * This means that there was no problem with the xml body, but rather one of
 * the element parser classes.
 *
 * @copyright Copyright (C) 2007-2013 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/)
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class ParseException extends Exception {

}