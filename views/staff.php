<div class="container">
<fieldset id="add-staff" class="shadowed">
        <caption><h3>Enter Details of New Staff</h3></caption>
        <hr>
        <form action="/admin/staff" method="post">
            <div class="flex-row justify-space-between">
                <div class="form-group flex-row justify-space-between ">
                    <label for="firstname">Firstname: </label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="form-group flex-row justify-space-between">
                    <label for="surname">Surname: </label>
                    <input type="text" name="surname" id="surname">
                </div>
            </div>
            <div class="flex-row justify-space-between">
                <div class="form-group flex-row justify-space-between">
                    <label for="DOB">Date Of Birth: </label>
                    <input type="date" name="DOB" id="DOB">
                </div>
                <div class="form-group flex-row justify-space-between">
                    <label for="gender">Gender: </label>
                    <select name="gender" id="gender">
                        <option value="1">...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="flex-row justify-space-between">
                <div class="form-group flex-row justify-space-between">
                    <label for="national_id">National Id: </label>
                    <input type="text" name="national_id" id="national_id">
                </div>
                <div class="form-group flex-row justify-space-between">
                    <label for="marital_status">Marital Status: </label>
                    <select name="marital_status" id="marital_status">
                        <option value="1">choose...</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>
            </div>
            <div class="flex-row justify-space-between">
                <div class="form-group flex-row justify-space-between">
                    <label for="job_desc">Job Description: </label>
                    <input type="text" name="job_desc" id="job_desc">
                </div>
                <div></div>
            </div>
            <div>
                <button class="btn" type="submit">SUBMIT</button>
            </div>
        </form>
    </fieldset>
</div>