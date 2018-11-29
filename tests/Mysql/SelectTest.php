<?php

namespace QueryBuilder\Mysql;

class SelectTest extends \PHPUnit\Framework\TestCase
{
	public function testeSelectSemFiltro()
	{
		$select = new Select;
		$select->setTable('pages');

		$actual = $select->getSql();
		$expected = 'SELECT * FROM pages';
		
		$this->assertEquals($actual, $expected);
	}
}