<?php

namespace Emine\Blog\Model;

class Blog extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'emine_blog_blog_entity';

    protected $_cacheTag = 'emine_blog_blog_entity';

    protected $_eventPrefix = 'emine_blog_blog_entity';

    protected function _construct()
    {
        $this->_init('Emine\Blog\Model\ResourceModel\Blog');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

