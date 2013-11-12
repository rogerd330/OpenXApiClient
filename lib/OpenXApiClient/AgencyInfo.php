<?php
/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

/**
 * @package    OpenXApiClient
 * @author     Andriy Petlyovanyy <apetlyovanyy@lohika.com>
 * @author     Tomi Saarinen <tomi.saarinen@rohea.com>
 *
 * This file describes the AgencyInfo class.
 */
namespace OpenXApiClient;

use OpenXApiClient\Info;

/**
 *  The agencyInfo class extends the base Info class and contains information about the agency.
 */
class AgencyInfo extends Info
{
    /**
     * The agencyID variable is the unique ID for the agency.
     *
     * @var integer $agencyId
     */
    public $agencyId;

    /**
     * This field contains the ID of the agency account.
     *
     * @var integer $accountId
     */
    public $accountId;

    /**
     * The agencycName variable is the name of the agency.
     *
     * @var string $agencyName
     */
    public $agencyName;

    /**
     * The password variable is the password for the agency.
     *
     * @var string $password
     */
    public $password;

    /**
     * The contactName variable is the name of the contact for the agency.
     *
     * @var string $contactName
     */
    public $contactName;

    /**
     * The emailAddress variable is the email address for the agency contact.
     *
     * @var string $emailAddress
     */
    public $emailAddress;

    public function getFieldsTypes()
    {
        return array(
            'agencyId' => 'integer',
            'accountId' => 'integer',
            'agencyName' => 'string',
            'contactName' => 'string',
            'password' => 'string',
            'emailAddress' => 'string'
        );
    }
}
