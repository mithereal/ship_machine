<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class NotificationEventPropertyNameCodeType extends EbatNs_FacetType
{
	const CodeType_TimeLeft = 'TimeLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('NotificationEventPropertyNameCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_NotificationEventPropertyNameCodeType = new NotificationEventPropertyNameCodeType();
?>