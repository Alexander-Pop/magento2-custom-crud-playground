<?php
/**
* @author Alex.
* Glory to Ukraine! Glory to the heros!
*/
namespace Codelegacy\Contacts\Block\Adminhtml\Contacts;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class ResetButton
 */
class ResetButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        // return [
        //     'label' => __('Reset'),
        //     'class' => 'reset',
        //     'on_click' => 'location.reload();',
        //     'sort_order' => 30
        // ];
    }
}
