let addBtn = document.querySelector(".add");
let subtractBtn = document.querySelector(".subtract");
let firstTr = document.querySelector(".first-tr");
let secondTr = document.querySelector(".second-tr");
let th = document.querySelectorAll("th");
let td = document.querySelectorAll("td");


addBtn.addEventListener("click", addFunction);

subtractBtn.addEventListener("click", subtractFunction);

function subtractFunction(e){
    th[th.length-1].remove();
    td[th.length-1].remove();
}


function addFunction(e){
    // for the fisrt table head


    // i selected all the input tag in the table head
    let all = document.querySelectorAll(".head");
    
    all=all.length;
    all=all+1;
    // then assigned it to the nameText
    let nameText=`head${all}`;

    // am trying to create an element called table head
    let MainTableHead = document.createElement("th");
    MainTableHead.classList="text-light fs-5";
    MainTableHead.setAttribute('scope', 'col');

    // am trying to create an element called input and this input will be inside the table head
    let MainTableHeadInput = document.createElement("input");
    MainTableHeadInput.classList="head";
    MainTableHeadInput.setAttribute('type', 'text');
    MainTableHeadInput.setAttribute('name', nameText);

    // here am trying to append the input to the table head
    MainTableHead.append(MainTableHeadInput);

    // here am trying to append the table head into the general table row that houses all the table head
    firstTr.append(MainTableHead);


    // end of table head




    // for the  table data
    let theInputInTheTableData = document.querySelectorAll(".data");
    
    theInputInTheTableData=theInputInTheTableData.length;
    theInputInTheTableData=theInputInTheTableData+1;
    
    // then assigned it to the nameText
    let dataText=`data${theInputInTheTableData}`;

    let MainTabledata = document.createElement("td");
    MainTabledata.classList="text-light py-4";
    
    let MainTabledataInput = document.createElement("input");
    MainTabledataInput.classList="data";
    MainTabledataInput.setAttribute('type', 'text');
    MainTabledataInput.setAttribute('name', dataText);

    // appending the input to the table data
    MainTabledata.append( MainTabledataInput);

    // appending the table data to the table row
    secondTr.append(MainTabledata);
    console.log(MainTabledata)

}

let input = document.querySelectorAll(".head");

input.forEach(element => {
    element.addEventListener("keydown", enterFunction);
});

function enterFunction(e){
    if(e.key==="Enter"){
        let isValid = true;
        for (let i = 0; i < input.length; i++) {
            if(input[i].value===""){
                input[i].classList.add("error");
                isValid = false;
            }else{
                input[i].classList.remove("error");
            }
        }
        if(isValid){
            document.getElementById("first-form").submit();
        }
    }
}

let data = document.querySelectorAll(".data");

data.forEach(element => {
    element.addEventListener("keydown", dataFunction);
});
function dataFunction(e){
    if(e.key==="Enter"){
        let isValid = true;
        for (let i = 0; i < data.length; i++) {
            if(data[i].value===""){
                data[i].classList.add("error");
                isValid = false;
            }else{
                data[i].classList.remove("error");
            }
        }
        if(isValid){
            // document.getElementById("second-form").submit();
            console.log(e.target.value);

        }
    }
}

let displayingData = document.querySelectorAll(".displayData");

displayingData.forEach(element => {
    element.addEventListener("click", (e)=>{
        // console.log(e.target)
        // displayingData.display="none";
        for (let i = 0; i < displayingData.length; i++) {
           displayingData[i].style.display="none";
            // console.log(data);
            data.forEach(element => {
                element.style.display="block"
            });
        }

    })
});
