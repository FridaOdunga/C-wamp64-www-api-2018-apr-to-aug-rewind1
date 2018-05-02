<?php
$firstName = "Frida";
$secondName= "Adhiambo";
$age= 21;
echo "$firstName, $secondName";
echo "<br/> I'm in my $age st year of age";
//PHP_EOL. can be used to go to the next line
$asyn = '<br/>I have completed my assignment';
$done= $asyn;
print("$done");

$asyn2= 'Teacher, $asyn';
echo $asyn2;

$mom= "mommy";
$dad= "daddy";
echo "<br/>I love my $mom and $dad";
echo "<br/> They are such a blessing";
/*echo allows you print many values at once


 print() prints only one values
 printf() builds a formatted string by inserting values into a template
print_r() useful for debugging—it prints the contents of arrays, objects, and other things, in a more-
or-less human-readable form.
*/
echo "<br/>First\n", "SEcond \n", "Third";
echo ("<br/>Hello wrold!");
if( print("test")) {
  print("It has worked");

}
/* % Displays the % character.
b The argument is an integer and is displayed as a binary number.
c The argument is an integer and is displayed as the character with that value.
d The argument is an integer and is displayed as a decimal number.
e The argument is a double and is displayed in scientific notation.
E The argument is a double and is displayed in scientific notation using uppercase letters.
f The argument is a floating-point number and is displayed as such in the current locale’s format.
F The argument is a floating-point number and is displayed as such.
g The argument is a double and is displayed either in scientific notation (as with the %e  type specifier) or as a floating- point number (as with the %f  type specifier), whichever is shorter.
G The argument is a double and is displayed either in scientific notation (as with the %E  type specifier) or as a floating- point number (as with the %f type specifier), whichever is shorter.
o The argument is an integer and is displayed as an octal (base-8) number.
s The argument is a string and is displayed as such.
u The argument is an unsigned integer and is displayed as a decimal number.
x The argument is an integer and is displayed as a hexadecimal (base-16) number; lowercase letters are used.
X The argument is an integer and is displayed as a hexadecimal (base-16) number; uppercase letters are used.
*/
//• A floating-point number to two decimal places:
printf('%.2f', 27.452);
//• Decimal and hexadecimal output:
printf ("<br/> The hex value of %d is %X", 22, 214);
//adding an integer to three decimal places:
printf("Frey. Frey Adhiambo. %03d", 7);
//• Formatting a date:
//printf('<br/> %02d/%02d/%04d', $month, $day, $year);
//• A percentage:
printf('<br/> Work done is %.2f%%', 25.789);

//The strlen()  function returns the number of characters in a string:
$string = "Hello World!";
$length = strlen($string);
echo $length;

$name  = "Fred Flintstone";
$fluff = substr($name, 6, 4);
$sound = substr ($name, 11);
 echo $fluff;

//how many times a smaller string occurs in a larger one
 $sketch  = <<< EndOfSketch
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and  spam; spam bacon sausage and spam; spam egg spam spam bacon
and spam; spam sausage spam spam bacon spam tomato and spam;
EndOfSketch;
$count = substr_count($sketch, "spam");
print("<br/> The word spam occurs {$count} times.");
// removes the text from start to the end of the string
 $api= "The class starts in an hours time";
 $api2 = substr_replace( $api, "<br/>begins ", 10,7);
 echo $api2;
//Use a length  of 0  to insert without deleting:
 $api2 = substr_replace( $api, "<br/>begins ", 10,0);
 echo $api2;
 //Use a replacement of ""  to delete without inserting
 $api2 = substr_replace( $api, "<br/>begins ", "",7);
 echo $api2;
 //Here’s how you can insert at the beginning of the string
 $api2 = substr_replace( $api, "<br/> The lecturer said ", 0,0);
 echo $api2;
?>
