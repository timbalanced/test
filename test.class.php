<?php

require 'lib/wrapper.class.php';

class Hello
{
    public function say($string = 'Say Something!')
    {
        return $string;
    }

    public function wrapper()
    {
        $wrapper = new Wrapper();

        return $wrapper->default_wrapper();
    }
}