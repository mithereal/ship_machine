<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class FeedbackTypeCodeType extends EbatNs_FacetType
{
	const CodeType_FeedbackReceivedAsSeller = 'FeedbackReceivedAsSeller';
	const CodeType_FeedbackReceivedAsBuyer = 'FeedbackReceivedAsBuyer';
	const CodeType_FeedbackReceived = 'FeedbackReceived';
	const CodeType_FeedbackLeft = 'FeedbackLeft';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('FeedbackTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_FeedbackTypeCodeType = new FeedbackTypeCodeType();
?>