<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class VeROReportPacketStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Received = 'Received';
	const CodeType_InProcess = 'InProcess';
	const CodeType_Processed = 'Processed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('VeROReportPacketStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_VeROReportPacketStatusCodeType = new VeROReportPacketStatusCodeType();
?>