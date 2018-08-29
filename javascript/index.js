//ideas and inspiration came from foodar script.js (ownership of Revature Pro)
//universal variables

var cityElem = "zipResult";
var cityButton = "cityChecker";
var cityInput = "userZip";

function findDriver(){
  //get zip and check if in valid area
  var btn = g("cityChecker");
	if (btn != null){

    btn.addEventListener("click", function zipChecker() {

      console.log("working...");
      var userZip = g(cityInput).value;
      var resultElem = g(cityElem);

      if(userZip != null && userZip == '76028')  {
          resultElem.innerHTML = "We cover that area!";
          resultElem.style.color = "green";
        } else {
          resultElem.innerHTML = "Unfortunately, you are not in a delivery zone";
          resultElem.style.color = "red";
        }
    });
  }
}


//shorthand
function g(id){
	return document.getElementById(id);
}


findDriver();
//updateCity();
