function zipChecker(zip)  {
  if(zip > 20000)  {
    return true;
  } else {
    return false;
  }
}

function findDriver(userZip) {
  var validArea = zipChecker(userZip);

  while(!validArea) {
    if(userZip = 00000) {break;}
    zipChecker(userZip);
  }
  if(validArea){
    console.log("Unfortunately, you are outside the Foodar delivery area.");
  } else {
    console.log("Zip code search: aborted");
  }
}
