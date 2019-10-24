<?php
 
namespace Andrija\Test\Block;
 
use Magento\Framework\View\Element\Template\Context;
use Andrija\Test\Model\Bookauthor;

class TestPodaci extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        BookauthorFactory $podaci
    ) {
        $this->_test = $podaci;
        parent::__construct($context);
    }
 
    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Book authors'));
        
        return parent::_prepareLayout();
    }
 
    public function getTestCollection()
    {
        $test = $this->_test->create();
        $collection = $test->getCollection();
        return $collection;
    }
}