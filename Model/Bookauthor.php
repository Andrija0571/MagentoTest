<?php
namespace Andrija\Test\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
	{
        $this->_init('Andrija\Test\Model\ResourceModel\Bookauthor');
    }
}
?>