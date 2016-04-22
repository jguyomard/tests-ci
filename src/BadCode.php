<?php
namespace Foo\Bar;

/**
 * A class with bad Code Style
 */
class BadCode
{


    /**
     * @param int $var
     */
    protected $var;


    public function badIndentation()
    {
        $var_with_underscore = "foo";

        return null;
    }


    public static function no_visibility()
    {
        $camelCase = [
            'foo' => 'bar',
            'foo-aligned' => 'bar'
        ];

        if (empty($camelCase)) {
            $ret = true;
        } elseif (is_array($camelCase)) {
            $ret = false;
        } else {
            // nothing
        }

        return true;
    }
}

echo "phpcs, how are you?";
