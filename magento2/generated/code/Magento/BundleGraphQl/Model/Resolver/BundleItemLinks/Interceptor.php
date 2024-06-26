<?php
namespace Magento\BundleGraphQl\Model\Resolver\BundleItemLinks;

/**
 * Interceptor class for @see \Magento\BundleGraphQl\Model\Resolver\BundleItemLinks
 */
class Interceptor extends \Magento\BundleGraphQl\Model\Resolver\BundleItemLinks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\BundleGraphQl\Model\Resolver\Links\Collection $linkCollection, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, ?\Magento\BundleGraphQl\Model\Resolver\Links\CollectionFactory $linkCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($linkCollection, $valueFactory, $linkCollectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
