<?php
/*
 * Copyright 2015 Sven Sanzenbacher
 *
 * This file is part of the naucon package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Naucon\Utility;

use Naucon\Utility\IteratorReverseAbstract;

/**
 * Iterator Reverse Class
 *
 * @package     Utility
 * @author      Sven Sanzenbacher
 */
class IteratorReverse extends IteratorReverseAbstract
{
    /**
     * Constructor
     *
     * @param       array               items
     */
    public function __construct(array $items = array())
    {
        $this->_items = $items;
    }
}