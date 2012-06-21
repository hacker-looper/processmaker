<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.Installer.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:17.
  */ 

  class classInstallerTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers Installer::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( '__construct', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::create_site
    * @todo   Implement testcreate_site().
    */
    public function testcreate_site() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'create_site', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::isset_site
    * @todo   Implement testisset_site().
    */
    public function testisset_site() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'isset_site', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::create_site_test
    * @todo   Implement testcreate_site_test().
    */
    public function testcreate_site_test() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'create_site_test', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::make_site
    * @todo   Implement testmake_site().
    */
    public function testmake_site() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'make_site', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::set_admin
    * @todo   Implement testset_admin().
    */
    public function testset_admin() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'set_admin', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::run_query
    * @todo   Implement testrun_query().
    */
    public function testrun_query() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'run_query', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::query_sql_file
    * @todo   Implement testquery_sql_file().
    */
    public function testquery_sql_file() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'query_sql_file', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::check_path
    * @todo   Implement testcheck_path().
    */
    public function testcheck_path() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'check_path', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::find_root_path
    * @todo   Implement testfind_root_path().
    */
    public function testfind_root_path() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'find_root_path', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::file_permisions
    * @todo   Implement testfile_permisions().
    */
    public function testfile_permisions() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'file_permisions', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::is_dir_writable
    * @todo   Implement testis_dir_writable().
    */
    public function testis_dir_writable() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'is_dir_writable', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::getDirectoryFiles
    * @todo   Implement testgetDirectoryFiles().
    */
    public function testgetDirectoryFiles() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'getDirectoryFiles', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::check_db_empty
    * @todo   Implement testcheck_db_empty().
    */
    public function testcheck_db_empty() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'check_db_empty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::check_db
    * @todo   Implement testcheck_db().
    */
    public function testcheck_db() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'check_db', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::check_connection
    * @todo   Implement testcheck_connection().
    */
    public function testcheck_connection() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'check_connection', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers Installer::log
    * @todo   Implement testlog().
    */
    public function testlog() 
    { 
        if (class_exists('Installer')) {
             $methods = get_class_methods( 'Installer');
            $this->assertTrue( in_array( 'log', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 