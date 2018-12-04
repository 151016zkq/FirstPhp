<?php
/**
 * Created by PhpStorm.
 * User: zhangkaiqiang
 * Date: 2018/11/28
 * Time: 10:30 AM
 */

echo $_SERVER["PHP_SELF"];
//echo "<br>";
//echo "subject" . $_GET["subject"];
//echo "<br>";
//echo "web" . $_GET["web"];
echo __FILE__ . __LINE__;


class Base {
    public function sayHello() {
        echo "<br>hello";
    }
}
trait  SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo "world";
    }
}
class MyHelloWorld extends Base {
    use SayWorld;
}
$A = new MyHelloWorld();
$A->sayHello();

echo "<br>";
echo __NAMESPACE__;
class Site {
    /*构建函数*/
    void public function __construct($par1, $par2)
{
    $this->url = $par1;
    $this->title = $par2;
}
/*析构函数*/
    public function __destruct()
    {
        print_r("析构函数\n");
        // TODO: Implement __destruct() method.
    }

    /*成员变量*/
    var $url;
    var $title;
    /*成员函数*/
    function setUrl($par) {
        $this->url = $par;
    }
    function getUrl() {
        echo $this->url . PHP_EOL;
    }
    function setTitle($par) {
        $this->title = $par;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title . PHP_EOL;
    }

}

$runoob = new Site();
$runoob->setTitle("菜鸟教程");
echo $runoob->getTitle();
$runoob->setUrl("这就是我的地方");
echo $runoob->getUrl();

class MyClass {
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";
    function printHello() {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}
$obj = new MyClass();
echo $obj->public;
class MyClass2 extends MyClass {
    protected $protected = "protected2";
    function printHello() {
        echo $this->public;
        echo $this->protected;
    }
}








