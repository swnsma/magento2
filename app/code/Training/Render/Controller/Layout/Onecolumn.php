<?php
namespace Training\Render\Controller\Layout;

class Onecolumn extends \Magento\Framework\App\Action\Action
{
    private $resultPage;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\Page $resultPage
    ) {
        $this->resultPage = $resultPage;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->resultPage->initLayout();
        return $this->resultPage;
    }
}