<?php
namespace Printify;

use ArrayAccess;
use Countable;

class Collection implements ArrayAccess, Countable
{
    public $current_page = 1;
    public $to = 1;
    public $from = 1;
    public $last_page = 1;
    public $total = 1;
    private $_items = [];

    public function __construct(array $items = [])
    {
        $this->_items = $items;
    }

    public function count(): int
    {
        return count($this->_items);
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->_items[] = $value;
        } else {
            $this->_items[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->_items[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->_items[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->_items[$offset]) ? $this->_items[$offset] : null;
    }

}