<?php

namespace Emine\Blog\Block;

use Emine\Blog\Model\BlogFactory;
use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{

    protected BlogFactory $blogFactory;

    public function __construct(
        BlogFactory $blogFactory,

        Template\Context $context, array $data = [])
    {
        $this->blogFactory=$blogFactory;
        parent::__construct($context, $data);
    }

    public function getBlogEntities(){
        $blog = $this->blogFactory->create();
        $collection = $blog->getCollection();
         if($collection){
             return $collection;
         }

         return [];
    }

}



