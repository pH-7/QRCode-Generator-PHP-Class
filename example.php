<?php
/**
 * @title            QR Code Example
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License.
 */

require 'QRCode.class.php';

try
{

    $oQRC = (new QRCode) // Create vCard Object
        ->fullName('Pierre-Henry Soria') // Add Full Name
        ->nickName('PH7') // Add Nickname
        ->email('ph7software@gmail.com') // Add Email Address
        ->impp('phs_7@aol.com') // Add Instant Messenger
        ->url('http://ph-7.github.com') // Add URL Website
        ->photo('http://files.phpclasses.org/picture/user/1122955.jpg') // Add Avatar
        ->lang('en-US') // Add Language
        ->finish(); // End vCard

        // echo '<p><img src="' . $oQRC->get(300) . '" alt="QR Code" /></p>'; // Generate and display the QR Code
        $oQRC->display(); // Display

}
catch (Exception $oExcept)
{
    echo '<p><b>Exception launched!</b><br /><br />' .
    'Message: ' . $oExcept->getMessage() . '<br />' .
    'File: ' . $oExcept->getFile() . '<br />' .
    'Line: ' . $oExcept->getLine() . '<br />' .
    'Trace: <p/><pre>' . $oExcept->getTraceAsString() . '</pre>';
}
