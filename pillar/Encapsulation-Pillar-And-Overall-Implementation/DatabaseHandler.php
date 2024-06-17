<?php



interface DatabaseHandler
{
    public function handle(); 

    public function create();

    public function update();

    public function delete();

    public function read();

    public function where();
        
}