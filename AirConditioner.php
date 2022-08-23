<?php
//4.ex
//$result = sum(1,2,3,4,5);
//echo $result; // 15
//++++++++++++ここまでは変更しない+++++++++++++++++++++

/**
引数として受け取った数値をすべて合算して返却する
/**/
//function sum($a, $b, $c) {
    //return $a + $b + $c;
//}
//$array = array(1,2,3);
//$totalValue = sum(...$array);
    // ↑必要な引数は自身で定義すること↑
    //ここから下に処理を記述する
//print("合算値:$totalValue");
//5.ex
class AirConditioner {
    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    
    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小値に戻る関数を定義すること　(1->2->3->4->5->1)の順で変化する
    */
    private $power;
    
    /*
    コンストラクタ
    */
    function _construct($temperature,$power) {
        $this->mode = "冷房";
        $this->temperature = $temperature;
        $this->power = $power;
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
    }
    
    /* 現在設定を表示 */
    function showStatus($temperature) {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
}
?>
