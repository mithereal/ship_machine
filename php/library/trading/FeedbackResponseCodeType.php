<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class FeedbackResponseCodeType extends EbatNs_FacetType
{
	const CodeType_Reply = 'Reply';
	const CodeType_FollowUp = 'FollowUp';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackResponseCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackResponseCodeType = new FeedbackResponseCodeType();
?>