<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'EbatNs_FacetType.php';

class TaskStatusCodeType extends EbatNs_FacetType
{
	const CodeType_Pending = 'Pending';
	const CodeType_InProgress = 'InProgress';
	const CodeType_Complete = 'Complete';
	const CodeType_Failed = 'Failed';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 **/
	function __construct()
	{
		parent::__construct('TaskStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');
	}
}
$Facet_TaskStatusCodeType = new TaskStatusCodeType();
?>