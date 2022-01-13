<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Support\View;

/**
 * Class BadDecorator
 *
 * This class is only used to provide a reference point
 * during tests to make sure that things work as expected.
 */
class BadDecorator
{
    public function decorate(string $html): string
    {
        return $html;
    }
}
