let addBtn = document.querySelector(".add");
let subtractBtn = document.querySelector(".subtract");
let firstTr = document.querySelector(".first-tr");
let secondTr = document.querySelector(".second-tr");


addBtn.addEventListener("click", addFunction);

newElementTh=document.createElement("th");
newElementTd=document.createElement("td");

newElementTd.className="text-light";
newElementTd.className="py-4";

newElementTh.className="text-light";
newElementTh.className="fs-5";

newElementTh.setAttribute('scope', 'col');



function addFunction(e){
    // console.log(e.type)

}