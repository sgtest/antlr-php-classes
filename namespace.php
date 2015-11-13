<?php

namespace foo\bar\baz {
	class c {
		const CONSTANT = 1;
		static $property = 2;
		static function method() { return 3; }
	}
}

namespace foo\bar\qux {
	class c {
		static $property = 4;
		static function method() { return 5; }
		const CONSTANT = 6;
	}
}

namespace {
    class d {
      	static $property = 7;
      	static function method() { return 8; }
      	const CONSTANT = 9;
    }

    class f {
    	static $name = 10;
    	static function name() { return 11; }
    }

    // fully qualified names
    echo \foo\bar\qux\c::$property;
    echo \foo\bar\qux\c::CONSTANT;
    echo \foo\bar\qux\c::method();

    use foo\bar;

    // qualified names
    echo bar\qux\c::$property;
    echo bar\qux\c::CONSTANT;
    echo bar\qux\c::method();

    echo bar\baz\c::$property;
    echo bar\baz\c::CONSTANT;
    echo bar\baz\c::method();

    // aliases
    use foo\bar\qux\c;
    echo c::$property;
    echo c::CONSTANT;
    echo c::method();

    // not-qualified names
    echo d::$property;
    echo d::CONSTANT;
    echo d::method();

    // property vs method with the same name
    echo f::$name;
    echo f::name();
}

