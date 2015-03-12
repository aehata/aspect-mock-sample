<?php

require_once __DIR__ . '/../../classes/sample.php';
use AspectMock\Test as test;

class SampleTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $this->assertTrue(true);
    }

    /*
    public function testGreet1()
    {
        $sample = new Sample();
        $this->assertEquals($sample->greet(), 'おつかれさまです');
    }
     */

    /*
    public function testGreet2()
    {
        test::double('Sample', ['_getHour' => 19]);
        $sample = new Sample();
        $this->assertEquals($sample->greet(), 'おつかれさまでした');
    }
     */

    /**
     * @dataProvider greetDataProvider
    public function testGreet3($hour, $expected)
    {
        test::double('Sample', ['_getHour' => $hour]);
        $sample = new Sample();
        $this->assertEquals($sample->greet(), $expected);
    }

    public function greetDataProvider()
    {
        return array(
            array(0,  'おつかれさまです'),
            array(18, 'おつかれさまです'),
            array(19, 'おつかれさまでした'),
            array(24, 'おつかれさまでした'),
        );
    }
     */

}
