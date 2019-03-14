<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class SMSSubscriptionUserStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Registered = 'Registered';
	const CodeType_Unregistered = 'Unregistered';
	const CodeType_Pending = 'Pending';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('SMSSubscriptionUserStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_SMSSubscriptionUserStatusCodeType = new SMSSubscriptionUserStatusCodeType();
?>