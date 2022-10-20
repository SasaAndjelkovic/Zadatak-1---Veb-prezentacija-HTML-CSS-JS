 // $(".m2avatar").addClass(".active");
$(".m1avatar").hide();
$(".m2avatar").hide();
$(".f1avatar").hide();
$(".f2avatar").hide();

$( "input" ).on( "click", function(e) {
  e.preventDefault(); 
  $(".izaberi").hide();
  $(".mi").hide();

  switch ($( "input[type='radio']:checked" ).val()) {
    case "m1avatar":
      $(".m1avatar").show();
      break;
    case "m2avatar":
      $(".m2avatar").show();
      break;
    case "f1avatar":
      $(".f1avatar").show();
      break;
    case "f2avatar":
      $(".f2avatar").show();
      break
    default:
      console.log("Greska")
  }
});

 // if ($id == "m1avatar") {
    //   console.log("super");
    //   $(".m1avatar").hide();
    // }

  // let $id = $( "input[type='radio']:checked" ).val();
// $(".pot").click(function(e) {
//   e.preventDefault();
  
