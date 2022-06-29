<main class="searchContent">
    <h1>Search Data</h1>
    <div class="datebox">
        <form action="#" method="get">
            <div>
                <label for="startdate">Start Date</label>
                <input type="date" id="startdate" name="startdate" required>            
            </div>
            <div>
                <label for="enddate">End Date</label>
                <input type="date" id="enddate" name="enddate" required>            
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
            <button type="submit" id="btnsearch"><i class="fi fi-rr-search adjust"></i> Collect Data</button>
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