<main>
    <script>
        document.querySelector('.itemnav').style.opacity = "0.5";
        const active = document.getElementById('home')
        active.style.opacity = 1;
    </script>
    <div class="sumhead">
        <img src="../assets/images/summary.svg" alt="illustration">
        <h1>Welcome back, <?php echo $_SESSION['username'] ?></h1>
        <p>This page contain summary ot total Operator, Operator of <strong>Primary Mining Unit </strong> (Belaz and Shovel) , and <strong>Mining Support Unit </strong>(Dozer, Grader, Compac, etc). </p>
        <a href="#"><i class="fi fi-rr-search-alt adjust"></i> Check Plan and Realize</a>
    </div>
    <div class="sumbox">
        <h2>Total Manpower - Primary Mining Unit</h2>
        <div class="sumcontentbox">
            <div class="box">
                <h3>Belaz - Hauler</h3>
                <p>68</p>
                <img width=100 height=100 src="../assets/images/thai.png" alt="illus">
            </div>
            <div class="box">
                <h3>Shovel - Loader</h3>
                <p>14</p>
                <img width=100 height=100 src="../assets/images/thai.png" alt="illus">
            </div>
        </div>
    </div>
    <div class="sumbox">
        <h2>Total Manpower - Minning Support Unit</h2>
        <div class="sumcontentbox">
            <div class="box">
                <h3>Bulldozer - APT</h3>
                <p>18</p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Grader - APT</h3>
                <p>9</p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>PC200 - APT</h3>
                <p>4</p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Compac - APT</h3>
                <p>5</p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
            <div class="box">
                <h3>Water Tank - APT</h3>
                <p>4</p>
                <img width=100 height=100 src="../assets/images/pakistani.png" alt="illus">
            </div>
        </div>
    </div>
</main>   