<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class NotificationRoleCodeType extends EbatNs_FacetType
{
	const CodeType_Application = 'Application';
	const CodeType_User = 'User';
	const CodeType_UserData = 'UserData';
	const CodeType_Event = 'Event';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationRoleCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationRoleCodeType = new NotificationRoleCodeType();
?>