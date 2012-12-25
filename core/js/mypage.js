
function myAdd(){
	var oTag = document.createElement("input");
	oTag.setAttribute("type", "text");
	oTag.setAttribute("name", "hoge" + tag_num++);
	var oDiv = document.getElementById("area");
	oDiv.appendChild(oTag);
}
