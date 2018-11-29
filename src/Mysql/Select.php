<?php

namespace QueryBuilder\Mysql;

class Select
{
	public function table(string $table)
	{
		return $this;
	}

	public function getSql() :string
	{
		return 'SELECT * FROM pages';
	}
}