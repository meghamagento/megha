<?php

namespace Training\Order\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {

    /**
     * @var \Magento\Sales\Model\OrderRepository
     */
    protected $orderRepository;
 
    /**
     * @var \Magento\Framework\Api\SearchCriteriaBuilder
     */
 
    public function __construct(
        \Magento\Sales\Model\OrderRepository $orderRepository,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        $this->orderRepository = $orderRepository;
        parent::__construct($context, $data);
    }
    
    public function getOrderById($id) {
        return $this->orderRepository->get($id);
    }
}
?>