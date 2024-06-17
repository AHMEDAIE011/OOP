<?php


class Collection implements iteratorAggregate , countable , Serializable , ArrayAccess
{
    public array $items;   //iterator




    public function __construct(array $items)
    {
        $this->items = $items; //iterator
    }

///////////////// iteratorAggregate
    public function getIterator() // iteratorAggregate دي ميزود موجوده ف انترفيس ال   
    {
        return new ArrayIterator($this->items);
    }
 
///////////////// countable
    public function count() // countable دي ميزود موجوده ف انترفيس ال   
    {
        return  count($this->items);
    }


///////////////// serialize
public function serialize() // serialize دي ميزود موجوده ف انترفيس ال   
{
    return  serialize($this->items);
}


///////////////// unserialize
public function unserialize($serialized) // serialize دي ميزود موجوده ف انترفيس ال   
{
    return $this->items = unserialize($serialized);
}


///////////////// offsetExists
public function offsetExists($offset) // ArrayAccess دي ميزود موجوده ف انترفيس ال   
{
    return $this->items[$offset] ? true:false ;
}


///////////////// offsetGet
public function offsetGet($offset) // ArrayAccess دي ميزود موجوده ف انترفيس ال   
{
    return $this->items[$offset] ;
}



///////////////// offsetSet
public function offsetSet($offset ,$value) // ArrayAccess دي ميزود موجوده ف انترفيس ال   
{
    return $this->items[$offset]  = $value;
}



///////////////// offsetUnset
public function offsetUnset($offset ) // ArrayAccess دي ميزود موجوده ف انترفيس ال   
{
    unset($this->items[$offset]);
}
}