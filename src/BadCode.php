<?php
namespace Foo\Bar;
/**
 * A class with bad Code Style
 */
class BadCode {


	/**
	 * @param int $var
	 */
	protected $var;


      public function badIndentation()  {
       $var_with_underscore = "foo";    

	return null;
      }


	static function no_visibility (){
		$camelCase = [
			'foo' 		=> 'bar',
			'foo-aligned'	=> 'bar'
		];

		if ( empty($camelCase) )
		{
			$ret = TRUE;
		}
		else if ( is_array($camelCase)) {
			$ret = FALSE;
		} 
		else 
		{
			// nothing
		}

		return TRUE;
	}


}

echo "phpcs, how are you?";         
?>
