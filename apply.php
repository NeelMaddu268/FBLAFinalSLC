<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apply</title>
  <!-- Link all stylesheets, local and global -->
    <link rel="stylesheet" href="css/apply.css" />
    <link rel="stylesheet" href="css/nav.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="/images/lego.png">
  <!-- Link the js file-->

    <script src="javascript/navres.js" defer></script>

</head>
<body>
  <!-- The code for the navigation bar -->
  
  <nav id="navBar">
    <!-- Create the logo and habmurger menu, keep it hidden at first -->

    <a href = "index.php"><img src="images/lego.png" id='logo'></img></a>
    <img src="images/X.svg" id='x' class="hidden menu"></img>
    <img src="images/Hamburger.svg" id='Hamburger'class="menu"></img>
    <ul class="navLinks" id="navLinks">
    
      <!-- Add the svg for the home page that was create and imported from figma -->
      <li>
        <a href = "index.php"><svg class="home" width="78" height="70" viewBox="0 0 78 70" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="path-1-inside-1_200_60" fill="white">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.2543 0.962404C37.6373 -0.320801 39.7191 -0.320801 41.102 0.962404L76.1282 30.0417C78.6416 32.3737 78.4382 36.9788 75.0782 36.9788H71C70.4477 36.9788 70 37.4265 70 37.9788V68.2918C70 69.8518 62.7707 69.7965 59.9798 69.7751C59.7145 69.7731 59.4894 69.7714 59.3143 69.7714H46.9208L46.9846 49.0154C46.9931 46.248 44.752 44 41.9846 44H37C34.2386 44 32 46.2386 32 49V69.7714H17.922C17.7378 69.7714 17.5024 69.7731 17.2264 69.7752C14.3418 69.7965 7.01561 69.8508 7.17876 68.2918V38.8356C7.17876 37.7886 6.37126 36.9187 5.32714 36.8411L3.67884 36.7184C0.31883 36.7184 -1.28466 32.3737 1.22875 30.0417L36.2543 0.962404Z"/>
        </mask>
        <path class="inactive" fill-rule="evenodd" clip-rule="evenodd" d="M36.2543 0.962404C37.6373 -0.320801 39.7191 -0.320801 41.102 0.962404L76.1282 30.0417C78.6416 32.3737 78.4382 36.9788 75.0782 36.9788H71C70.4477 36.9788 70 37.4265 70 37.9788V68.2918C70 69.8518 62.7707 69.7965 59.9798 69.7751C59.7145 69.7731 59.4894 69.7714 59.3143 69.7714H46.9208L46.9846 49.0154C46.9931 46.248 44.752 44 41.9846 44H37C34.2386 44 32 46.2386 32 49V69.7714H17.922C17.7378 69.7714 17.5024 69.7731 17.2264 69.7752C14.3418 69.7965 7.01561 69.8508 7.17876 68.2918V38.8356C7.17876 37.7886 6.37126 36.9187 5.32714 36.8411L3.67884 36.7184C0.31883 36.7184 -1.28466 32.3737 1.22875 30.0417L36.2543 0.962404Z" fill="white"/>
        <path class ="stroke" d="M41.102 0.962404L38.3814 3.89463L38.4622 3.9696L38.547 4.04L41.102 0.962404ZM36.2543 0.962404L38.8094 4.03998L38.8942 3.96959L38.975 3.89463L36.2543 0.962404ZM76.1282 30.0417L78.8489 27.1094L78.7681 27.0345L78.6833 26.9641L76.1282 30.0417ZM59.9798 69.7751L59.9492 73.775L59.9492 73.775L59.9798 69.7751ZM46.9208 69.7714L42.9208 69.7591L42.9085 73.7714H46.9208V69.7714ZM46.9846 49.0154L50.9846 49.0277L50.9846 49.0277L46.9846 49.0154ZM32 69.7714V73.7714H36V69.7714H32ZM17.2264 69.7752L17.1968 65.7753L17.1967 65.7753L17.2264 69.7752ZM7.17876 68.2918L11.157 68.7081L11.1788 68.5005V68.2918H7.17876ZM5.32714 36.8411L5.03038 40.83L5.03039 40.83L5.32714 36.8411ZM3.67884 36.7184L3.9756 32.7295L3.82742 32.7184H3.67884V36.7184ZM1.22875 30.0417L-1.32635 26.9641L-1.41114 27.0345L-1.49192 27.1094L1.22875 30.0417ZM43.8227 -1.96983C40.9053 -4.67672 36.451 -4.67673 33.5337 -1.96982L38.975 3.89463C38.9179 3.94762 38.809 4 38.6782 4C38.5474 4 38.4385 3.94762 38.3814 3.89463L43.8227 -1.96983ZM78.6833 26.9641L43.6571 -2.1152L38.547 4.04L73.5731 33.1193L78.6833 26.9641ZM75.0782 40.9788C76.9051 40.9788 78.6186 40.3181 79.89 39.0021C81.0968 37.753 81.6319 36.2016 81.7823 34.8166C82.0742 32.129 81.0411 29.1435 78.8489 27.1094L73.4075 32.9739C73.5388 33.0957 73.664 33.2776 73.7468 33.5009C73.8332 33.7337 73.8344 33.9045 73.8291 33.9529C73.8228 34.0107 73.8343 33.7564 74.1364 33.4436C74.2919 33.2827 74.4844 33.152 74.6898 33.0688C74.8912 32.9873 75.0364 32.9788 75.0782 32.9788V40.9788ZM71 40.9788H75.0782V32.9788H71V40.9788ZM74 37.9788C74 39.6357 72.6569 40.9788 71 40.9788V32.9788C68.2386 32.9788 66 35.2174 66 37.9788H74ZM74 68.2918V37.9788H66V68.2918H74ZM59.9492 73.775C61.3162 73.7855 64.0009 73.8086 66.3665 73.6128C67.513 73.5179 68.8366 73.3539 69.9638 73.0197C70.5031 72.8598 71.2974 72.5769 72.0367 72.0391C72.7991 71.4847 74 70.2587 74 68.2918H66C66 66.7148 66.975 65.8284 67.3311 65.5694C67.6642 65.3271 67.8719 65.2957 67.6899 65.3496C67.3744 65.4432 66.7162 65.5565 65.7065 65.6401C63.7597 65.8012 61.4343 65.7861 60.0103 65.7752L59.9492 73.775ZM59.3143 73.7714C59.4705 73.7714 59.6779 73.7729 59.9492 73.775L60.0104 65.7752C59.7511 65.7732 59.5082 65.7714 59.3143 65.7714V73.7714ZM46.9208 73.7714H59.3143V65.7714H46.9208V73.7714ZM42.9846 49.0031L42.9208 69.7591L50.9208 69.7837L50.9846 49.0277L42.9846 49.0031ZM41.9846 48C42.5381 48 42.9863 48.4496 42.9846 49.0031L50.9846 49.0277C50.9999 44.0463 46.966 40 41.9846 40V48ZM37 48H41.9846V40H37V48ZM36 49C36 48.4477 36.4477 48 37 48V40C32.0294 40 28 44.0294 28 49H36ZM36 69.7714V49H28V69.7714H36ZM17.922 73.7714H32V65.7714H17.922V73.7714ZM17.256 73.775C17.5378 73.773 17.756 73.7714 17.922 73.7714V65.7714C17.7196 65.7714 17.4671 65.7733 17.1968 65.7753L17.256 73.775ZM3.20048 67.8755C2.98572 69.9277 4.15659 71.3152 4.99341 71.9644C5.75576 72.5559 6.58762 72.8536 7.11926 73.0139C8.24739 73.3541 9.58304 73.5182 10.7318 73.6127C13.1118 73.8084 15.844 73.7855 17.256 73.775L17.1967 65.7753C15.7242 65.7862 13.351 65.8011 11.3876 65.6396C10.3646 65.5554 9.719 65.4421 9.4292 65.3547C9.25188 65.3012 9.51562 65.3475 9.89727 65.6436C10.3534 65.9975 11.331 67.0456 11.157 68.7081L3.20048 67.8755ZM3.17876 38.8356V68.2918H11.1788V38.8356H3.17876ZM5.03039 40.83C3.98626 40.7524 3.17876 39.8826 3.17876 38.8356H11.1788C11.1788 35.6945 8.75626 33.0851 5.62389 32.8521L5.03039 40.83ZM3.38209 40.7074L5.03038 40.83L5.62389 32.8521L3.9756 32.7295L3.38209 40.7074ZM-1.49192 27.1094C-6.43917 31.6997 -3.63082 40.7184 3.67884 40.7184V32.7184C3.69498 32.7184 3.74025 32.7219 3.80079 32.7426C3.85964 32.7628 3.90939 32.7911 3.94627 32.8192C4.01433 32.8709 4.01543 32.9011 4.00541 32.8738C3.99565 32.8473 4.00358 32.8411 3.99735 32.8715C3.99349 32.8903 3.98512 32.9157 3.97061 32.9418C3.9553 32.9693 3.94312 32.9797 3.94942 32.9739L-1.49192 27.1094ZM33.6992 -2.11517L-1.32635 26.9641L3.78384 33.1192L38.8094 4.03998L33.6992 -2.11517Z" fill="#989898" mask="url(#path-1-inside-1_200_60)"/>
        </svg></a>
        <a href="index.php">
          <div>Home</div>
        </a>
      </li>
      <li>
        <!-- Add the svg for the jobs page that was create and imported from figma -->
        <a href = "jobs.php"><svg width="88" height="78" viewBox="0 0 88 78" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask id="path-1-outside-1_200_51" maskUnits="userSpaceOnUse" x="0" y="0" width="88" height="79" fill="black">
        <rect fill="white" width="88" height="79"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M55.0487 44.1821C57.5999 40.1748 59.07 35.4646 59.07 30.4248C59.07 15.8308 46.7422 4 31.535 4C16.3278 4 4 15.8308 4 30.4248C4 45.0188 16.3278 56.8496 31.535 56.8496C38.0944 56.8496 44.1181 54.6484 48.8478 50.9739L75.802 72.9871C77.7673 74.5921 80.6019 74.2531 82.1332 72.2298C83.6645 70.2064 83.3127 67.2651 81.3474 65.66L55.0487 44.1821ZM31.535 49.4901C20.5631 49.4901 11.6687 40.9543 11.6687 30.4248C11.6687 19.8953 20.5631 11.3594 31.535 11.3594C42.5069 11.3594 51.4014 19.8953 51.4014 30.4248C51.4014 40.9543 42.5069 49.4901 31.535 49.4901Z"/>
        </mask>
        <path  class="body" fill-rule="evenodd" clip-rule="evenodd" d="M55.0487 44.1821C57.5999 40.1748 59.07 35.4646 59.07 30.4248C59.07 15.8308 46.7422 4 31.535 4C16.3278 4 4 15.8308 4 30.4248C4 45.0188 16.3278 56.8496 31.535 56.8496C38.0944 56.8496 44.1181 54.6484 48.8478 50.9739L75.802 72.9871C77.7673 74.5921 80.6019 74.2531 82.1332 72.2298C83.6645 70.2064 83.3127 67.2651 81.3474 65.66L55.0487 44.1821ZM31.535 49.4901C20.5631 49.4901 11.6687 40.9543 11.6687 30.4248C11.6687 19.8953 20.5631 11.3594 31.535 11.3594C42.5069 11.3594 51.4014 19.8953 51.4014 30.4248C51.4014 40.9543 42.5069 49.4901 31.535 49.4901Z" fill="white"/>
        <path class="stroke" d="M55.0487 44.1821L51.6745 42.034L49.7658 45.0321L52.5185 47.2802L55.0487 44.1821ZM48.8478 50.9739L51.378 47.8758L48.9101 45.8602L46.3938 47.8151L48.8478 50.9739ZM75.802 72.9871L78.3321 69.889L75.802 72.9871ZM82.1332 72.2298L85.3227 74.6437L85.3227 74.6437L82.1332 72.2298ZM81.3474 65.66L78.8172 68.7581V68.7581L81.3474 65.66ZM55.07 30.4248C55.07 34.6729 53.8337 38.6423 51.6745 42.034L58.4229 46.3303C61.366 41.7074 63.07 36.2562 63.07 30.4248H55.07ZM31.535 8C44.6898 8 55.07 18.1935 55.07 30.4248H63.07C63.07 13.4681 48.7946 0 31.535 0V8ZM8 30.4248C8 18.1935 18.3802 8 31.535 8V0C14.2755 0 0 13.4681 0 30.4248H8ZM31.535 52.8496C18.3802 52.8496 8 42.6561 8 30.4248H0C0 47.3815 14.2755 60.8496 31.535 60.8496V52.8496ZM46.3938 47.8151C42.3527 50.9547 37.1891 52.8496 31.535 52.8496V60.8496C38.9997 60.8496 45.8835 58.3422 51.3019 54.1326L46.3938 47.8151ZM46.3176 54.072L73.2718 76.0852L78.3321 69.889L51.378 47.8758L46.3176 54.072ZM73.2718 76.0852C76.993 79.1243 82.4232 78.4748 85.3227 74.6437L78.9437 69.8158C78.8464 69.9444 78.7432 69.9869 78.6553 69.9974C78.5673 70.0079 78.457 69.991 78.3321 69.889L73.2718 76.0852ZM85.3227 74.6437C88.1525 70.9047 87.5093 65.528 83.8775 62.5619L78.8172 68.7581C78.9501 68.8666 79.053 69.039 79.0798 69.2631C79.1066 69.4872 79.0472 69.679 78.9437 69.8158L85.3227 74.6437ZM83.8775 62.5619L57.5789 41.084L52.5185 47.2802L78.8172 68.7581L83.8775 62.5619ZM7.66865 30.4248C7.66865 43.317 18.5107 53.4901 31.535 53.4901V45.4901C22.6155 45.4901 15.6687 38.5916 15.6687 30.4248H7.66865ZM31.535 7.35944C18.5107 7.35944 7.66865 17.5326 7.66865 30.4248H15.6687C15.6687 22.258 22.6155 15.3594 31.535 15.3594V7.35944ZM55.4014 30.4248C55.4014 17.5326 44.5593 7.35944 31.535 7.35944V15.3594C40.4545 15.3594 47.4014 22.258 47.4014 30.4248H55.4014ZM31.535 53.4901C44.5593 53.4901 55.4014 43.317 55.4014 30.4248H47.4014C47.4014 38.5916 40.4545 45.4901 31.535 45.4901V53.4901Z" fill="#989898" mask="url(#path-1-outside-1_200_51)"/>
        <ellipse cx="31.5" cy="30" rx="16.5" ry="16" fill="#F7F7F7"/>
        </svg></a>  
        <a href="jobs.php">
          <div>Jobs</div>
        </a>
      </li>
      <li>
        <!-- Add the svg for the contact page that was create and imported from figma -->

        <a href="contact.php">
                    <svg class="inactive" width="96" height="69" viewBox="0 0 96 69" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_189_72" fill="white">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15 0C6.71573 0 0 6.71573 0 15V41.4774C0 49.7617 6.71571 56.4774 15 56.4774H32.01L30.5523 65.0776C30.0658 67.9483 33.5423 69.7594 35.616 67.7156L47.0184 56.4774H80.8803C89.1645 56.4774 95.8803 49.7617 95.8803 41.4774V15C95.8803 6.71573 89.1646 0 80.8803 0H15Z"/>
                    </mask>
                    <path class="body" fill-rule="evenodd" clip-rule="evenodd" d="M15 0C6.71573 0 0 6.71573 0 15V41.4774C0 49.7617 6.71571 56.4774 15 56.4774H32.01L30.5523 65.0776C30.0658 67.9483 33.5423 69.7594 35.616 67.7156L47.0184 56.4774H80.8803C89.1645 56.4774 95.8803 49.7617 95.8803 41.4774V15C95.8803 6.71573 89.1646 0 80.8803 0H15Z" fill="white"/>
                    <path class="stroke" d="M32.01 56.4774L35.9537 57.1459L36.745 52.4774H32.01V56.4774ZM30.5523 65.0776L34.4961 65.746L34.4961 65.746L30.5523 65.0776ZM35.616 67.7156L38.4238 70.5645L38.4238 70.5645L35.616 67.7156ZM47.0184 56.4774V52.4774H45.3785L44.2106 53.6286L47.0184 56.4774ZM4 15C4 8.92487 8.92487 4 15 4V-4C4.50659 -4 -4 4.50659 -4 15H4ZM4 41.4774V15H-4V41.4774H4ZM15 52.4774C8.92486 52.4774 4 47.5526 4 41.4774H-4C-4 51.9708 4.50657 60.4774 15 60.4774V52.4774ZM32.01 52.4774H15V60.4774H32.01V52.4774ZM34.4961 65.746L35.9537 57.1459L28.0662 55.809L26.6086 64.4092L34.4961 65.746ZM32.8082 64.8667C32.925 64.7516 33.1412 64.6293 33.4077 64.5975C33.6434 64.5694 33.835 64.6206 33.9722 64.6921C34.1093 64.7635 34.2611 64.8912 34.3731 65.1005C34.4998 65.3371 34.5235 65.5844 34.4961 65.746L26.6086 64.4092C25.4733 71.1074 33.5852 75.3334 38.4238 70.5645L32.8082 64.8667ZM44.2106 53.6286L32.8082 64.8667L38.4238 70.5645L49.8263 59.3263L44.2106 53.6286ZM80.8803 52.4774H47.0184V60.4774H80.8803V52.4774ZM91.8803 41.4774C91.8803 47.5526 86.9554 52.4774 80.8803 52.4774V60.4774C91.3737 60.4774 99.8803 51.9708 99.8803 41.4774H91.8803ZM91.8803 15V41.4774H99.8803V15H91.8803ZM80.8803 4C86.9554 4 91.8803 8.92486 91.8803 15H99.8803C99.8803 4.5066 91.3737 -4 80.8803 -4V4ZM15 4H80.8803V-4H15V4Z" fill="#989898" mask="url(#path-1-inside-1_189_72)"/>
                    </svg>
          </a>
        <a href="contact.php">
          <div>Contact</div>
        </a>
      </li>
      <!-- Add the styles for the apply <a> linking to apply page -->
        <a href="apply.php">
           <li class = "active">
        <a href="apply.php">
          <div>Apply</div>
        </a>
      </li>
    </ul>
  </nav>
  <!-- Group all the elements together with a div and assign the style of container and content -->
  <div class="container content">
    <div>
      <div class="card">
        <!-- Create the heading and information titles -->
        <h2 class="heading">Send Your Application</h2>
        <p class="infoTitle">Fill all the form fields</p>
        <form class="mainForm" id="mainForm" method="post" enctype="multipart/form-data">
          <!-- Fieldset 1 -->
          <fieldset id="fieldset1">
            <div class="form-card">
               <!-- Job select dropdown -->
              <label  class="fieldlabels" for="job">Select Job:</label>
              <div class="selectArea">
                <select id="job" name="job">
                   <!-- Options for selecting the job -->
                  <option value="sel" disabled selected>Select</option>
                  <option value="cashier">Cashier</option>
                  <option value="barista">Barista</option>
                  <option value="manager">Manager</option>
                </select> 
              </div>
               <!-- All the information input boxes: first name, last name, email, and phone number -->
              <label class="fieldlabels">First Name: </label> 
              <input type="text" name="fname" placeholder="First Name" id = "fname"/>
              <label class="fieldlabels">Last Name: </label>
              <input type="text" name="lname" placeholder="Last Name"  id = "lname"/>
              <label class="fieldlabels">Email: </label> 
              <input type="email" name="email" placeholder="Email"  id = "email"/>  
              <label class="fieldlabels">Phone Number: </label> 
              <input type="tel" name="phno" placeholder="Phone No."  id = "phno"/> 
            </div>
            <h3 id="nextDetails" style="display:none"></h3> 
             <!-- Button to go to the next page -->
            <input type="button" name="next" class="navigation-button-next" value="Next" id="nextButton"/>

          </fieldset>
           <!-- Fieldset 2, starts off as hidden to the right of the screen -->
          <fieldset id="fieldset2" style="display:none">
            <div class="form-card">
               <!-- Gender select dropdown -->
              <label for="gender" class="fieldlabels">Select Gender:</label>
              <div class="selectArea">
                <select id="gender" name="gender">
                   <!-- Options to select gender -->
                  <option value="sel" disabled selected>Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                  </select>
              </div>
               <!-- Date input for data of birth -->
              <label class="fieldlabels" for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob">
               <!-- A textarea for user to tell them about themselves -->
              <label class="fieldlabels">Tell Us About Yourself: </label> 
              <textarea rows = 4 placeholder="Briefly Describe Yourself."  id = "description" style="resize:none;"></textarea>
               <!-- A div of the upload button: Add Your Resume -->
              <div class="uploadStyles">
              <label class="fieldlabels">Add Your Resume</label> 
              <!-- Upload Button -->
              <input type="file" name="upload" accept="application/pdf" id="upload"/>
            </div>
            </div>
            <h3 id="submitDetails"></h3> 
             <!-- Button to submit the application -->
            <input type="submit" name="submit" class="navigation-button-next" value="Submit" id = "submitButton"/>
             <!-- Button to go to the previous page of the application -->
            <input type="button" name="previous" class="navigation-button-previous" value="Previous" id="prevButton"/>
          </fieldset>
          <fieldset id="fieldset3" style="display:none">
             <!-- Page to show confirmation of application submission -->
            <div class="form-card" style="text-align: center;">
              <h4>Success! You Sent Your Info and Made Boba!</h4>
              <br><br><br>
              <!-- SVG of a checkmark -->
              <img src="images/tick-icon.svg" style="width:35px;"> 
            </div> 
            </div>
          </fieldset>
        </form>
      </div>
    <!-- Boba container, display set to hidden -->
    <div class="boba-container" id = "bobaContainer" style="display:none">
    <h3 class="flavor-label" id="flavorLabel">As you fill out the form, your boba will be created!</h3>
      <div class="boba-cup" id="bobaCup">
      </div>        
      <br><br><br>
    </div>
  </div>
    <!-- Link to local and extneral javascript files-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="javascript/apply.js"></script>
