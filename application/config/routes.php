<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$admin_controller="Dashboard";
$controller_exceptions_admin = array("index","adminlogout","CP","changePassword","users","contacts","adminMovingStory");
foreach($controller_exceptions_admin as $v) {
  $route[$v] = "$admin_controller/".$v;
  $route[$v."/(.*)"] = "$admin_controller/".$v.'/$1';
}
// Start Blog

$route['adminblog'] = "blog/AdminBlog";
$route['addblog'] = "blog/AdminBlog/addBlog";
$route['submitblog'] = "blog/AdminBlog/submitBlog";
$route['editblog/(.*)'] = "blog/AdminBlog/editBlog"; 

$route['addMovingStory'] = "blog/AdminBlog/addMovingStory";
// End Blog

$route['adminPropertyType']="admin/Propertytype";
$route['addPropertyType']="admin/Propertytype/addPropertyType";

$route['manageCity']="admin/City";
$route['addCity']="admin/City/addCity";

// Start Property

$route['adminproperty'] = "property/Property";
$route['addProperty'] = "property/Property/addProperty";
$route['submitproperty'] = "property/Property/submitProperty";
$route['editproperty/(.*)'] = "property/Property/editProperty"; 
$route['viewproperty/(.*)'] = "property/Property/viewProperty"; 
$route['galleryImageUpload'] = "property/Property/galleryImageUpload"; 
$route['floorImageUpload'] = "property/Property/floorImageUpload"; 

// End Property

$route['default_controller'] = 'User';
$route['admin'] = 'dashboard';
$route['404_override'] = 'errors/pagenotfound';
$route['loginAuth']="adminlogin/loginAuth";
$route['translate_uri_dashes'] = FALSE;


$user_controller="User";
$controller_exceptions_user = array("index","allBlog","Blogs","Contact","singleBlog","blogComment","register","registerUser","login","userLogin","Account","accountDetails","submitContact","userlogout","changePassword","changeEmail","changeEmailSubmit","changePasswordSubmit","updateProfile","deleteAccount","shareYourMovingStory","movingStorySubmit","movingStory","singleMovingStory","movingStoryComment","deleteAccountSubmit");
foreach($controller_exceptions_user as $v) {
  $route[$v] = "$user_controller/".$v;
  $route[$v."/(.*)"] = "$user_controller/".$v.'/$1';
}


// SACHIN
$route['admin/update_banner']="admin/Homecontroller/update_banner";
$route['admin/change_banner']="admin/Homecontroller/change_banner";