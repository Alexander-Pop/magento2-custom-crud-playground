<?php
/**
* @author Alex.
* Glory to Ukraine! Glory to the heros!
*/
namespace Codelegacy\Font\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Codelegacy_Font::codelegacy_font');
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Codelegacy_Font::codelegacy_font');
        $resultPage->addBreadcrumb(__('Font'), __('Font'));
        $resultPage->addBreadcrumb(__('Font Manager'), __('Font Manager'));
        $resultPage->getConfig()->getTitle()->prepend(__('Font Manager'));

        return $resultPage;
    }
}
