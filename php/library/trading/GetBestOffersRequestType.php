<?php
/* Generated on 3/1/19 4:23 AM by globalsync
 * $Id: $
 * $Log: $
 */

namespace InTradeSys\eBay\trading;
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';
require_once 'BestOfferIDType.php';
require_once 'BestOfferStatusCodeType.php';
require_once 'PaginationType.php';

/**
  * This is the base request type of the <b>GetBestOffers</b> call. Depending on the input parameters that are used, this call can be used by a seller to retrieve all active Best Offers, all Best Offers on a specific listing, a specific Best Offer for a specific listing, or Best Offers in a specific state.
  * <br/><br/>
  * <span class="tablenote"><b>Note: </b>
  * The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France, Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing.
  * </span>
  * 
 **/

class GetBestOffersRequestType extends AbstractRequestType
{
	/**
	* @var ItemIDType
	**/
	protected $ItemID;

	/**
	* @var BestOfferIDType
	**/
	protected $BestOfferID;

	/**
	* @var BestOfferStatusCodeType
	**/
	protected $BestOfferStatus;

	/**
	* @var PaginationType
	**/
	protected $Pagination;


	/**
	 * Class Constructor 
	 **/
	function __construct()
	{
		parent::__construct('GetBestOffersRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
		{
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
			array(
				'ItemID' =>
				array(
					'required' => false,
					'type' => 'ItemIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferID' =>
				array(
					'required' => false,
					'type' => 'BestOfferIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BestOfferStatus' =>
				array(
					'required' => false,
					'type' => 'BestOfferStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Pagination' =>
				array(
					'required' => false,
					'type' => 'PaginationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)));
		}
		$this->_attributes = array_merge($this->_attributes,
		array(
));
	}

	/**
	 * @return ItemIDType
	 **/
	function getItemID()
	{
		return $this->ItemID;
	}

	/**
	 * @return void
	 **/
	function setItemID($value)
	{
		$this->ItemID = $value;
	}

	/**
	 * @return BestOfferIDType
	 **/
	function getBestOfferID()
	{
		return $this->BestOfferID;
	}

	/**
	 * @return void
	 **/
	function setBestOfferID($value)
	{
		$this->BestOfferID = $value;
	}

	/**
	 * @return BestOfferStatusCodeType
	 **/
	function getBestOfferStatus()
	{
		return $this->BestOfferStatus;
	}

	/**
	 * @return void
	 **/
	function setBestOfferStatus($value)
	{
		$this->BestOfferStatus = $value;
	}

	/**
	 * @return PaginationType
	 **/
	function getPagination()
	{
		return $this->Pagination;
	}

	/**
	 * @return void
	 **/
	function setPagination($value)
	{
		$this->Pagination = $value;
	}

}
?>
