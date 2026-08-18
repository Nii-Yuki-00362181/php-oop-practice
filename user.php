<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>
<body>
    <?php
    class User {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() {
        return $this->name;
        }

        public function introduce() {
            echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
        }

        public function isAdult() {
            return $this->age >= 18;
        }
    }

    echo "<h2>ユーザー管理プログラム</h2>";

    // ユーザーを作成
    $user1 = new User("田中太郎", 25);
    $user2 = new User("佐藤花子", 17);
    $user3 = new User("鈴木一郎", 30);

    //自己紹介
    echo "<h3>自己紹介</h3>";
    $user1->introduce();
    $user2->introduce();
    $user3->introduce();

    //成人判定
    echo "<h3>成人判定</h3>";
    if ($user1->isAdult()) {
        echo "{$user1->getName()}さんは成人です。<br>";
    } else {
        echo "{$user1->geiName()}さんは未成年です。<br>";
    }

    if ($user2->isAdult()) {
        echo "{$user2->getName()}さんは成人です。<br>";
    } else {
        echo "{$user2->getName()}さんは未成年です。<br>";
    }

    if ($user3->isAdult()) {
        echo "{$user3->getName()}さんは成人です。<br>";
    } else {
        echo "{$user3->getName()}さんは未成年です。<br>";
    }
    ?>
</body>