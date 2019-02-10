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
          <span class="font-semibold text-xl tracking-tight">Company</span>
        </div>
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
          <div class="text-sm lg:flex-grow">
            <a href="#responsive-header" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
              Home
            </a>
            <a href="#responsive-header" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
              Profile
            </a>
          </div>
          <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none rounded text-white mt-4 lg:mt-0 mr-4 no-underline hover:text-teal hover:bg-white">Post a job!</a>
          </div>
          <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none rounded text-white mt-4 lg:mt-0 mr-4 no-underline hover:text-teal hover:bg-white">Log in</a>
          </div>
          <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0 no-underline">Sign up</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="w-1/5 bg-teal"></div>
  </div>

  <div class="flex">
    <div class="w-1/5"></div>
    <div class="w-3/5">

      <hr>
      <div class="bg-white mx-auto w-full shadow-lg rounded-lg overflow-hidden">
        <div class="sm:flex sm:items-center px-6 py-4">
          <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="https://avatars2.githubusercontent.com/u/4323180?s=400&u=4962a4441fae9fba5f0f86456c6c506a21ffca4f&v=4" alt="">
          <div class="text-center sm:text-left sm:flex-grow">
            <div class="mb-4">
              <p class="text-xl leading-tight"><?php echo $CreatorInfo["Forename"], ' ',$CreatorInfo["Surname"]?></p>
              <hr>
              <p class="text-sm leading-tight text-grey-dark">Member since: <?php echo $CreatorInfo["Registration_date"]?></p>
              <p class="text-sm leading-tight text-grey-dark">Location: <?php echo $CreatorInfo["Location"]?></p>
            </div>
          </div>
        </div>
      </div>

        <hr>
        <div class="bg-white mx-auto w-full shadow-lg rounded-lg overflow-hidden">
          <div class="sm:flex sm:items-center px-6 py-4">
            <div role="alert">
              <div class="bg-teal text-white font-bold rounded-t px-4 py-2">
                Description of the job
              </div>
              <div class="border border-t-0 border-teal rounded-b bg-teal-lightest px-4 py-3 text-black">
                <p><?php echo $taskInfo["Description"]?></p>
              </div>
            </div>
          </div>

          <div class="sm:flex px-6 py-4">
            <div class="flex-1" role="alert">
              <div class="bg-teal text-white font-bold rounded-t px-4 py-2">
                Location
              </div>
              <div class="border border-t-0 border-teal rounded-b bg-teal-lightest px-4 py-3 text-black">
                <p>Guildford</p>
              </div>
            </div>
            &emsp;&emsp;
            <div class="flex-1" role="alert">
              <div class="bg-teal text-white font-bold rounded-t px-4 py-2">
                Price of the job
              </div>
              <div class="border border-t-0 border-teal rounded-b bg-teal-lightest px-4 py-3 text-black">
                <p>Price of the job</p>
              </div>
            </div>

            &emsp;&emsp;
            <div class="flex-1" role="alert">
              <div class="bg-teal text-white font-bold rounded-t px-4 py-2">
                Topic
              </div>
              <div class="border border-t-0 border-teal rounded-b bg-teal-lightest px-4 py-3 text-black">
                <p>Topic</p>
              </div>
            </div>
          </div>
        </div>

        <hr>
        <div class="bg-white mx-auto w-full shadow-lg rounded-lg overflow-hidden">
          <div class="sm:flex sm:items-center px-6 py-4">
            <form class="bg-white rounded" id="apply-form">
              <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2 w-full" for="username">
                  Write a short summary on why we should employ you! We would like to find out more. This can determine whether you are chosen for this job.
                </label>
                <textarea class=" shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline" name="comment" placeholder="Summary" form="apply-form"></textarea>
              </div>

              <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-32 mx-auto" type="submit">
                Apply!
              </button>
            </form>
          </div>
        </div>

    </div>
    <div class="w-1/5"></div>
  </div>



  <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
-->

</body>

</html>
