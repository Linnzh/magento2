<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Encryption\Helper;

/**
 * @api
 * @since 100.0.2
 */
class Security
{
    /**
     * Compare two strings in a secure way that avoids string length guessing based on duration of calculation
     *
     * @param string $expected
     * @param string $actual
     * @return bool
     */
    public static function compareStrings($expected, $actual)
    {
        $expected     = (string) $expected;
        $actual       = (string) $actual;
        return hash_equals($expected, $actual);
    }
}
