<main class="searchContent">
    <script>
        document.querySelector('.itemnav').style.opacity = "0.5";
        const active = document.getElementById('search')
        active.style.opacity = 1;
    </script>
    <h1>Search Data</h1>
    <div class="datebox">
        <form action="../code/direct.php" method="get">
            <div>
                <label for="startdate">Start Date</label>
                <input type="date" id="startdate" name="startdate" required>            
            </div>
            <div>
                <label for="enddate">End Date</label>
                <input type="date" id="enddate" name="enddate" required>            
            </div>
            <div>
                <label for="shift">Shift</label>
                <select name="shift" id="shift" required>
                    <option value="1">Shift 1</option>
                    <option value="2">Shift 2</option>
                    <option value="3">All Shift</option>
                </select>            
            </div>
            <script>
                const enddate = document.getElementById('enddate');
                enddate.addEventListener('change', () => {
                    if(document.getElementById('startdate').value > enddate.value){
                        alert('End Date must be greater that Start Date, please select correct Date!');
                        document.getElementById('btnsearch').disabled = true;
                    } else {
                        document.getElementById('btnsearch').disabled = false;
                    }
                })
            </script>
            <button type="submit" id="btnsearch" name="search"><i class="fi fi-rr-search adjust"></i> Collect Data</button>
        </form>
    </div>
    <figure id="illussearch">
        <figcaption>
            <h1>Wait for searching . . .</h1>
            <p>Select Start and End Date for the data you want to displayed</p>
        </figcaption>
        <img src="../assets/images/search.svg" alt="illustration" width="500" height="auto">
    </figure>
</main>