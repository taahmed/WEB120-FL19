<?php
/**
 * connfig.php provides a place to store configuration info, 
 *such as reCAPTCHA site keys
 
 *@package nmCAPTCHA2
 *@author BILL & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact-include.php  
 * @see recaptchalib.php   
 * @todo none
 * @see util.js
 */

//Site keys for web-students.com
$siteKey = "6LfG5sIUAAAAAJw-lyfMfB2rQQ0Tc2kTtGRXZtTd";
$secretKey = "6LfG5sIUAAAAAGXKfIQnbWdzTioxL_pUJybBXusa";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los_Angeles');

// this constant allows a page  to know it's  own url/ name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php':
        $title='Home-Final Project';
        $logo ='fa-Home';
        $PageID = 'Welcome';
    break;
    
    case 'aboutus.php':
        $title='About US';
        $logo ='fa-users';//change this fontawesome icon!
        $PageID = 'About us';
    break;
    
    case 'services.php':
        $title='Our Services';
        $logo ='fa-pencil-square-o';//change this fontawesome icon!
        $PageID = 'Our Services';
    break;
    
    case 'map.php':
        $title='AFT Map';
        $logo ='fa-pencil-square-o';//change this fontawesome icon!
        $PageID = 'AFT&C Map';
    break;
    
    case 'youtube.php':
        $title='Google Youtube Video';
        $logo ='fa-pencil-square-o';//change this fontawesome icon!
        $PageID = 'Google Youtube Video';
    break; 
    
    case 'contact.php':
        $title='contact Us';
        $logo ='fa-pencil-square-o';//change this fontawesome icon!
        $PageID = 'Contact US';
    break;
           
    default:
        $title='THIS_PAGE';
        $logo ='';
        $PageID = '';            
}

