<?php
namespace matl14\library;
class CRSSTest extends \PHPUnit_Framework_TestCase
{
public function testprintFeed()
{
$rss = new \matl14\library\CRSS(['feed://www.svd.se/nyheter/nyhetsdygnet/?service=rss']);
$res = $rss->printFeed();
$this->assertInternalType('string', $res, "Return type in not a string");
}
}
