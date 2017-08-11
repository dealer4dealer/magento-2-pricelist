<?php

namespace Dealer4dealer\Pricelist\Model\ResourceModel\PriceListItem;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Dealer4dealer\Pricelist\Model\PriceListItem',
            'Dealer4dealer\Pricelist\Model\ResourceModel\PriceListItem'
        );
    }
}