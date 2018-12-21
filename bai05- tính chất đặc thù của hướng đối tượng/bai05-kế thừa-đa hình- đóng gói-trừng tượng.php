<!--1.tính kế thưa
tính chất này cho phép một đối tượng có thể có đượ các đặc tính (thuộc tính, phương thức) mà đối tượng khác đã có thông qia kế thừa (extends). điều này cho phép
các đối tượng chia sẻ hay mở rộng các đặc tính sẵn có mà không phải tiến hành định nghĩa lại.
-->
<!--2. tính đa hình
nó được theer hiện rõ nhất qia voeecj gọi phuwogn thức của dối tượng. các phương thức hoàn toàn có thể giống nhau, nhưng việc sử lý luôn có thể khác nhau
 VD: có 3 lớp hình, hình vuông, hình trong: trong đó lớp hình là lớp cha của 2 lớp còn lại có phương thức là tính diện tích
 -->
<?php
class Hinh{

    protected function tinhDienTich()
    {
        //code
    }
}
    class HinhVuong extends Hinh{
        private $canh;
        public function setCanh($canh){
            $this->canh =$canh;
        }
        public function getCanh(){
            return $this->canh;
        }
        //xử lý tính diện tích của hình vuông
        public function tinhDienTich(){
            return pow($this->canh,4);
        }
    }
    class HinhTron extends Hinh{
    private $bankinh;
    public function setBanKinh($bankinh){
        $this->bankinh =$bankinh;
    }
        public function getBankinh()
        {
            return $this->bankinh;
        }
    //xủ lý diện tích hình tròn
    public function tinhDienTich(){
        return (pow($this->bankinh,2)*pi());
    }
    }
    $hinhvuong =new HinhVuong();
$hinhvuong->setCanh(4);
echo $hinhvuong->tinhDienTich();
echo '<br>';
$hinhtron =new HinhTron();
$hinhtron ->setBanKinh(4);
echo $hinhtron->tinhDienTich();
?>