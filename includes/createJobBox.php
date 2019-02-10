<?php 
    $TaskID = 1;
    require_once "dbconnect.php";
    $getTaskInfoQuery = "SELECT *
                         FROM tasks
                         WHERE TaskID = '$TaskID'";
    $taskResult = $conn->query($getTaskInfoQuery);
    $taskInfo = $taskResult->fetch_assoc();

    $creatorID = $taskInfo["CreatorID"];
    $getCreatorInfoQuery = "SELECT Forename, Surname
                         FROM users
                         WHERE UserID = ' $creatorID'";
    $userResult = $conn->query($getCreatorInfoQuery);
    $CreatorInfo = $userResult->fetch_assoc();
    $conn->close();
?>
<div class="max-w-md w-full lg:flex mx-auto mt-4 shadow-md">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://tailwindcss.com/img/card-left.jpg')" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
            <div class="text-black font-bold text-xl mb-2">
                <a href="full-job-description.html"> <?php echo $taskInfo["Topic"]?></a>
            </div>
            <p class="text-grey-darker text-base"><?php echo $taskInfo["Description"]?></p>
        </div>
        <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
            <div class="text-sm">
                <p class="text-black leading-none"><?php echo $CreatorInfo["Forename"], ' ', $CreatorInfo["Surname"]?></p>
                <p class="text-grey-dark"><?php echo $taskInfo["Creation_time"]?></p>
            </div>
        </div>
    </div>
</div>