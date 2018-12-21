<!--Abstract
-abstract chỉ định nghĩa chứ không được phép viết code cử lý trong phương thức
- nếu không phải phương thức abstract thì vẫn  khai báo viết code bình thường
-abstract chỉ có thể khai báo trong abstract class
- các thuộc tính trong abstract class thì không được khai báo là abstract
-không thể khởi tạo abstract class -> nên các phương thức chỉ được khai báo ở mức  protected và public
-các lớp kế thừa một abstract class phải định nghĩa lại tất cả các phương thức trong abstract class đó (nếu không sẽ bị lỗi)
-->
<?php
abstract class Person{
    //khai báo một abstract đúng
    abstract public function getName();
    //sai vì abstract class không theeer viết code xử lý được
    abstract public function getHeight();
    {
        //
    }
}
?>
<?php
abstract class dongvat{
    protected $name;
    abstract protected function getName();
}
//class này sai vì chưa định nghĩa lại phương thức abstract getName
class ConTrau extends dongvat{
    //
}
//class này đúng vì đã định nghĩa lại đầy đủ các phương thức abstract
class conbo extends dongvat{
    public funtion getName()
    {
        return $this->name;
    }
}
?>
