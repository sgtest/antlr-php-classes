<?php

interface I {
	const C1 = 10;
	function foo();
}

class A {

	function A() {
	}

	function bar() {
	}
}

class B extends A implements I {

	function __construct() {
	}

	function foo() {
		$this->bar();
		parent::C1;
		self::C1;
		$this::C1;
	}
}

$a = new A();
$b = new B;

