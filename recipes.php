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


//chicken multilayer array
$recipes["chicken"] = array();
$recipes["chicken"]["ingredients"] = array();
$recipes["chicken"]["equipment"] = array();
$recipes["chicken"]["directions"] = array();

$recipes["chicken"]["ingredients"][] = "3 large skinless, boneless chicken breast halves - cut into 1/2-inch medallions";
$recipes["chicken"]["ingredients"][] = "salt and pepper to taste";
$recipes["chicken"]["ingredients"][] = "½ cup all-purpose flour";
$recipes["chicken"]["ingredients"][] = "2 tablespoons vegetable oil, or as needed";
$recipes["chicken"]["ingredients"][] = "1 clove garlic, minced";
$recipes["chicken"]["ingredients"][] = "1 cup low sodium chicken broth";
$recipes["chicken"]["ingredients"][] = "½ lemon, thinly sliced";
$recipes["chicken"]["ingredients"][] = "¼ cup fresh lemon juice";
$recipes["chicken"]["ingredients"][] = "2 tablespoons capers, drained and rinsed";
$recipes["chicken"]["ingredients"][] = "3 tablespoons butter";
$recipes["chicken"]["ingredients"][] = "2 tablespoons minced Italian (flat-leaf) parsley";

$recipes["chicken"]["equipment"][] = "Oven";
$recipes["chicken"]["equipment"][] = "Serving platter";
$recipes["chicken"]["equipment"][] = "Skillet";
$recipes["chicken"]["equipment"][] = "Stirring spoon";
$recipes["chicken"]["equipment"][] = "Knife";

$recipes["chicken"]["directions"][] = "Preheat oven to 200 degrees F (95 degrees C). Place a serving platter into the oven to warm.";
$recipes["chicken"]["directions"][] = "Season the chicken breast pieces with salt and pepper and dredge them in flour.";
$recipes["chicken"]["directions"][] = "Shake off excess flour. Heat the vegetable oil in a skillet; pan-fry the chicken pieces until golden brown on both sides, about 3 minutes per side.";
$recipes["chicken"]["directions"][] = "Work in batches and do not crowd skillet, adding oil as needed . Place the chicken pieces onto the warmed platter in the oven.";
$recipes["chicken"]["directions"][] = "When finished with all the chicken, drain most of the oil from the skillet, leaving a thin coating on the surface of the pan.";
$recipes["chicken"]["directions"][] = "Cook and stir the minced garlic in the skillet until fragrant, about 20 seconds. Pour in the chicken broth.";
$recipes["chicken"]["directions"][] = "Scrape and dissolve any brown bits from the bottom of the skillet. Stir in the lemon slices and bring the mixture to a boil.";
$recipes["chicken"]["directions"][] = "Let cook, stirring occasionally, until the sauce reduces to about 2/3 cup, 5 to 8 minutes.";
$recipes["chicken"]["directions"][] = "Add the lemon juice and capers; simmer until the sauce is reduced and slightly thickened, about 5 minutes more.";
$recipes["chicken"]["directions"][] = "Drop the butter into the skillet and swirl it into the sauce by tilting the skillet until the butter is melted and incorporated.";
$recipes["chicken"]["directions"][] = "Add the parsley; remove from heat and set aside.";
$recipes["chicken"]["directions"][] = "Arrange the chicken medallions on serving plates and spoon sauce over each portion to serve.";


//burger multilayer array
$recipes["burger"] = array();
$recipes["burger"]["ingredients"] = array();
$recipes["burger"]["equipment"] = array();
$recipes["burger"]["directions"] = array();

$recipes["burger"]["ingredients"][] = "2 pounds ground beef";
$recipes["burger"]["ingredients"][] = "1 (1.25 ounce) envelope onion soup mix";
$recipes["burger"]["ingredients"][] = "½ cup mayonnaise";
$recipes["burger"]["ingredients"][] = "2 cups shredded Cheddar cheese";
$recipes["burger"]["ingredients"][] = "24 dinner rolls, split";
$recipes["burger"]["ingredients"][] = "½ cup sliced pickles (Optional)";

$recipes["burger"]["equipment"][] = "Oven";
$recipes["burger"]["equipment"][] = "Baking Sheet";
$recipes["burger"]["equipment"][] = "Measuring cups";
$recipes["burger"]["equipment"][] = "Spatula";
$recipes["burger"]["equipment"][] = "Knife";

$recipes["burger"]["directions"][] = "Preheat an oven to 350 degrees F (175 degrees C).";
$recipes["burger"]["directions"][] = "Cover a baking sheet with aluminum foil and spray with cooking spray.";
$recipes["burger"]["directions"][] = "Mix together the ground beef and onion soup mix in a large skillet. Drain and discard any excess grease. Remove from heat.";
$recipes["burger"]["directions"][] = "Cook and stir over medium-high heat until the beef is crumbly, evenly browned, and no longer pink.";
$recipes["burger"]["directions"][] = "Stir the mayonnaise and Cheddar cheese into the ground beef mixture.";
$recipes["burger"]["directions"][] = "Lay the bottoms of the dinner rolls on the prepared baking sheet. Replace the tops.";
$recipes["burger"]["directions"][] = "Spread the cheese and beef mixture on the bottom half of each roll.";
$recipes["burger"]["directions"][] = "Cover with another sheet of aluminum foil sprayed with cooking spray.";
$recipes["burger"]["directions"][] = "Bake in the preheated oven until the burgers are heated through and cheese melts, about 30 minutes. Serve with sliced pickles.";


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