</body>
</html>

<?php

// Require the vendor's autoload script
// Using all of the AWS client and database scripts
require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\DynamoDb\DynamoDbClient;
use Aws\Lambda\LambdaClient;
use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

$uuidString = $uuid->toString();

$region = 'us-east-1';
$version = 'latest';
$bucket = 'resumes-application-upload';
$tableName = 'Applications';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_FILES["upload"]["name"])) {

        $file_name = basename($_FILES["upload"]["name"]);
        $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_name = substr($file_name, 0, -4)."-".date("Y_m_d")."-".$_POST["email"].$file_type;
        $allowTypes = array('pdf','doc','docx','xls','xlsx','jpg','png','jpeg','gif');
        if(in_array($file_type, $allowTypes)){

            $file_temp_src = $_FILES["upload"]["tmp_name"];

            if(is_uploaded_file($file_temp_src)){

                $s3 = new S3Client([
                    'version' => $version,
                    'region' => $region
                ]);

                try {

                    $result = $s3->putObject([
                        'Bucket' => $bucket,
                        'Key'    => $file_name,
                        'ACL'    => 'public-read',
                        'SourceFile' => $file_temp_src
                    ]);
                    $result_arr = $result->toArray();

                    if(!empty($result_arr['ObjectURL'])) {
                        $s3_file_link = $result_arr['ObjectURL'];
                        $client = new DynamoDbClient([
                            'region'  => 'us-east-1',
                            'version' => 'latest'
                        ]);

                      $item = [
                          'fname' => ['S' => $_POST['fname']],
                          'lname' => ['S' => $_POST['lname']],
                          'email' => ['S' => $_POST['email']],
                          'phonenumber' => ['S' => $_POST['phno']],
                          'job' => ['S' => $_POST['job']],
                          'gender' => ['S' => $_POST['gender']],
                          'dob' => ['S' => $_POST['dob']],
                          'resume' => ['S' => "https://resumes-application-upload.s3.amazonaws.com/" . $file_name],
                          'applicationID' => ['S' => $uuidString]
                      ];

                        $params = [
                            'TableName' => $tableName,
                            'Item'      => $item
                        ];

                        try {
                            $result = $client->putItem($params);
                          $functionName = 'sendEmail';
                          
                          try{
                          $payload = json_encode(['subject' => 'HiroTeaBar Application', 'name' => $_POST['fname'], 'rec'=>$_POST["email"]]); // Example payload

                          // Create an AWS Lambda client
                          $lambda = new LambdaClient([    'region' => 'us-east-1', // Change this to your desired region
                                                     'version' => 'latest',]);

                          // Invoke the Lambda function
                          $result = $lambda->invoke([
                              'FunctionName' => $functionName,
                              'Payload'      => $payload,
                          ]);
                          $responseData = $result->toArray(); // or $result['data']
                          }catch (Aws\Exception\AwsException $e){
                          error_log('LambdaException ' . $e->getMessage());
                          }

                        } catch (Exception $e) {
                        }
                    }
                } catch (Aws\S3\Exception\S3Exception $e) {
                    error_log('S3 Exception: ' . $e->getMessage());
                    $api_error = 'S3 Exception: ' . $e->getMessage();
                }
            } 
        } 
    } 
}
?>