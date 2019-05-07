<?php
/**
 * @category    Logic
 * @package     Logic_CustomerAttribute
 * @author      Rodrigo Mesquita <rodrigoriome@gmail.com>
 * @license     https://opensource.org/licenses/MIT - MIT License
 */

class Logic_CustomerAttribute_Model_Resource_Store_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        parent::_construct();
        $this->_init('lgc_customerattribute/store');
    }
}
