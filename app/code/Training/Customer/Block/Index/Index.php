<?php

namespace Training\Customer\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {

    public function __construct(\Magento\Catalog\Block\Product\Context $context,\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,array $data = []) {
        $this->customerRepository = $customerRepository;
        parent::__construct($context, $data);

    }


    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    // get customer data by customer email 
     public function getCustomerByEmail($email)
    {
        return $this->customerRepository->get($email);
    }

}