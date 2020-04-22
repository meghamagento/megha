<?php

namespace Training\Customer\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {

    public function __construct(\Magento\Catalog\Block\Product\Context $context,\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,\Magento\Customer\Model\Session\Proxy $customer,array $data = []) {
        $this->customerRepository = $customerRepository;
        $this->customer = $customer;
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
    // check customer is authenticated
    public function getCustomerLogIn(){
        if ($this->customer->getCustomer()->getGroupId() != \Magento\Customer\Model\GroupManagement::NOT_LOGGED_IN_ID) {
            $result = "logged in" ;
        }
        else{
            $result = "not logged in";
        }
        return $result;
    }

}