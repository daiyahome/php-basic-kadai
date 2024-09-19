<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎_16章課題</title>
    </head>

    <body>
        <p>
            <?php
            // クラスを定義
            class Food {
                public $name;
                public $price;

                // メソッドを定義
                public function show_price() {
                    echo $this->price .'<br>';
                }

                // コンストラクタを定義
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
            }

            // クラスを定義
            class Animal {
                private $name;
                private $height;
                private $weight;

                // メソッドを定義
                public function show_height() {
                    echo $this->height .'<br>';
                }

                // コンストラクタを定義
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }

            // インスタンス化
            $potato = new Food('potato', 250);
            $dog = new Animal('dog', 60, 5000);

            // インスタンスの各プロパティの値を出力
            print_r($potato);
            echo '<br>';
            print_r($dog);
            echo '<br>';

            // 値を出力
            $potato->show_price();
            $dog->show_height();

            ?>
        </p>
    </body>
</html>