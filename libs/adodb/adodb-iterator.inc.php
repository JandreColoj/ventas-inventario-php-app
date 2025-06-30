<?php

/*
  v4.991 16 Oct 2008  (c) 2000-2008 John Lim (jlim#natsoft.com). All rights reserved.
  Adaptado para PHP 8.1+ por compatibilidad.
*/

class ADODB_Iterator implements Iterator {

    private $rs;

    function __construct($rs) 
    {
        $this->rs = $rs;
    }

    #[\ReturnTypeWillChange]
    function rewind() 
    {
        $this->rs->MoveFirst();
    }

    #[\ReturnTypeWillChange]
    function valid() 
    {
        return !$this->rs->EOF;
    }

    #[\ReturnTypeWillChange]
    function key() 
    {
        return $this->rs->_currentRow;
    }

    #[\ReturnTypeWillChange]
    function current() 
    {
        return $this->rs->fields;
    }

    #[\ReturnTypeWillChange]
    function next() 
    {
        $this->rs->MoveNext();
    }

    function __call($func, $params)
    {
        return call_user_func_array(array($this->rs, $func), $params);
    }

    function hasMore()
    {
        return !$this->rs->EOF;
    }
}


class ADODB_BASE_RS implements IteratorAggregate {

    #[\ReturnTypeWillChange]
    function getIterator() {
        return new ADODB_Iterator($this);
    }

    function __toString()
    {
        include_once(ADODB_DIR.'/toexport.inc.php');
        return _adodb_export($this, ',', ',', false, true);
    }
}
?>
