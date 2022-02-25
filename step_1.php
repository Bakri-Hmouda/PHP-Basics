"Hello world, Help me I am using PHP"
<?php
"I am getting errors but I can't see the errors";

echo "Search on how to enable PHP Errors\n";



$height = 10;
$width = 10;
$area = $height * $width;

echo "area is: $area\n";


# step 5

$course_name= "full stack developer";
$enrolled_students= 35;
$price=199.99;
$on_discount= false;

echo "Course title: $course_name\n";
echo "Enrolled Students: $enrolled_students\n";
echo "Course price: $price $ USD\n";
echo "Course on discount: " ,$on_discount ? "yes\n" : "no\n";

# step 7
$birth_year = 1990;
$current_year = 2022;
if(($current_year-$birth_year) > 18){
    echo "you can drive\n ";
} else {
    echo "You still a kid, go and play GTA\n";
};



?>