<?

//PHP response code for tp8

$recipes = array();

//SpicedTofu multilayer array
$recipes["SpicedTofu"] = array();
$recipes["SpicedTofu"]["ingredients"] = array();
$recipes["SpicedTofu"]["equipment"] = array();
$recipes["SpicedTofu"]["directions"] = array();

$recipes["SpicedTofu"]["ingredients"][] = "1 (16 ounce) package extra-firm tofu, drained and pressed";
$recipes["SpicedTofu"]["ingredients"][] = "2 cups vegetable broth";
$recipes["SpicedTofu"]["ingredients"][] = "3 tablespoons vegetable oil";
$recipes["SpicedTofu"]["ingredients"][] = "½ cup all-purpose flour";
$recipes["SpicedTofu"]["ingredients"][] = "3 tablespoons nutritional yeast";
$recipes["SpicedTofu"]["ingredients"][] = "1 teaspoon salt";
$recipes["SpicedTofu"]["ingredients"][] = "½ teaspoon freshly ground black pepper";
$recipes["SpicedTofu"]["ingredients"][] = "1 teaspoon sage";
$recipes["SpicedTofu"]["ingredients"][] = "½ teaspoon cayenne pepper";

$recipes["SpicedTofu"]["equipment"][] = "Stove";
$recipes["SpicedTofu"]["equipment"][] = "Large skillet";
$recipes["SpicedTofu"]["equipment"][] = "Bowls";
$recipes["SpicedTofu"]["equipment"][] = "Measuring cups";
$recipes["SpicedTofu"]["equipment"][] = "Knife";

$recipes["SpicedTofu"]["directions"][] = "Cut pressed tofu into 1/2-inch thick slices; then cut again into 1/2-inch wide sticks. Place tofu in a bowl, and pour broth over the top. Set aside to soak.";
$recipes["SpicedTofu"]["directions"][] = "In a separate bowl, stir together flour, yeast, salt, pepper, sage, and cayenne.";
$recipes["SpicedTofu"]["directions"][] = "Warm oil in a large skillet over medium-high heat.";
$recipes["SpicedTofu"]["directions"][] = "Remove tofu sticks from broth, and squeeze most (but not all) of the liquid from them. Roll sticks in breading. (You may have to roll sticks twice to end up with a fairly dry outer layer of breading.)</span> Place tofu in hot
        oil; fry until crisp and browned on all sides. Add more oil if necessary.";

//recieve and process $_GET data

//get requested id
$requestedID = $_REQUEST["id"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

//get requested list
$requestedList = $_REQUEST["list"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

//get sub-array of ID and list
$requestedArray = $recipes[$requestedID][$requestedList];

//converting into JSON
$requestedJSON = "0";

if ($requestedArray != null) {
  $requestedJSON = json_encode($requestedArray);
}

//output JSON
echo $requestedJSON;





