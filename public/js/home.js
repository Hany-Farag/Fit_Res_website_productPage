// changeImg function to change image in workout plans in index page
var index = 0;
var imges = ["img/character_jogger_1.gif", "img/output-onlinegiftools(2).gif", "img/6f8ede4dab23b0518f0efc61e5810d-unscreen.gif"];
setInterval(function () {
    index = index % 3;
    if (index > 0) {
        document.getElementById("img-trn" + (index-1)).setAttribute("class", "btn btn-sm m-1 btn-ft1_before mb-2")
    }
    if (index==0) {
        document.getElementById("img-trn" + (index+2)).setAttribute("class", "btn btn-sm m-1 btn-ft1_before mb-2")
    }
    // console.log("img-trn"+index);
    
        document.getElementById("img-trn" + index).setAttribute("class", "btn btn-sm m-1 btn-ft1_after mb-2")
        document.getElementById("trn-sec-img").src = imges[index]
    // console.log(index);
    index++;

}, 2000);
