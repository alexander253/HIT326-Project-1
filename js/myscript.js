function myFunction() {
  var x = document.getElementById("hcontent");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}

function myFunction2() {
  var x = document.getElementById("hcontent2");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}

function myFunction3() {
  var x = document.getElementById("hcontent3");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }

}

function myFunction4() {
  var x = document.getElementById("hcontent4");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }

}

function myFunction5() {
  var x = document.getElementById("hcontent5");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}
function myFunction6() {
  var x = document.getElementById("hcontent6");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}
function myFunction7() {
  var x = document.getElementById("hcontent7");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}
function myFunction8() {
  var x = document.getElementById("hcontent8");
  if (x.style.display === "none")
    {x.style.display = "block";}
   else {
    x.style.display = "none";
  }
}

function navFunc() {
  var x = document.getElementById("nav_menu");
  if (x.style.display === "block")
    {x.style.display = "none";}
   else {
    {x.style.display = "block";}
  }
}


//increment counter funcs dead trees
function incrementValueRabbitrat()
{
    var value = parseInt(document.getElementById('rabbitratNumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('rabbitratNumber').value = value;
}

function incrementValueBlackrat()
{
    var value = parseInt(document.getElementById('blackratNumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('blackratNumber').value = value;
}

function incrementValueLizard()
{
    var value = parseInt(document.getElementById('lizardNumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('lizardNumber').value = value;
}

function incrementValueGlider()
{
    var value = parseInt(document.getElementById('gliderNumber').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('gliderNumber').value = value;
}

//create icon for dead tree graph
function blackRat() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/blackrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("blackrat");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function rabbitRat() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/rabbitrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("rabbitrat");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function lizard() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/goanna.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("lizard");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function glider() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/glider.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("glider1");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

//create icon for live tree graph
function blackRat2() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/blackrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("blackrat2");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function rabbitRat2() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/rabbitrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("rabbitrat2");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function lizard2() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/goanna.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("lizard2");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function glider2() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/glider.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("glider3");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function possum() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/possum.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("possum");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

//create icon for log graph
function blackRat3() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/blackrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("blackrat3");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function rabbitRat3() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/rabbitrat.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("rabbitrat3");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function lizard3() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/goanna.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("lizard3");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function python() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/python.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("python");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function dingo() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/dingo.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("dingo");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}

function bandicoot() {
  var pic = document.createElement("img");
  pic.src = '../images/animal_imgs/bandicoot.jpg';
  pic.className= 'rounded2';
  var test = document.getElementById("bandicoot");
  pic.innerHTML = "test yo";
  test.appendChild(pic);
}
