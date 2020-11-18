
// 課題１
$name = "Nana";
if ($name == "Nana") {
    echo "私は" . $name . "です";
} else {
    echo $name . "ではありません";
}
echo "\n";

//課題２ 
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

// 課題３
$fruits = array("りんご","いちご","バナナ","ぶどう","みかん");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";

// 課題４
$start = 1;
$end = 100;

for($i = 0; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}
