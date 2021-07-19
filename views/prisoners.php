<div class="container">
    <div class="flex-column justify-space-center">
        <button class="btn" id='add-prisoner-btn'>Add New Prisoner</button>
    </div>
    <hr>
    <fieldset id="add-prisoner" class="shadowed">
        <caption><h3>Enter Details of New Prisoner</h3></caption>
        <hr>
        <form action="/prisoners" method="post">
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
                        <option value="2">Male</option>
                        <option value="3">Female</option>
                    </select>
                </div>
            </div>
            <div class="flex-row justify-space-between">
                <div class="form-group flex-row justify-space-between">
                    <label for="firstname">Firstname: </label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="form-group flex-row justify-space-between">
                    <label for="firstname">Firstname: </label>
                    <input type="text" name="firstname" id="firstname">
                </div>
            </div>
            <div>
                <button class="btn" type="submit">SUBMIT</button>
            </div>
        </form>
    </fieldset>
    <div class="flex-row">
        <div class="profile shadowed">
            <div class="summary-banner">
                <div class="image">
                    <img src="/views/images/profile.jpg" alt="" srcset="">
                </div>
                <div class="profile-info">
                    <div>
                        <label for="">Identity No: <span>PR9868</span></label>
                    </div>
                    <div>
                        <label for="">Firstname: <span>Manando</span></label>
                    </div>
                    <div>
                        <label for="">Surname: <span>Tsabola</span></label>
                    </div>
                    <div>
                        <label for="">Cell No: <span>CC654</span></label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="info-banner">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ut, in maiores modi ducimus illo cum tempore optio atque. 
                Excepturi dignissimos distinctio autem quidem porro quaerat 
                temporibus veniam expedita eum asperiores.</p>
            </div>
        </div>
        <div class="profile shadowed">
            <div class="summary-banner">
                <div class="image">
                    <img src="/views/images/profile.jpg" alt="" srcset="">
                </div>
                <div class="profile-info">
                    <div>
                        <label for="">Identity No: <span>PR9868</span></label>
                    </div>
                    <div>
                        <label for="">Firstname: <span>Manando</span></label>
                    </div>
                    <div>
                        <label for="">Surname: <span>Tsabola</span></label>
                    </div>
                    <div>
                        <label for="">Cell No: <span>CC654</span></label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="info-banner">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ut, in maiores modi ducimus illo cum tempore optio atque. 
                Excepturi dignissimos distinctio autem quidem porro quaerat 
                temporibus veniam expedita eum asperiores.</p>
            </div>
        </div>
    </div>
</div>