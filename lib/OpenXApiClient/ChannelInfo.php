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
 * @author     Heiko Weber <heiko@wecos.de>
 * @author     Tomi Saarinen <tomi.saarinen@rohea.com>
 *
 * This file describes the ChannelInfo class.
 */
namespace OpenXApiClient;

use OpenXApiClient\Info;

/**
 *  The channelInfo class extends the base Info class and contains information about the channel.
 */
class ChannelInfo extends Info
{

    /**
     * The channelID variable is the unique ID for the channel.
     *
     * @var integer $channelId
     */
    public $channelId;

    /**
     * This field contains the ID of the agency account.
     *
     * @var integer $agencyId
     */
    public $agencyId;

    /**
     * This field contains the ID of the publisher.
     *
     * @var integer $websiteId
     */
    public $websiteId;

    /**
     * The channelName variable is the name of the channel.
     *
     * @var string $channelName
     */
    public $channelName;

    /**
     * The description variable is the description for the channel.
     *
     * @var string $description
     */
    public $description;

    /**
     * The comments variable is the comment for the channel.
     *
     * @var string $comments
     */
    public $comments;

    /**
     * This method sets all default values when adding a new channel.
     */
    public function getFieldsTypes()
    {
        return array(
            'channelId' => 'integer',
            'agencyId' => 'integer',
            'websiteId' => 'integer',
            'channelName' => 'string',
            'description' => 'string',
            'comments' => 'string',
        );
    }
}
