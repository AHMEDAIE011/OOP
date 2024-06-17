<?php

require_once('FileSystem.php');

    class SQLiteHandler implements DatabaseHandler
    {
        protected FileSystem $fileSystem;

        public function load($file)
        {
          return $this->FileSystem->read($file);
        }
    
        public function handle(){
                
        }
    }