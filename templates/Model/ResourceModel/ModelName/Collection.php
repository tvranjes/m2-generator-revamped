<?php

declare(strict_types=1);

namespace {VENDOR_NAME}\{MODULE_NAME}\Model\ResourceModel\{MODEL_NAME};

use {VENDOR_NAME}\{MODULE_NAME}\Model\{MODEL_NAME} as Model;
use {VENDOR_NAME}\{MODULE_NAME}\Model\ResourceModel\{MODEL_NAME} as ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 *
 * @package {VENDOR_NAME}\{MODULE_NAME}\Model\ResourceModel\{MODEL_NAME}
 */
class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     * @return void
     */
    protected function _construct(): void
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
