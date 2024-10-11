<div class="top-bar">
    <img class="logo" src="/src/img/filasia.png">
    <h1 class="title">Filipinas Asia Glass and Doors Corp.</h1>
    <div class="debug">
        <span class="textDebug">This software is currently in development, not indicative
            of final product</span>
    </div>

    <span id="clock"></span>
    <!-- Display the dynamic username and role -->
    <div class="user-info">
        <h1 class="user-name">
            <?php echo $userName; ?>
        </h1> <!-- Display name based on role -->
        <span class="user-role">
            <?php echo ucfirst($role); ?>
        </span> <!-- Display role -->
    </div>

    <!-- Display user icon based on role -->
    <img class="user-icon" src="<?php echo $userImage; ?>" alt="User Icon">

</div>