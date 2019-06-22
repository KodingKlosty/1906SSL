<h1>Hello World of PHP</h1>
<?
/* Variables */
$name = "James";
$age = 32;
$personIndexed =[$name,$age];
$person = ["name"=>$name,"age"=>$age];
$nullage = null;

$colors = ["Red",'<span style="color:Red">Red</span><br>',"Blue",'<span style="color:Blue">Blue</span><br>',
          "Green",'<span style="color:Green">Green</span><br>',"Purple",'<span style="color:Purple">Purple</span><br>',
          "Pink",'<span style="color:Pink">Pink</span>'];


/* Classes */
class phpWorld
{
    public function __construct()
    {

    }

    public function helloWorld($name="null", $age=0)
    {

        echo "Hello <br>";
        echo "Double Quotes: My name is $name and my age is $age. <br>";
       

    }

    public function grades($grade)
    {
        if($grade >= 90){
            echo "A";
        }
        elseif($grade < 90 && $grade >= 80){
            echo "B";
        }
        elseif($grade < 80&& $grade >= 70){
            echo "C";
        }
        elseif($grade <= 70 && $grade >= 60){
            echo "D";
        }
        elseif($grade < 60){
            echo "F";
        }
        else{
            echo "Error: Please check your grade";
        }
    }
}

/* Instantiated class */
$phpWorld = new phpWorld();
$phpWorld ->helloWorld($name,$age);

echo 'Single Quotes: My name is $name and my age is $age. <br>';
echo "Array Index: Name: ".$personIndexed[0]." Age: ".$personIndexed[1]."<br>";
echo "Array Key Value: name: " .$person['name']." age: ".$person['age'] ."<br>";
echo "Null age will retrun a blank area <br>";
echo "Null Age: ".$nullage."<br>";
unset($name);
echo "Unset Name:".$name."<br>";

/* Grades */
echo "-------------------------------------<br>";
echo "Grade 1: "; 
$phpWorld -> grades(94);
echo "<br>Grade 2: "; 
$phpWorld -> grades(54);
echo "<br>Grade 3: "; 
$phpWorld -> grades(89.9);
echo "<br>Grade 4: "; 
$phpWorld -> grades(60.01);
echo "<br>Grade 5: "; 
$phpWorld -> grades(102.1);
echo "<br>----------------------------------------------<br>";
echo "Colors";
echo "<br>----------------------------------------------<br>";
for($i=0;$i <= 9; $i++){
if($i % 2 === 0){
    echo "[$i] = ".$colors[$i+1];
}
}




?>
<h1> End of Hello World of PHP <h1>