<?php
//Associative arrays

$user_data = [
    "Fullname" => "Alex Okama",
    "email" => "Aokama@yahoo.com",
    "phone" => "+254112297778"
];
print $user_data["email"];
?>

<?php
//Multidimentional arrays 

$user_details =[
    "Director" => array(
        "Fullname" => "Alex Okama",
        "address" => "Mada",
        "email" => "Aokama@yahoo.com",
        "phone" => [
            "Home" => "254112297778",
            "Mobile" => "25740801280",
            "Work" => "25492578348",
        ]
    )
];
print $user_details
["Secretary "]["phone"]["Work"];

?>
<pre>
    <?php print_r("$user_details");?>
</pre>


