<?php
/**
 * Class used to manage blog entries in SS3
 *
 * @author morven (http://www.i-lateral.com)
 */
class BlogAdmin extends ModelAdmin {
    public static $managed_models = array('BlogEntry');
    
    public static $url_segment = 'blog';
    
    public static $menu_title = 'Blog'; 
    
    public static $menu_priority = 11;
}