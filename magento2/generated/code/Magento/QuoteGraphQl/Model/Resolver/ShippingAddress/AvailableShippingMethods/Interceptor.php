<?php
namespace Magento\QuoteGraphQl\Model\Resolver\ShippingAddress\AvailableShippingMethods;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\ShippingAddress\AvailableShippingMethods
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\ShippingAddress\AvailableShippingMethods implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter, \Magento\Quote\Model\Cart\ShippingMethodConverter $shippingMethodConverter, \Magento\QuoteGraphQl\Model\FormatMoneyTypeData $formatMoneyTypeData, \Magento\QuoteGraphQl\Model\Cart\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($dataObjectConverter, $shippingMethodConverter, $formatMoneyTypeData, $totalsCollector);
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
