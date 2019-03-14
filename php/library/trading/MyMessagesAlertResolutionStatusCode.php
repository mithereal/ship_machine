<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class MyMessagesAlertResolutionStatusCode extends EbatNs_FacetType
{
	const CodeType_Unresolved = 'Unresolved';
	const CodeType_ResolvedByAutoResolution = 'ResolvedByAutoResolution';
	const CodeType_ResolvedByUser = 'ResolvedByUser';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('MyMessagesAlertResolutionStatusCode', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_MyMessagesAlertResolutionStatusCode = new MyMessagesAlertResolutionStatusCode();
?>