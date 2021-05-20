<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Models\Coders;


class CoderTest extends TestCase
{

	public function testIfGetCoderAndGetIssueWorkCorrectly()
	{
		$newcoder = new Coders (null, "CoderTest", "Comment for Test");
		$resultCoderName = $newcoder->GetCoder();
		$resultCoderIssue = $newcoder->GetIssue();

		$this->assertEquals("CoderTest", $resultCoderName);
		$this->assertEquals("Comment for Test", $resultCoderIssue);
	}
}
