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
        <a href="index.php" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
          Home
        </a>
        <a href="profile.html" class="no-underline block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
          Profile
        </a>
      </div>
      <div>
        <a href="post-job.html" class="inline-block text-sm px-4 py-2 leading-none rounded text-white mt-4 lg:mt-0 mr-4 no-underline hover:text-teal hover:bg-white">Post a job!</a>
      </div>
      <div>
        <a href="login.html" class="inline-block text-sm px-4 py-2 leading-none rounded text-white mt-4 lg:mt-0 mr-4 no-underline hover:text-teal hover:bg-white">Log in</a>
      </div>
      <div>
        <a href="signupForm.html" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0 no-underline">Sign up</a>
      </div>
    </div>
  </nav>
  </div>
  <div class="w-1/5 bg-teal"></div>
</div>

<div class="flex">
  <div class="w-1/5"></div>
  <div class="w-3/5">

    <div class="flex mb-4">
      <div class="w-1/4">

        <div class="bg-blue-lightest border-t border-b border-blue text-blue-dark px-4 py-2 m-4">
          <p class="font-bold text-center">Search</p>
        </div>

        <div class="container py-2 mx-auto m-4 px-4">
          <input class="w-full h-8 rounded focus:outline-none focus:shadow-outline text-base shadow-lg p-2" type="search" placeholder="Search...">
        </div>

        <div class="bg-blue-lightest border-t border-b border-blue text-blue-dark px-4 py-2 m-4">
          <p class="font-bold text-center">Categories</p>
        </div>

        <label class="md:w-2/3 block text-black font-bold m-4">
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">Laundry</span>
          <br>
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">Office</span>
        </label>

        <div class="bg-blue-lightest border-t border-b border-blue text-blue-dark px-4 py-2 m-4">
          <p class="font-bold text-center">Salary</p>
        </div>  

        <label class="md:w-2/3 block text-black font-bold m-4">
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">£0-£2.9</span>
          <br>
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">£3-£5.9</span>
          <br>
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">Over £6</span>
        </label>

        <div class="bg-blue-lightest border-t border-b border-blue text-blue-dark px-4 py-2 m-4">
          <p class="font-bold text-center">Job Length</p>
        </div>  

        <label class="md:w-2/3 block text-black font-bold m-4">
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">One Time</span>
          <br>
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">7 Days</span>
          <br>
          <input class="mr-2 leading-tight" type="checkbox">
          <span class="text-sm">Over 7 Days</span>
        </label>

      </div>
      <div class="w-3/4">
        <div class="container mb-2">
          <?php require_once "includes/createJobList.php"
          ?>
          <!-- <div class="max-w-md w-full lg:flex mx-auto mt-4 shadow-md">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
            </div>
            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <div class="text-black font-bold text-xl mb-2">
                <a href="full-job-description.html"> Can coffee make you a better developer?</a></div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
              </div>
              <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                  <p class="text-black leading-none">Jonathan Reinink</p>
                  <p class="text-grey-dark">Aug 18</p>
                </div>
              </div>
            </div>
          </div>

          <div class="max-w-md w-full lg:flex mx-auto mt-4 shadow-md">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
            </div>
            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
              </div>
              <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                  <p class="text-black leading-none">Jonathan Reinink</p>
                  <p class="text-grey-dark">Aug 18</p>
                </div>
              </div>
            </div>
          </div> -->

        </div>
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
