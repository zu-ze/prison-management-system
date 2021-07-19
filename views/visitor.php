<div class="visitor-form">
    <fieldset>
        <caption><h3>Fill in your details please!</h3></caption>
        <hr>
        <form action="/home/select" method="post">
            <input type="hidden" name="">
            <div class="flex-row justify-space-between">
                <label for="firstname">Firstname: </label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="flex-row justify-space-between">
                <label for="lastname">Lastname: </label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div class="flex-row justify-space-between">
                <label for="national-id">National-ID No: </label>
                <input type="text" name="national-id" id="national-id">
            </div>
            <div class="flex-row justify-space-between">
                <label for="phone-number">Phone No: </label>
                <input type="text" name="phone-number" id="phone-number">
            </div>
            <div class="flex-row justify-space-between">
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </div>
            <div class="flex-row justify-space-between">
                <label for="current-location">Current location: </label>
                <input type="text" name="current-location" id="current-location">
            </div>
            <div class="flex-row justify-space-between">
                <label for="visit-date">Visit Date: </label>
                <input type="date" name="visit-date" id="visit-date">
            </div>
            <div class="flex-row justify-space-between">
                <label for="relation">Relation with inmate: </label>
                <select name="relation" id="relation">
                    <option value="1">Parent</option>
                    <option value="2">Brother</option>
                    <option value="3">Sister</option>
                    <option value="4">Cousin</option>
                    <option value="5">Son</option>
                    <option value="6">Daughter</option>
                    <option value="7">Grand parent</option>
                    <option value="8">Other</option>
                </select>
            </div>
            <div class="flex-row">
                <button class="btn" type="submit">SUBMIT</button>
            </div>
        </form>
    </fieldset>
</div>