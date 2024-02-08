document.addEventListener('DOMContentLoaded', function() {
  // Get all elements from the document and assign to local variables to avoid repetition and make code neater
  var firstnameInput = document.getElementById("fname");
  var lastnameInput = document.getElementById("lname");
  var emailInput = document.getElementById("email");
  var phoneInput = document.getElementById("phno");
  var mainForm = document.getElementById("mainForm");
  var jobs = ["cash","bar","man"];
  var nextButton = document.getElementById("nextButton");
  var prevButton = document.getElementById("prevButton");

  // If there is a paramater in the url, use it to assign the job to the selected job
  var searchParams = new URLSearchParams(window.location.search);
  var selJob = searchParams.get("j");
  if(selJob != null){
    document.getElementById('job').selectedIndex = jobs.indexOf(selJob) + 1;
  }

  // When the submit button is clicked, disable the default actions to run our code
    mainForm.addEventListener('submit', function(e) {
      e.preventDeafult();
    });
  // Create the boba box
  var sizeInput = document.getElementById('fname');
  var height = 300;
  var width = 200;
  var origHeight = 300;
  var origWidth = 200;
  var maxWidth = 400;
  
  // If the website is not on mobile, set the code to change the size of the boba container with the length of the first name
  if (!window.matchMedia('(max-width: 1000px)').matches) {
    origHeight = 450;
    origWidth = 300;
    height = origHeight;
    width = origWidth;
    bobaContainer.style.width = width + "px";
    bobaContainer.style.height = height + "px";

    sizeInput.addEventListener('input', function () {
    // Trim the first name to remove extra spaces
    var size = sizeInput.value.trim().length;

    // Update the width by a certain amount until the width surpasses the max width

    if(size > (width-origWidth)/10){
      if(width < maxWidth){
        while(size > (width-origWidth)/10){
          width += 10;
          height += 15;
        }
      }
    }else{
      while(size < (width-origWidth)/8){
        width -= 8;
        height -= 12;
      }
    }
    bobaContainer.style.width = width + "px";
    bobaContainer.style.height = height + "px";

    // If it is changed, update the text box with the new content 
    if(size > 0){
      updateText(sizeInput.value,width,-1);
    }else{
      document.getElementById("flavorLabel").textContent = "Boba!";
    }
  });
  }
  // If otherwise on mobile, set it static to 500;
  else{
    
    width = 500;
  }
  
  // Update the text with the given paramaters to reduce repetition in the code

  function updateText(name, curWidth, flavor){
    var size;
    if(curWidth >= 360){
      size = "Large";
    }else if(curWidth >= 330){
      size = "Medium";
    }else{
      size = "Small";
    }
    if(flavor == -1){
      document.getElementById("flavorLabel").innerHTML = `${name}'s Boba:<br>Size ${size}`;
    }else{
      document.getElementById("flavorLabel").innerHTML = `${name}'s Boba:<br>Size ${size},<br>${flavor} Flavor `;
    }
  }

  // Get the other toppings based on the phone input's length.
  var phoInput = document.getElementById('phno');
  var otherToppings = [];

  phoInput.addEventListener('input', function () {
    var phone = phoInput.value.trim();
    var phoneLength = phone.length;
    
    // If the phone number length is larger than the current amount of other toppings, remove the other toppings until their count matches
    if(phoneLength < otherToppings.length){
      while(phoCount < otherToppings.length){
        otherToppings[otherToppings.length-1].remove();
        otherToppings.pop();
      }
    }else{
      //Add the star to the queue twice and start the timer to create a wait effect.
      queue.push("star")
      createTimer("star");

      queue.push("star")
      createTimer("star");
  }});

  // Change the color of the stars based on the selected gender
  var genderInput = document.getElementById('gender');

  genderInput.addEventListener('input', function () {
    changeStarColor();
  });

  var imgFile = "";
  // Function that checks which gender is selected and updates the picture
  function changeStarColor(){
    if(genderInput.value == 'male'){
      imgFile = "images/blueStar.svg";
    }else if(genderInput.value == 'female'){
      imgFile = "images/pinkStar.svg";
    }else if(genderInput.value == "other"){
      imgFile = "images/otherStar.svg";
    }else{
      imgFile = "";
    } if (imgFile != ""){
      otherToppings.forEach(element => {
      element.src=imgFile;
    });
  }
  }
  // Gets the amount of toppings based on the length of the email address.
  var toppingsInput = document.getElementById('email');
  var bobaCup = document.getElementById('bobaCup');
  var pearlsArray = [];

  toppingsInput.addEventListener('input', function () {
    var toppings = toppingsInput.value.trim();
    var pearlsCount = toppings.length;
    
    // If the toppings input length is larger than the current amount of other toppings, remove pearls until their count matches

    if(pearlsCount < pearlsArray.length){
      while(pearlsCount < pearlsArray.length){
        pearlsArray[pearlsArray.length-1].remove();
        pearlsArray.pop();
      }
    }else{
      //Add the star to the queue and start the timer to create a wait effect.
      queue.push("pearl")
      createTimer("pearl");
  }});

  // Create sugar cubes 
  var sugarInput = document.getElementById('lname');
  var sugarArray = [];
  var droppingPos = width-35;
  var droppedPos = [];
  var curHeight = -10;
  var curStoppingHeight = -150;
  var level = 1;

  sugarInput.addEventListener('input', function () {
    // Create sugar cubes based on the length of the sugar input
    var sugar = sugarInput.value.trim();
    var sugarCount = sugar.length * 2;

    // If the sugar input length is larger than the current amount of sugar cubes, remove the sugar cubes until their count matches

    if(sugarCount < sugarArray.length){
      while(sugarCount < sugarArray.length){
        sugarArray[sugarArray.length-1].remove();
        sugarArray.pop();
      }
    }else{
      //Add the sugar cube to the queue twice and start the timer to create a wait effect.

        queue.push("sugar")
        createTimer("sugar");

        queue.push("sugar")
        createTimer("sugar");
      }
  });

// The code for the queue and timer of creating all of the toppings
var queue = [];
var running = false;
var interval;
function createTimer(type){
  // Create the timer if it is not already currently running
  if(queue.length>0 && !running){
    running = true;
    // Run the function checkEmpty every two seconds
    interval = setInterval(()=>{checkEmpty()},2000);
  }
}

function checkEmpty(){
  // Check if the queue is empty. If it is, stop the timer. If not, create the first element in the queue.
  if(queue.length == 0){
    clearInterval(interval);
    running = false;
  }else{
    createThing(queue[0]);
    queue.shift();
  }
}

  // Create each of the toppings based on the details of the first element in the queue
function createThing(type) {
  // Add all specific styles to the topping based on what type of topping it is
    if (type === 'sugar') {
      var sugarCube = document.createElement('div');
      sugarCube.className = 'sugar-cube';
      sugarCube.style.left = (Math.floor(Math.random() * (width - 55)) + 30) + 'px';
      bobaCup.appendChild(sugarCube);
      sugarArray.push(sugarCube);
    } else if (type === 'star') {
      var randomTopping = document.createElement('img');
      randomTopping.src = 'images/blackstar.svg';
      randomTopping.className = 'star';
      randomTopping.style.left = (Math.floor(Math.random() * (width - 55)) + 30) + 'px';
      bobaCup.appendChild(randomTopping);
      otherToppings.push(randomTopping);
      changeStarColor();
    } else if (type === 'pearl') {
      var pearl = document.createElement('div');
      pearl.className = 'boba-pearls';
      pearl.style.left = (Math.floor(Math.random() * (width - 55)) + 30) + 'px';
      bobaCup.appendChild(pearl);
      pearlsArray.push(pearl);
    }
}

  // Check any collisions between the different toppings.
function checkCollisions() {
  for (var i = 0; i < pearlsArray.length; i++) {
    var bobaRect = pearlsArray[i].getBoundingClientRect();

    for (var j = 0; j < sugarArray.length; j++) {
      var sugarRect = sugarArray[j].getBoundingClientRect();

      if (
        bobaRect.right > sugarRect.left &&
        bobaRect.left < sugarRect.right &&
        bobaRect.bottom > sugarRect.top &&
        bobaRect.top < sugarRect.bottom
      ) {
        pearlsArray[i].style.animationPlayState = 'paused';
        sugarArray[j].style.animationPlayState = 'paused';
      }
    }
    for (var j = 0; j < otherToppings.length; j++) {
      var otherRect = otherToppings[j].getBoundingClientRect();

      if (
        bobaRect.right > otherRect.left &&
        bobaRect.left < otherRect.right &&
        bobaRect.bottom > otherRect.top &&
        bobaRect.top < otherRect.bottom
      ) {
        pearlsArray[i].style.animationPlayState = 'paused';
        otherToppings[j].style.animationPlayState = 'paused';
      }
    }
  }
  for (var i = 0; i < otherToppings.length; i++) {
    var otherRect = otherToppings[i].getBoundingClientRect();

    for (var j = 0; j < sugarArray.length; j++) {
      var sugarRect = sugarArray[j].getBoundingClientRect();

      if (
        otherRect.right > sugarRect.left &&
        otherRect.left < sugarRect.right &&
        otherRect.bottom > sugarRect.top &&
        otherRect.top < sugarRect.bottom
      ){
        otherToppings[i].style.animationPlayState = 'paused';
        sugarArray[j].style.animationPlayState = 'paused';
      }
    }
  }
}
setInterval(checkCollisions, 100);

  $('#phno').keyup(function() {
    // Check that the phone number does not contain any letters. If it does, remove them.
    var cleanedValue = '';
    for (var i = 0; i < phoneInput.value.length; i++) {
      if (!isNaN(parseInt(phoneInput.value[i], 10))) {
        cleanedValue += phoneInput.value[i];
      }else{
         document.getElementById("nextDetails").style.display="block";
        document.getElementById("nextDetails").textContent = "You cannot have letters in your phone number";
      }
    }
    phoneInput.value = cleanedValue;
});
  $('#phno').keydown(function() {
    // Check that the phone number does not contain any letters. If it does, remove them.
    var cleanedValue = '';
    for (var i = 0; i < phoneInput.value.length; i++) {
      if (!isNaN(parseInt(phoneInput.value[i], 10))) {
        cleanedValue += phoneInput.value[i];
      }else{
         document.getElementById("nextDetails").style.display="block";
        document.getElementById("nextDetails").textContent = "You cannot have varters in your phone number";
      }
    }
    phoneInput.value = cleanedValue;
  });

  // Call all the elements from the html page to reduce redundancy
  var fieldset1 = document.getElementById("fieldset1");
  var fieldset2 = document.getElementById("fieldset2");
  var fieldset3 = document.getElementById("fieldset3");

  var current = 1;
  var submitButton = document.getElementById("submitButton");

  // Create variables to store all of the information that the user enters throughout the pages of the form
  var submittedFirstName;
  var submittedLastName;
  var submittedEmail;
  var submittedPhone;
  var submittedJob;
  var submittedGender;
  var submittedDate;
  var submittedDescription;
  var submittedFile;
  var problem = "";
  var jobSelect = document.getElementById('job');
  var genderSelect = document.getElementById('gender');
  var dobInput = document.getElementById("dob");
  var description = document.getElementById("description");
  var fileInput = document.getElementById("upload");
  var submitDetails = document.getElementById('submitDetails')

  //Hide the third fieldset to only show the first fieldset
  fieldset2.style.display="none";

  fieldset3.style.display="none";
  nextButton.addEventListener('click',()=>{
    if(current == 1){
      fieldset1.style.transition = 'opacity 0.5s ease';
      fieldset1.style.opacity = '0';
      submittedFirstName = firstnameInput.value;
      submittedLastName = lastnameInput.value;
      submittedEmail = emailInput.value;
      submittedPhone = phoneInput.value;

      setTimeout(function () {
        fieldset1.style.display = 'none';
        fieldset2.style.display = 'block';
        fieldset2.style.transition = 'opacity 0.5s ease';
        fieldset2.style.opacity = '1';
        current = 2;
      }, 500);
    }
  });

  prevButton.addEventListener('click',()=>{
    if(current == 2){
      fieldset2.style.transition = 'opacity 0.5s ease';
      fieldset2.style.opacity = '0';

      setTimeout(function () {
        fieldset2.style.display = 'none'; 
        fieldset1.style.display = 'block';
        fieldset1.style.transition = 'opacity 0.5s ease';
        fieldset1.style.opacity = '1';
        current = 1;
      }, 500);
    }
  });

  
  submitButton.addEventListener('click',(e)=>{
    // Reset the submitdetails box and problem box
    submitDetails.innerHTML = "";
    problem = "";
    // Store the current page's values in the variables
    submittedJob = jobSelect.value;
    submittedGender = genderSelect.value;
    submittedDate = dobInput.value;
    submittedDescription = document.getElementById("description").value;
    submittedFile = document.getElementById("upload").files[0];

    // Check to makes sure that there are no problems with entered data. If there is, add it to the problems string.

      if(submittedFirstName == ""){
        problem += "First Name is required. <br>";
      }
       if(submittedLastName == ""){
        problem += "Last Name is required. <br>";
      }
       if(submittedEmail == ""){
        problem += "Email is required. <br>";
      }
       if(submittedPhone == ""){
        problem += "Phone Number is required. <br>";
      }
       if(submittedJob == "sel"){
        problem += "A job must be selected. <br>";
      }
       if(submittedGender == "sel"){
        problem += "A gender must be selected. <br>";
      }
       if(submittedDate == ""){
        problem += "Date of Birth is required. <br>";
      }
      if(submittedDescription == ""){
        problem += "Description is required. <br>";
      }
      if(submittedFile == null){
        problem += "A resume is required. <br>";
      }
      if(problem != ""){
        // If the problem is not blank, stop the deafult code from running 
        e.preventDefault();
        // Create the textbox with the list of problems
        submitDetails.innerHTML = problem + "<br>";
      }else{
          // Fade out of the current page
          fieldset2.style.transition = 'opacity 0.5s ease';
          fieldset2.style.opacity = '0';

          setTimeout(function () {
            fieldset2.style.display = 'none';
            fieldset3.style.display = 'block';
            fieldset3.style.transition = 'opacity 0.5s ease';
            fieldset3.style.opacity = '1';
            current = 3;
          }, 500);
          // Submit the form to run the php code to store these values in the database
          mainForm.submit();
      }
    });
});