<?php

// $filters=array(
//     "data"=> FILTER_VALIDATE_EMAIL,
//     "data2"=>array(
//         "filter"=> FILTER_VALIDATE_INT,
//         "options"=>array(
//             "min_range"=>1,
//             "max_range"=>100
//         )
//     )
// );

// print_r(filter_input_array(INPUT_POST,$filters));

$arr =array(
    "name"=>"tsatsalas",
    "age" => "23",
    "email"=> "left@gmail.com"
);

$filters = array(
  "name"=>array(
      "filter"=>FILTER_CALLBACK,
      "options" =>"ucwords"
  ),
  "age" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
          "min_range"=>1,
          "max_range"=>120
      ),
    "email"=> FILTER_VALIDATE_EMAIL
    );
    print_r(filter_var_array($arr,$filters));
);

?>
<!DOCTYPE html>
<html>
<head>
<title>My Website</title>
</head>
    <body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <label>Name</label><br>
                <input type="text" name="data">
                <input type="text" name="data2">
            </div>
            <input type="submit" value="Submit">
</form> 


</body>
</html>