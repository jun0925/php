<?php 
/**
 * 속성 및 메서드의 가시성 제어
 * 클래스로 작업할 때 가시성 키워드를 사용하여 클래스의 속성 및 메서드에 대한 액세스를 제한하여 제어할 수 도 있습니다.
 * 세 가지 가기성 키워드(가장 많이 보이는 것부터 가장 적게 보이는 것)가 있습니다.
 * public, protected, private 속성과 메서드에 액세스하고 수정할 수 있는 방법과 위치를 결정합니다.
 * 
 * public - public 속성이나 메서드는 클래스 내부와 외부 어디에서나 액세스할 수 있습니다.
 * 이것은 PHP의 모든 클래스 메버에 대한 기본 가시성입니다.
 * 
 * protected - 보호된 속성이나 메서드는 클래스 자체 내에서 또는 자식 또는 상속된 클래스(예: 해당 클래스를 확장하는 클래스)에서만 액세스할 수 있습니다.
 * 
 * private - private 속성이나 메서드는 그것을 정의하는 클래스 내에서만 액세스할 수 있습니다.
 * 자식 또는 상속된 클래스도 private 속성이나 메서드에 액세스할 수 없습니다.
 */

class Automobile
{
    // Declare properties
    public $fuel;
    protected $engine;
    private $transmission;
}

class Car extends Automobile
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br />';
    }
}

// Create an object from Automobile class
$automobile = new Automobile;

// Attempt to set $automobile object properties
$automobile->fuel = 'Petrol'; // ok
$automobile->enging = '1500 cc'; // fatal error
$automobile->transmission = 'Manul'; // fatal error

// Create an object from Car class
$car = new Car;

// Attemp to set $car object properties
$car->fuel = 'Diesel'; // ok
$car->engine = '2200 cc'; // fatal error
$car->transmission = 'Automatic'; // undefined
?>