<?
$cars["Bmw"] = array("model"=>"x6m", "price"=>40000, "year"=>2015);
$cars["Skoda"] = array("model"=>"Octavia", "price"=>5000, "year"=>2008);
$cars["Mazda"] = array("model"=>"m3", "price"=>8000, "year"=>20105);

foreach ($cars as $key => $value) {
    echo "<h4>".$key."</h4>";
    echo "<h5>"."Model: ".$value["model"].", Price: ".$value["price"].", Year: ".$value["year"]."</h5><br>";
}
?>