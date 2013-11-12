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
 * This file describes the PublisherInfo class.
 */
namespace OpenXApiClient;

use OpenXApiClient\Info;

/**
 *  The PublisherInfo class extends the base Info class and contains information about the publisher.
 */
class PublisherInfo extends Info
{

    /**
     * The publisherId variable is the unique ID for the publisher.
     *
     * @var integer $publisherId
     */
    public $publisherId;

    /**
     * This field contains the ID of the agency account.
     *
     * @var integer $accountId
     */
    public $accountId;

    /**
     * The agencyID variable is the ID of the agency associated with the publisher.
     *
     * @var integer $agencyId
     */
    public $agencyId;

    /**
     * The publisherName variable is the name of the publisher.
     *
     * @var string $publisherName
     */
    public $publisherName;

    /**
     * The contactName variable is the name of the contact for the publisher.
     *
     * @var string $contactName
     */
    public $contactName;

    /**
     * The emailAddress variable is the email address for the contact.
     *
     * @var string $emailAddress
     */
    public $emailAddress;

    /**
     * The website variable is the website address of the publisher.
     *
     * @var string $website
     */
    public $website;

    /**
     * This field provides any additional comments to be stored.
     *
     * @var string $comments
     */
    public $comments;

    public function getFieldsTypes()
    {
        return array(
            'publisherId' => 'integer',
            'accountId' => 'integer',
            'agencyId' => 'integer',
            'publisherName' => 'string',
            'contactName' => 'string',
            'emailAddress' => 'string',
            'website' => 'string',
            'comments' => 'string',
        );
    }
}
