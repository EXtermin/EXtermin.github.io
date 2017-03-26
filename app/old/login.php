<?php
namespace server;
class login
{
    private $path;
    private $input;



    public  function __construct($path)
    {
        $this->path = $path;
    }
    //methods
    public function SaveFile($input)
    {

        $this->input = $input;

        file_put_contents($this->path, $this->input . PHP_EOL,  FILE_APPEND);
    }
}

















?>