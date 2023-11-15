<center>
        <h1 class="adm">Admission Form</h1>
     </center>
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST" >
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="Submit" value="Apply" name="apply">
            </div>
        </form>
    </div>