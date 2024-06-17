<?php

class Database
{
    protected $handler;

    public function handle(DatabaseHandler $handler)
    {
        $this->handler = $handler;
    }

    public function create()
    {
        $this->handler->create();
    }

}