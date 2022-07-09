<main>
    <!-- aktivasi navigasi -->
    <script>
        document.querySelector('.itemnav').style.opacity = "0.5";
        const active = document.getElementById('home')
        active.style.opacity = 1;
    </script>
    <!-- process data untuk summary -->
    <?php include "../code/processHome.php" ?>

    <div class="sumhead">
        <img src="../assets/images/summary.svg" alt="illustration">
        <h1>Welcome back, <?php echo $_SESSION['username'] ?></h1>
        <p>This page contain summary ot total Operator, Operator of <strong>Primary Mining Unit </strong> (Belaz and Shovel) , and <strong>Mining Support Unit </strong>(Dozer, Grader, Compac, etc). </p>
        <a href="?page=search"><i class="fi fi-rr-search-alt adjust"></i> Check Plan and Realize</a>
    </div>
    <div class="sumbox">
        <h2>Total Manpower - Primary Mining Unit</h2>
        <div class="sumcontentbox">
            <div class="box">
                <h3>Belaz - Hauler</h3>
                <p><?php echo $belaz ?></p>
                <img width=100 height=100 src="../assets/images/thai.png" alt="illus">
            </div>
            <div class="box">
                <h3>Shovel - Loader</h3>
                <p><?php echo $shovel ?></p>
                <img width=100 height=100 src="../assets/images/thai.png" alt="illus">
            </div>
        </div>
    </div>
    <div class="sumbox">
        <h2>Total Manpower - Minning Support Unit</h2>
        <div class="sumcontentbox">
            <div class="box">
                <h3>Bulldozer</h3>
                <p><?php echo $dozer ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Grader</h3>
                <p><?php echo $grader ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Pemandu Belaz</h3>
                <p><?php echo $pbelaz ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Pemandu Shovel</h3>
                <p><?php echo $pshovel ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Foreman</h3>
                <p><?php echo $foreman ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Water Truck</h3>
                <p><?php echo $wt ?></p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
        </div>
    </div>
</main>   