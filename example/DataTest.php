<?php


namespace phptest\example;
use PHPUnit\Framework\TestCase;
use phptest\libs\CsvFileIterator;

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        // Example 2.5 使用返回数组的数组的数据供给器
        /*return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 3]
        ];*/
        // Example 2.6 使用带有命名数据集的数据供给器
        /*return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 3]
        ];*/
        // Example 2.7 使用返回迭代器对象的数据供给器
        return new CsvFileIterator('../resource/data.csv');
    }
}
