<?php

/*
 * This file is part of graze/feed.
 *
 * Copyright (c) 2015 Nature Delivered Ltd.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/graze/feed/blob/master/LICENSE
 */

namespace Graze\Feed;

interface FeedInterface
{
    /**
     * @param integer $number
     * @return boolean
     */
    public function supports($number);

    /**
     * @param integer $number
     * @return array
     */
    public function supply($number);
}
