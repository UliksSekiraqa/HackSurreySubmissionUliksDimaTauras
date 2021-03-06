<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Tailwind CSS Skeleton</title>
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta name="author" content="">

 <!-- Font Awesome if you need it
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
<!--Replace with your tailwind.css once created-->

</head>
<?php 
  $taskID = $_GET["TaskID"];
  $getTaskInfo = "SELECT *
                        FROM tasks
                        WHERE TaskID =$taskID";
  require_once "includes/dbconnect.php";
  $result = $conn->query($getTaskInfo);
  $taskInfo = $result->fetch_assoc();

  $creatorID = $taskInfo["CreatorID"];
  $getCreatorInfoQuery = "SELECT Forename, Surname, Registration_date, Location
                       FROM users
                       WHERE UserID = ' $creatorID'";
  $userResult = $conn->query($getCreatorInfoQuery);
  $CreatorInfo = $userResult->fetch_assoc();

  $conn->close();
?> 

<body class="bg-grey-lightest font-sans leading-normal tracking-normal">
  <div class="flex">
   <div class="w-1/5 bg-teal"></div>
   <div class="w-3/5 bg-teal">
     <nav class="flex items-center justify-between flex-wrap bg-teal p-6">

     <div class="flex items-center flex-no-shrink text-white mr-6">
       <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
       <span class="font-semibold text-xl tracking-tight">Anti-DIY</span>
     </div>
     <div class="block lg:hidden">
       <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
         <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
       </button>
     </div>
     <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
       <div class="text-sm lg:flex-grow">
         <a href="index.php" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
           Home
        </a>
         <a href="post_job_form.html" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
           Post Job
         </a>       
       </div>
       <div>
         <a href="login.html" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Login</a>
       </div>
     </div>
   </nav>
   </div>
   <div class="w-1/5 bg-teal"></div>
 </div>
<div class=~
 <div class="flex">
  <div class="w-1/5"></div>
  <div class="w-full">

    <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
      <div class="sm:flex sm:items-center px-6 py-4">
        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="https://previews.123rf.com/images/kurhan/kurhan1103/kurhan110300100/9050894-happy-man.jpg" alt="https://previews.123rf.com/images/kurhan/kurhan1103/kurhan110300100/9050894-happy-man.jpg">
        <div class="text-center sm:text-left sm:flex-grow">
          <div class="mb-4">
            <p class="text-xl leading-tight text-black">Name: <?php echo $CreatorInfo["Forename"], ' ',$CreatorInfo["Surname"]?></p>
            &nbsp
            <p class="text-sm leading-tight text-grey-dark">Member Since: <?php echo $CreatorInfo["Registration_date"]?></p>
            &nbsp
            <p class="text-sp leading-tight text-black">Location: <?php echo $CreatorInfo["Location"]?></p>
          </div>

        </div>
      </div>
    </div>

  </div>
  &nbsp
  <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
    <div class="sm:flex sm:items-center px-6 py-4">
      <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="" alt="">
      <div class="text-center sm:text-left sm:flex-grow">
        <p class="text-xl leading-tight text-black">Description:</p>
        &nbsp
        <p class="text-x1 leading-tight text-black"><?php echo $taskInfo["Description"]?></p>
  </div>
  &nbsp


  <div class="w-1/5"></div>


   </div>
   &nbsp
 </div>
 <!-- &nbsp
 <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
   <div class="sm:flex sm:items-center px-6 py-4">
     <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="" alt="">
     <div class="text-center sm:text-left sm:flex-grow">
       <p class="text-xl leading-tight text-black">Select which jobs you would like to undertake:</p>
       &nbsp
       <p class="text-x1 leading-tight text-grey-dark">""</p>
</div>
&nbsp
&nbsp
<div>
  &nbsp
<input id="op1" type="checkbox" name="options[]" value="Lawn Mowing" />
<label for="op1">Lawn Mowing</label>
<br/>
<input id="op2" type="checkbox" name="options[]" value="Laundry" />
<label for="op2">Laundry</label>
<br/>
<input id="op3" type="checkbox" name="options[]" value="Watering Plants" />
<label for="op3">Watering Plants</label>
<br/>
</select>
&nbsp
</div>
&nbsp-->

  </div>
</div>
  &nbsp
  &nbsp
  <div class="bg-white mx-auto max-w-sm shadow-lg rounded-lg overflow-hidden">
    <div class="sm:flex sm:items-center px-6 py-4">
      <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="" alt="">
      &nbsp
      <div class="text-center sm:text-left sm:flex-grow">
        &nbsp
        &nbsp
         <form>
          Why you feel you would be suitable:<br>
          <input type="text" id="text" name="text_name" style="width: 300px; height: 300px" /><br>
         </form>
         <button type="button" onclick="alert('Application Submitted.')">Submit Application</button>
    </div>
</body>

</html>
