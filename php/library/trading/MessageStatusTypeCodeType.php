<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MessageStatusTypeCodeType extends EbatNs_FacetType
{
	const CodeType_Answered = 'Answered';
	const CodeType_Unanswered = 'Unanswered';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MessageStatusTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MessageStatusTypeCodeType = new MessageStatusTypeCodeType();
?>