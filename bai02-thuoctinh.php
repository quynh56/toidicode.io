<!--thuộc tính-->
<?php
class ConNguoi
{
    var $name;
    var $mat;
    var $mui;
    const sochan = 2;
    //phương thưc
    function an()
    {

        return $this ->mui ;
    }

    function noi($caunoi)
    {
       return $this->name = $caunoi;
    }

    function di($canhdep)
    {
        $this->mat = $canhdep;
    }

}
?>
<!-- truy xuất trong class ->
<?php
class nguoi
{
    var $name ='aa';
    var $tai;
    var $mieng;
    const sole =1;
    function ngui()
    {

    }
    function noi()
    {
        return $this->getsole();
    }
    function chay()
    {

    }
    function getsole()
    {
        return self::sole;
    }
}
?>
<?php
class ConNguoi2{
    //khai báo thuộc tính động
    public $name;
    public $mat;
    public $mui;
    //khai báo cóntant
    const SOCHAN =2;
    public function an()
    {

    }
    public function noi($caunoi){
        //gọi phương thức trong class
        return $this->getSoChan();

    }
    public function di()
    {

    }
    public function getName()
    {
        //gọi thuộc tính động trong class
        return $this->name;
    }
    public function getSoChan()
    {
        //gọi thuộc tính constant trong class
        return self::sochan;
    }
}
//khởi tạo class
$connguoi2 = new ConNguoi2();
//gọi thuộc tính ngoài class và đồng thời gán giá trị mới cho thuộc tính
$connguoi2->name ='Vũ thanh Tài';
//gọi lại thuộc tính để xem thay đổi
echo $connguoi2->name;
//gọi phương thức
echo $connguoi2->noi("vuc thanh tài");
?>
