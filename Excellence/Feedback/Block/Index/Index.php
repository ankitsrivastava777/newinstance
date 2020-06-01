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
    protected $_customer;

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
        $this->_customerFactory = $customerFactory;
    }

    public function getLoggedinCustomerId()
    {
        if ($this->_customerSession->isLoggedIn()) {
            return $this->_customerSession->getId();
        }
        return false;
    }

    public function getCustomerData()
    {
        if ($this->_customerSession->isLoggedIn()) {
            return $this->_customerSession->getCustomerData();
        }
        return false;
    }
}
