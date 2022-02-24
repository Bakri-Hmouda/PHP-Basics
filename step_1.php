"Hello world, Help me I am using PHP"
<?php
"I am getting errors but I can't see the errors";

echo "Search on how to enable PHP Errors\n";

# step 3
$name = 'Bakri';
$email = 'bakri.hmouda@gmail.com';

echo "My name is $name and my email is $email\n";

$height = 10;
$width = 10;
$area = $height * $width;

echo "area is: $area\n";

# step 4
$position = "trainee";
$gitHubLink = "github.com";

echo "Hello, I'm ".$name.", I'm a ".$position." at codi.tech please check my github link https://".$gitHubLink."\n";
echo "Hello, I'm $name, I'm a $position at codi.tech please check my github link https://$gitHubLink\n";

echo 'Hello, I\'m '.$name.', I\'m a '.$position.'at coodi.tech please check my github link https://'.$gitHubLink,"\n";
echo 'Hello, I\'m ',$name,', I\'m a ',$position,'at coodi,tech please check my github link https://',$gitHubLink,"\n";

# step 5

$course_name= "full stack developer";
$enrolled_students= 35;
$price=199.99;
$on_discount= false;

echo "Course title: $course_name\n";
echo "Enrolled Students: $enrolled_students\n";
echo "Course price: $price $ USD\n";
echo "Course on discount: " ,$on_discount ? "yes\n" : "no\n";


?>