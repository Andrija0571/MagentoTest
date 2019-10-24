<?php
namespace Andrija\Test\Controller\Test;

class Crud extends \Andrija\Test\Controller\Test
{
	protected $bookauthorFactory;
	public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Andrija\Test\Model\BookauthorFactory  $bookauthorFactory)
	{
		$this->bookauthorFactory = $bookauthorFactory;
		return parent::__construct($context);
	}
	public function execute()
	{
		//read all data
		$bookauthor = $this->bookauthorFactory->create()
					->getCollection();
		foreach ($bookauthor as $author) {
			\Zend_Debug::dump($author->toArray(), '$author');
		}
		//insert data
		$bookauthor = $this->bookauthorFactory->create();
		$bookauthor->setFirstname('Marko')
				   ->setLastname('Markovic')
				   ->setFullname('Markovic Marko')
				   ->setImage('default.jpg')
				   ->save();
		//edit data
		$bookauthor = $this->bookauthorFactory->create();
		$bookauthor->load(3);
		$bookauthor->setFirstname('Ivana');
		$bookauthor->save();
		//delete data
		$bookauthor = $this->bookauthorFactory->create();
		$bookauthor->load(3);
		$bookauthor->delete();

	}
}
?>