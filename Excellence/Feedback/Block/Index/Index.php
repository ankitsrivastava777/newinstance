<?php

declare(strict_types=1);

namespace Excellence\Feedback\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    protected $_customerSession;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\SessionFactory $customerSession,

        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_customerSession = $customerSession->create();
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Feedback'));
        return parent::_prepareLayout();
    }

    public function getCustomerData()
    {
        return $this->_customerSession;
    }
}
