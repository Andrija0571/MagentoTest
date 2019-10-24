<?php
namespace Andrija\Test\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	 private $bookauthorFactory;
	 public function __construct(\Andrija\Test\Setup\BookauthorFactory
	 $bookauthorFactory)
	 {
		$this->bookauthorFactory = $bookauthorFactory;
	 }
	 public function install(ModuleDataSetupInterface $setup,
		 ModuleContextInterface $context)
	 {
		$setup->startSetup();
		$bookauthor = $this->bookauthorFactory->create();
		$bookauthor->setFirstname('Pero')
				   ->setLastname('Peric')
				   ->setFullname('Peric Pero')
				   ->setImage('default.jpg')
				   ->save();
		$bookauthor->setFirstname('Marija')
				   ->setLastname('Maric')
				    ->setFullname('Maric Marija')
				   ->setImage('default.jpg')
				   ->save();
		$setup->endSetup();
	 }
	}  
}
?>