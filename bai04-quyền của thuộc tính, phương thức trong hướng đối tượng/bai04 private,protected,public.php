<!-- 1.khai baos chung
<?php
class className
{
    //khai báo thuộc tính
    public $Name;
    //khai báo phương thức
    public function methodName(){

}
}
?>
<!-- 2.private-->
<?php
class Person {
    //khai báo thuộc tính name ở private
    private $name;
    //khai báo phương thức run ở private
    private function run()
    {
        return 'đây là hàm run';
    }
}
//khởi tạo class
$person = new Person();
//gọi phương thức name
$person->name;
//chạy chương trình nhận thông báo lỗi Fatal error: Cannot access private property Person::$name in ...
//như vậy sử dụng private thì chúng ta k có thể gọi truy cập vào nó từ bên ngoài clas. nếu chúng ta muốn truy cập vào nó ở bên ngoiaf class thì ta phải sử dụng các phương thức visivilitty là public hoặc không khai báo víibility

?>
<?php
class Person2{
    //khai báo thuộc tính name ở private
    private $name;
    //khai báo phương thức run ở private
    private function run(){
        return 'đây là hàm run';
    }
    function setName($name)
    {
        $this->name =$name;
    }
    function getName(){
        return $this->name;
    }
    function getRunMethod(){
        return $this->run();
    }
}
//khởi tạo class
$person = new Person2();
//set thuộc tính name
$person->setName('vũ thanh tài');
//lấy ra thuộc tính name
echo $person->getName();
//gọi giá trị của phương thức run
echo $person->getRunMethod();
?>
<!--3.Protected
khác với private một chúc thì các phương thức và thuộc tính khi khai vào với visibility là protected thì chúng ngoài sử
 dụng trong class đó ra thì class con kế thừa từ nó cũng có thể sử dụng được, như bên ngoài class không có thể sử dụng được
-->
<?php
class Person3{
    //khai báo thuộc tính xe dạng protected
    protected $name;
}
class Male extends Person {
    function setName($name){
        //đúng vì sử dụng trong class con
        $this->name =$name;
    }
    function getName(){
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}
//khởi tạo lớp Person
$person = new Person3();
//sai vì biến name có vibility là protect nên không tác động từ ngoài class vào được
$person->name;
//khởi tọa lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male->setName('nguyễn văn a');
echo $male->getName();
?>
<!-- 4.public
đây là visibility có mức tuy cập rộng nhất trong hướng đối tượng, khi một thuộc tính hay phuwogn thức sử dụng visibility này thì chúng ta có thể có tác động vào thuộc tính hay phương thức đó từ cả trong lẫn ngoài class. thông thương khi không khai báo visibility thì chương trình chạy
public nhưng để cho đúng chuẩn thì ta lên khai báo từ khóa này vào thay vì bỏ trông
-->
<?php
class Person4{
    //khai bóa thuộc tính xe dạng protected
    public $name;
    function setName($name){
        //đúng vì sử dụng trong class con
        $this->name =$name;
    }
    function getName(){
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}
//khởi taoh lớp Person
$person = new Person4();
//tác động vào thuộc tính name
$person->name ='nguyễn văn a';
//tác động vào biến name qua hàm setName
$person->setName('vũ văn thanh');
echo $person->getName();
?>