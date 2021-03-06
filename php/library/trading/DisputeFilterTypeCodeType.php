<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class DisputeFilterTypeCodeType extends EbatNs_FacetType
{
	const CodeType_AllInvolvedDisputes = 'AllInvolvedDisputes';
	const CodeType_DisputesAwaitingMyResponse = 'DisputesAwaitingMyResponse';
	const CodeType_DisputesAwaitingOtherPartyResponse = 'DisputesAwaitingOtherPartyResponse';
	const CodeType_AllInvolvedClosedDisputes = 'AllInvolvedClosedDisputes';
	const CodeType_EligibleForCredit = 'EligibleForCredit';
	const CodeType_UnpaidItemDisputes = 'UnpaidItemDisputes';
	const CodeType_ItemNotReceivedDisputes = 'ItemNotReceivedDisputes';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('DisputeFilterTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_DisputeFilterTypeCodeType = new DisputeFilterTypeCodeType();
?>