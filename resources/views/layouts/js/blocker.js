var Id = document.getElementById("blocker").getAttribute("data_blocker_id"),
	Host = document.getElementById("blocker").src.split(":")[0] + ":\/\/" + document.getElementById("blocker").src.split("/")[2];

$(document).ready(function(){
	blockUrl();
});