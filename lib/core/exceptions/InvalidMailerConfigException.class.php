<?php
/**
 * This file is part of Crucible.
 * (c) 2014 Tejaswi Sharma
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This exception will be thrown when there will be an 
 * error in the mailer configuration
 *
 * @author Tejaswi Sharma <tejaswi@crucible-framework.org>
 */
class InvalidMailerConfigException extends Exception{
    public function __construct($params) {
        $par = print_r($params, TRUE);
        parent::__construct('Invalid mail params ' . $par);
    }
}

?>
