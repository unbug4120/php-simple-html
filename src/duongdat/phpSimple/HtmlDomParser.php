<?php

namespace duongdat\PhpSimple;

require 'phpDom' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';

class HtmlDomParser
{

    /**
     * @return \phpDom\simple_html_dom
     */
    static public function file_get_html()
    {
        return call_user_func_array('\phpDom\file_get_html', func_get_args());
    }

    /**
     * get html dom from string
     * @return \phpDom\simple_html_dom
     */
    static public function str_get_html()
    {
        return call_user_func_array('\phpDom\str_get_html', func_get_args());
    }
}
