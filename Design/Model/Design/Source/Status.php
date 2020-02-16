<?php
/**
* @author Alex.
* Glory to Ukraine! Glory to the heros!
*/
namespace Codelegacy\Design\Model\Design\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class Status
 */
class Status implements OptionSourceInterface
{

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {

        $availableOptions = ['1' => 'Enable', '0' => 'Disable'];

        $options = [];
        foreach ($availableOptions as $key => $label) {
            $options[] = [
                'label' => $label,
                'value' => $key,
            ];
        }
        return $options;
    }
}
