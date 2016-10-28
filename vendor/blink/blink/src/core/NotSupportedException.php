<?php

namespace blink\core;

/**
 * NotSupportedException represents an exception caused by accessing features that are not supported.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NotSupportedException extends Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'Not Supported';
    }
}
