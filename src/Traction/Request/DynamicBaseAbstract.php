<?php

namespace Traction\Request;

/**
 * Base structure for an API request object.
 *
 * @author Craig Morris <craig.michael.morris@gmail.com>
 */
abstract class DynamicBaseAbstract extends BaseAbstract
{
    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        throw new Exception('getPath() should not be called for the dynamic API');
    }
}
