<?php
namespace Andrija\Test\Model\ResourceModel;

class Bookauthor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	protected function _construct()
	{
	$this->_init('andrija_test_bookauthor', 'entity_id');
	}
}
?>