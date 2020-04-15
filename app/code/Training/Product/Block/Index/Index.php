<?php

namespace Training\Product\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockItemRepository, array $data = []) {
        $this->stockItemRepository = $stockItemRepository;
        parent::__construct($context, $data);
    }
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
     public function getStockItem($productId)
    {
        return $this->stockItemRepository->getStockItem($productId);
    }

}