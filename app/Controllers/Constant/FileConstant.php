<?php namespace App\Controllers\Constant;
define('BASE_URL_TO_LOCALHOST', base_url());
define('BASE_URL_TO_FILE_SYSTEM', dirname(WRITEPATH, 1) );
class FileConstant
{
    const PATH_TO_PRODUCT_IMAGES_TO_LOCALHOST = BASE_URL_TO_LOCALHOST."/production/images/products/";
    const PATH_TO_PRODUCT_IMAGES_TO_FILE_SYSTEM = BASE_URL_TO_FILE_SYSTEM."/public/production/images/products/";
    const PATH_TO_USER_IMAGES_TO_LOCALHOST  = BASE_URL_TO_LOCALHOST."/production/images/profile/";
    const PATH_TO_USER_IMAGES_TO_FILE_SYSTEM = BASE_URL_TO_FILE_SYSTEM."/public/production/images/profile/"; 
    const PATH_TO_VENDOR_IMAGES_TO_FILE_SYSTEM = BASE_URL_TO_FILE_SYSTEM."/public/production/images/vendors/";
    const PATH_TO_VENDOR_IMAGES_TO_LOCALHOST  = BASE_URL_TO_LOCALHOST."/production/images/vendors/";    
  
}
