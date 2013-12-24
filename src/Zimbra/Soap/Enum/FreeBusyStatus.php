<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Soap\Enum;

/**
 * FreeBusyStatus enum class
 * @package   Zimbra
 * @category  Soap
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class FreeBusyStatus extends Base
{
    /**
     * Constant for value 'Free'
     * @return string 'F'
     */
    const F = 'F';

    /**
     * Constant for value 'Busy'
     * @return string 'B'
     */
    const B = 'B';

    /**
     * Constant for value 'Busy-Tentative'
     * @return string 'T'
     */
    const T = 'T';

    /**
     * Constant for value 'OutOfOffice' (busy-unavailable)
     * @return string 'U'
     */
    const U = 'U';
}