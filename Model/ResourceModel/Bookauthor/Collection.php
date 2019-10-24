<?php
namespace Andrija\Test\Model\ResourceModel\Bookauthor;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected function _construct()
	{
		$this->_init(
		'Andrija\Test\Model\Bookauthor',
		'Andrija\Test\Model\ResourceModel\Bookauthor'
		);
	}
}